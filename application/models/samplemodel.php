<?php
class samplemodel extends CI_Model
{


    public function updateActive($uid, $testid, $fileaddress, $controldoc)
    {
        $docnumber = $controldoc->docnumber;
        $data = array(
            'userActive' => $uid,
            'fileActive' => $fileaddress,
            "testActive" => "1",
            "docnumber" => $docnumber,
            "activeDate" => date("Y-m-d")
        );
        $docnumber += 1;

        $this->db->trans_begin();
        $this->db->where('testid', $testid);
        $this->db->update('es_testapp', $data);
        $this->db->trans_commit();
        return $docnumber;
    }


    public function updateOperation($testid, $controldoc)
    {
        $this->db->where('testid', $testid);
        $this->db->order_by('sampleid', 'ASC');
        $querySampledetail = $this->db->get("es_sampletest")->result();

        $this->db->trans_begin();
        $operationnumber = $controldoc->operationnumber;
        foreach ($querySampledetail as $key => $value) {
            $data = array(
                'operationnumber' => $operationnumber,
            );
            $sampleid = $value->sampleid;
            $operationnumber += 1;

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



    public function get_total_records($isactive = False)
    {
        if ($isactive) {
            $this->db->where("testActive", "1");
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


    public function get_datatable($start, $length, $searchValue, $orderColumn, $orderDir, $isactive = False)
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

        // Apply sorting based on DataTable's request
        if (isset($orderColumn) && isset($orderDir)) {
            $this->db->order_by($orderColumn, $orderDir);
        }

        // Apply LIMIT and OFFSET for pagination
        $this->db->limit($length, $start);

        $query = $this->db->get();
        return $query->result();
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
        return $query;
    }
}