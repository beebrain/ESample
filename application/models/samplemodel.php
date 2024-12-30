<?php
class samplemodel extends CI_Model
{


    public function updateActive($uid, $testid, $fileaddress, $controldoc)
    {
        $docnumber = $controldoc->docnumber;
        $docyear = $controldoc->year;
        $data = array(
            'userActive' => $uid,
            'fileActive' => $fileaddress,
            "testActive" => "1",
            "docnumber" => $docnumber . "/" . $docyear,
            "activeDate" => date("Y-m-d")
        );
        $docnumber += 1;

        $this->db->trans_begin();
        $this->db->where('testid', $testid);
        $this->db->update('es_testapp', $data);
        $this->db->trans_commit();
        return $docnumber;
    }

    public function get_test_by_id($testid)
    {
        $this->db->where('testid', $testid);
        $query = $this->db->get('es_testapp');
        return $query->row();
    }

    public function update_reviewer_confirm($testid, $data)
    {
        $this->db->where('testid', $testid);
        return $this->db->update('es_testapp', $data);
    }

    public function check_test_reviewer($testid, $reviewer_id)
    {
        $this->db->where('testid', $testid);
        $this->db->where('reviewer_id', $reviewer_id);
        $query = $this->db->get('es_testapp');
        return $query->num_rows() > 0;
    }

    public function is_review_confirmed($testid)
    {
        $this->db->where('testid', $testid);
        $this->db->where('reviewer_confirm IS NOT NULL');
        $query = $this->db->get('es_testapp');
        return $query->num_rows() > 0;
    }

    public function updateReviwer($testid, $updateData)
    {

        $updateData['review_assigntime'] = date('Y-m-d H:i:s');

        $this->db->where('testid', $testid);
        $this->db->update('es_testapp', $updateData);
    }


    public function updateOperation($testid, $controldoc, $activatedate)
    {
        $this->db->where('testid', $testid);
        $this->db->order_by('sampleid', 'ASC');
        $querySampledetail = $this->db->get("es_sampletest")->result();

        $this->db->trans_begin();
        $operationnumber = $controldoc->operationnumber;

        foreach ($querySampledetail as $key => $value) {
            $data = array(
                'operationnumber' => $activatedate . "/" . $operationnumber,
            );
            $sampleid = $value->sampleid;
            $operationnumber = sprintf("%05d", intval($operationnumber) + 1);

            $this->db->where('sampleid', $sampleid);
            $this->db->update('es_sampletest', $data);
        }
        $this->db->trans_commit();
        return $operationnumber;
    }
    public function insertsample($datainsert, $sampledata)
    {
        $this->db->trans_begin();

        $this->db->insert('es_testapp', $datainsert);
        $lastid = $this->db->insert_id();

        foreach ($sampledata as $key => $value) {
            $servicedetail =  $value["servicedetail"];

            $datasample = array(
                "testid" => $lastid,
                "samplename" => $servicedetail["samplename"],
                "textpack" => $servicedetail["textpack"],
                "totalprice" => $servicedetail["totalprice"],
                "appearance" => $servicedetail["appearance"],
                "amount" => $servicedetail["amount"]
            );
            $this->db->insert('es_sampletest', $datasample);
            $lastidSample = $this->db->insert_id();

            foreach ($servicedetail["selectedID"] as $key => $value) {

                $dataservice = array(
                    "serviceid" => $value,
                    "sampleid" => $lastidSample,
                );
                $this->db->insert('es_sampletestservice', $dataservice);
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return null;
        } else {
            $this->db->trans_commit();
            return $lastid;
        }
    }



    public function gettestappwithid($sampleid)
    {
        $this->db->where("testid", $sampleid);
        $querySample = $this->db->get("es_testapp");
        log_message("Debug", $this->db->last_query());
        return $querySample;
    }


    public function getsamplewithid($sampleid)
    {

        $this->db->where($sampleid);
        $querySample = $this->db->get("es_testapp");


        $this->db->where($sampleid);
        $querySampledetail = $this->db->get("es_sampletest");

        $arrayquery["Sample"] = $querySample;
        $arrayquery["Sampledetail"] = $querySampledetail;
        return $arrayquery;
    }

    public function getsampleTracking($trackNo)
    {

        $this->db->where('trackNo', $trackNo);
        $querySample = $this->db->get("es_testapp")->result();

        $sampleid = $querySample[0]->testid;
        return $sampleid;
    }



    public function get_total_records($isactive = false, $additionalConditions = '')
    {
        if ($isactive) {
            $this->db->where("testActive", "1");
        }

        if ($additionalConditions) {
            $this->db->where($additionalConditions, NULL, FALSE);
        }

        $this->db->from('es_testapp');
        return $this->db->count_all_results();
    }


    public function get_filtered_records($searchValue, $isactive = False)
    {
        $this->db->select('*');
        $this->db->from('es_testapp t');
        if ($isactive) {
            $this->db->where("testActive", "1");
        }

        // Apply search query if available
        if (!empty($searchValue)) {
            $this->db->group_start();
            $this->db->like('t.testid', $searchValue);
            $this->db->or_like('t.sci_id', $searchValue);
            $this->db->or_like('t.trackno', $searchValue);
            $this->db->or_like('t.sampleName', $searchValue);
            $this->db->or_like('t.senderAgencyname', $searchValue);
            $this->db->or_like('t.telephone', $searchValue);
            $this->db->or_like('t.reportcharge', $searchValue);

            $this->db->group_end();
        }

        $query = $this->db->get();
        return $query->num_rows();
    }


    public function get_datatable($start, $length, $searchValue, $orderColumn, $orderDir, $additionalConditions = array())
    {
        $this->db->select('*');
        $this->db->from('es_testapp t');

        // Apply additional conditions
        foreach ($additionalConditions as $condition) {
            $this->db->where($condition, NULL, FALSE);
        }

        // Apply search
        if (!empty($searchValue)) {
            $this->db->group_start();
            $this->db->like('t.testid', $searchValue);
            $this->db->or_like('t.sampleName', $searchValue);
            $this->db->or_like('t.senderAgencyname', $searchValue);
            $this->db->group_end();
        }

        // Apply ordering
        if (isset($orderColumn) && isset($orderDir)) {
            $this->db->order_by($orderColumn, $orderDir);
        }

        // Apply pagination
        $this->db->limit($length, $start);

        return $this->db->get()->result();
    }

    // sample test
    public function get_sample_details($sampleid)
    {
        $this->db->select('es_sampletestservice.*,es_sampletest.sampleid, es_sampletest.samplename, es_sampletest.textpack, es_sampletest.totalprice, es_service.service, es_service.method, es_service.price');
        $this->db->from('es_sampletest');
        $this->db->join('es_sampletestservice', 'es_sampletest.sampleid = es_sampletestservice.sampleid', 'inner');
        $this->db->join('es_service', 'es_sampletestservice.serviceid = es_service.id', 'inner');
        $this->db->where('es_sampletest.sampleid', $sampleid); // Filter by sampleid
        $query = $this->db->get();
        log_message("Debug", $this->db->last_query());
        return $query;
    }


    public function checkiscomplete()
    {
        $this->db->select('es_sampletest.sampleid, es_sampletest.operationnumber, es_sampletest.samplename, 
        COUNT(es_sampletestservice.id) as total_services, 
        SUM(CASE WHEN es_sampletestservice.completetime IS NOT NULL THEN 1 ELSE 0 END) as completed_services');
        $this->db->from('es_sampletest');
        $this->db->join('es_sampletestservice', 'es_sampletest.sampleid = es_sampletestservice.sampleid', 'left');
        $this->db->group_by('es_sampletest.sampleid');
        $query = $this->db->get();

        return $query;
    }

    public function get_test_status($testid = null)
    {
        $this->db->select('
            t.testid,
            t.docnumber,
            t.sampleName,
            t.senderAgencyname,
            t.telephone,
            t.reportCharge,
            t.createDate,
            COUNT(sts.id) AS total_services,
            SUM(CASE WHEN sts.completetime IS NOT NULL THEN 1 ELSE 0 END) AS completed_services,
            SUM(CASE WHEN sts.userrespon IS NOT NULL AND sts.userrespon != 0 THEN 1 ELSE 0 END) AS user_responses
        ');
        $this->db->from('es_testapp t');
        $this->db->join('es_sampletest st', 't.testid = st.testid', 'left');
        $this->db->join('es_sampletestservice sts', 'st.sampleid = sts.sampleid', 'left');
        $this->db->where('t.testactive', 1);
        if ($testid !== null) {
            $this->db->where('t.testid', $testid);
        }
        $this->db->group_by('t.testid');

        $query = $this->db->get();
        return $testid !== null ? $query->row() : $query->result();
    }

    public function check_test_completion_and_response($testid)
    {
        $test_status = $this->get_test_status($testid);

        if ($test_status) {
            $status = new stdClass();
            $status->servicesCompleted = ($test_status->total_services > 0 && $test_status->total_services == $test_status->completed_services);
            $status->userResponseComplete = ($test_status->total_services > 0 && $test_status->total_services == $test_status->user_responses);
            return $status;
        }

        return null;
    }
}
