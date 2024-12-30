<?php
class Sampletestservicemodel extends CI_Model
{
    public function updateassigntime($id, $userassign, $userrespon)
    {
        $data["assigntime"] = date("Y-m-d");
        $data["userassign"] = $userassign;
        $data["userrespon"] = $userrespon;

        $condition["id"] = $id;

        $this->db->trans_begin();
        $this->db->where($condition);
        $this->db->update('es_sampletestservice', $data);
        $this->db->trans_commit();
        log_message('Debug', $this->db->last_query());
    }

    public function getworkAssigment($start, $length, $search, $completed, $confirm = True, $uid = "")
    {
        $this->db->select('ta.docnumber, st.operationnumber, st.samplename, s.method, s.service, 
        ta.senderAgencyname, sts.assigntime, sts.id, sts.testvalue, sts.unit, sts.methodName, sts.completetime,sts.confirmtime,sts.userconfirm');
        $this->db->from('es_sampletestservice sts');
        $this->db->join('es_service s', 'sts.serviceid = s.id');
        $this->db->join('es_sampletest st', 'sts.sampleid = st.sampleid');
        $this->db->join('es_testapp ta', 'st.testid = ta.testid');

        if ($uid <> "") {
            $this->db->where('sts.userrespon', $uid);
        }
        if ($completed === 'true') {
            $this->db->where('sts.completetime   IS NOT NULL');
        } elseif ($completed === 'false') {
            $this->db->where('sts.completetime IS NULL');
        }

        if ($confirm ===  True) {
            $this->db->where('sts.confirmtime   IS NOT NULL');
        } elseif ($completed === false) {
            $this->db->where('sts.confirmtime  IS NULL');
        }


        if ($search) {
            $this->db->group_start();
            $this->db->like('ta.docnumber', $search);
            $this->db->or_like('st.operationnumber', $search);
            $this->db->or_like('sts.completetime', $search);
            $this->db->or_like('st.samplename', $search);
            $this->db->or_like('s.service', $search);
            $this->db->or_like('s.method', $search);
            $this->db->or_like('ta.senderAgencyname', $search);
            $this->db->group_end();
        }

        $total_rows = $this->db->count_all_results('', FALSE);
        $filtered_rows = $this->db->count_all_results('', FALSE);

        $this->db->limit($length, $start);
        $query = $this->db->get();
        log_message('Debug', $this->db->last_query());

        return array(
            'total' => $total_rows,
            'filtered' => $filtered_rows,
            'data' => $query->result()
        );
    }

    public function updateSampleTest($id, $data)
    {
        $this->db->trans_begin();
        $this->db->where('id', $id);
        $this->db->update('es_sampletestservice', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            log_message('Debug', $this->db->last_query());
            return true;
        }
    }


    public function getSampleservice($condition)
    {
        $this->db->select('sts.*, s.service, s.method, 
            u1.gf_name as assign_fname, u1.gl_name as assign_lname,
            u2.gf_name as respon_fname, u2.gl_name as respon_lname,
            u3.gf_name as confirm_fname, u3.gl_name as confirm_lname,
            sts.assigntime, sts.completetime, sts.confirmtime');
        $this->db->from('es_sampletestservice sts');
        $this->db->join('es_service s', 'sts.serviceid = s.id');
        $this->db->join('es_user u1', 'sts.userassign = u1.uid', 'left');
        $this->db->join('es_user u2', 'sts.userrespon = u2.uid', 'left');
        $this->db->join('es_user u3', 'sts.userconfirm = u3.uid', 'left');

        // Modify the condition to specify the table
        if (isset($condition['id'])) {
            $this->db->where('sts.id', $condition['id']);
        } else {
            $this->db->where($condition);
        }

        $this->db->order_by('sts.id', 'ASC');

        $query = $this->db->get();
        log_message("Debug", $this->db->last_query());
        return $query;
    }


    public function get_service_with_test_info($id)
    {
        $this->db->select('sts.*, st.testid')
            ->from('es_sampletestservice sts')
            ->join('es_sampletest st', 'sts.sampleid = st.sampleid')
            ->where('sts.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function is_result_confirmed($id)
    {
        $this->db->where('id', $id);
        $this->db->where('confirmtime IS NOT NULL');
        $query = $this->db->get('es_sampletestservice');
        return $query->num_rows() > 0;
    }

    public function is_result_completed($id)
    {
        $this->db->where('id', $id);
        $this->db->where('completetime IS NOT NULL');
        $query = $this->db->get('es_sampletestservice');
        return $query->num_rows() > 0;
    }


    public function getLatestTestResultTimes($testid)
    {
        $this->db->select('MAX(completetime) as latest_completetime, MAX(confirmtime) as latest_confirmtime');
        $this->db->from('es_sampletestservice sts');
        $this->db->join('es_sampletest st', 'sts.sampleid = st.sampleid');
        $this->db->where('st.testid', $testid);

        $query = $this->db->get();
        $result = $query->row_array();

        return [
            'latest_completetime' => $result['latest_completetime'] ?? null,
            'latest_confirmtime' => $result['latest_confirmtime'] ?? null
        ];
    }
}
