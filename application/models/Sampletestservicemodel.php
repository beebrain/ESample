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


    public function getworkAssigment($start, $length, $search, $completed, $uid = "")
    {
        $this->db->select('ta.docnumber, st.operationnumber, st.samplename, s.method, s.service, ta.senderAgencyname, sts.assigntime');
        $this->db->from('es_sampletestservice sts');
        $this->db->join('es_service s', 'sts.serviceid = s.id');
        $this->db->join('es_sampletest st', 'sts.sampleid = st.sampleid');
        $this->db->join('es_testapp ta', 'st.testid = ta.testid');

        if ($uid <> "") {
            $this->db->where('sts.userrespon', $uid);
        }
        if ($completed === 'true') {
            $this->db->where('sts.completetime IS NOT NULL');
        } elseif ($completed === 'false') {
            $this->db->where('sts.completetime IS NULL');
        }

        if ($search) {
            $this->db->group_start();
            $this->db->like('ta.docnumber', $search);
            $this->db->or_like('st.operationnumber', $search);
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
}
