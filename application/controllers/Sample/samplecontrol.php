<?php
defined('BASEPATH') or exit('No direct script access allowed');

class samplecontrol extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
        if (!$this->session->userdata('user_data')) {
            $this->session->unset_userdata('access_token');
            $this->session->unset_userdata('user_data');
            redirect('login/login');
        }
    }


    public function index() {}


    private function jsonconvert($encodedString)
    {
        // 1. Parse URL-encoded String
        parse_str($encodedString, $dataArray);

        // 2. Decode URL Encoding for Each Value (if needed)
        foreach ($dataArray as $key => &$value) {
            $value = urldecode($value);
        }

        // 3. Convert to JSON
        $jsonData = json_encode($dataArray, JSON_UNESCAPED_UNICODE);

        // Output or use the JSON data
        return $jsonData;
    }
    public function savesample()
    {


        $postdata = $this->input->post();
        $formdata = $postdata['gedata'];
        $sampleData = $postdata['sampledata'];


        $formdata_key = array();
        foreach ($formdata as $key => $value) {
            $formdata_key[$value["name"]] = $value["value"];
        }
        $data["info"] = "sampleData  not found";
        $data["value"] = null;
        if ($sampleData != null) {

            $this->load->model("samplemodel");
            $lastid = $this->samplemodel->insertsample($formdata_key, $sampleData);
            $data["info"] = "Data save completed";
            $data["value"] = $lastid;
        }

        echo json_encode($data);
    }

    public function getsampleid()
    {
        $sampleid = $this->input->post();

        $this->load->model("samplemodel");
        $resultArray = $this->samplemodel->getsamplewithid($sampleid);
        $querySample = $resultArray["Sample"]->result();
        $querySampledetail = $resultArray["Sampledetail"]->result();
        $result["Sample"] = $querySample;
        $result["Sampledetail"] = $querySampledetail;

        echo json_encode($result);
    }


    public function getsampletracking()
    {
        $trackNo = $this->input->post("trackNo");
        $this->load->model("samplemodel");
        $selectid = $this->samplemodel->getsampleTracking($trackNo);
        $condition = array("testid" => $selectid);

        $resultArray = $this->samplemodel->getsamplewithid($condition);
        $querySample = $resultArray["Sample"]->result();
        $querySampledetail = $resultArray["Sampledetail"]->result();
        $result["Sample"] = $querySample;
        $result["Sampledetail"] = $querySampledetail;

        echo json_encode($result);
    }


    public function get_test()
    {

        $this->load->model("samplemodel");

        // $user_info = $this->userModel->getallUser();
        // Get the search value from the DataTables AJAX request
        $searchValue = $this->input->post('search')['value'];

        // Get the total number of records in the table
        $totalRecords = $this->samplemodel->get_total_records();

        // Get the filtered number of records based on the search value and dastaid
        $filteredRecords = $this->samplemodel->get_filtered_records($searchValue);

        // Get the sorting parameters from the DataTable
        $orderColumn = $this->input->post('order')[0]['column'];
        $orderDir = $this->input->post('order')[0]['dir'];

        // Map DataTable's column index to your actual database column names
        $columns = array(
            0 => 'testid',
            1 => 'sci_id',
            2 => 'sampleName',
            3 => 'senderAgencyname',
            4 => 'telephone',
            5 => 'reportCharge',
            6 => 'createDate',
        );

        // Get the data for the current page with sorting applied
        $start = $this->input->post('start');
        $length = $this->input->post('length');

        // $data = $this->userModel->getallUser()
        $data = $this->samplemodel->get_datatable($start, $length, $searchValue, $columns[$orderColumn], $orderDir);

        // Prepare the response for DataTables
        $response = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $data
        );

        // Send the response as JSON
        echo json_encode($response);
    }



    public function get_testActive()
    {

        $this->load->model("samplemodel");

        // $user_info = $this->userModel->getallUser();
        // Get the search value from the DataTables AJAX request
        $searchValue = $this->input->post('search')['value'];

        // Get the total number of records in the table
        $totalRecords = $this->samplemodel->get_total_records(True);

        // Get the filtered number of records based on the search value and dastaid
        $filteredRecords = $this->samplemodel->get_filtered_records($searchValue, True);

        // Get the sorting parameters from the DataTable
        $orderColumn = $this->input->post('order')[0]['column'];
        $orderDir = $this->input->post('order')[0]['dir'];

        // Map DataTable's column index to your actual database column names
        $columns = array(
            0 => 'testid',
            1 => 'sci_id',
            2 => 'sampleName',
            3 => 'senderAgencyname',
            4 => 'telephone',
            5 => 'reportCharge',
            6 => 'createDate',
        );

        // Get the data for the current page with sorting applied
        $start = $this->input->post('start');
        $length = $this->input->post('length');

        // $data = $this->userModel->getallUser()
        $data = $this->samplemodel->get_datatable($start, $length, $searchValue, $columns[$orderColumn], $orderDir, True);

        // Prepare the response for DataTables
        $response = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $data
        );

        // Send the response as JSON
        echo json_encode($response);
    }


    public function saveactive()
    {

        // check is activated


        $inputdata = $this->input->post();
        $trackid = $inputdata["trackid"];
        $this->load->model('samplemodel');
        $this->load->model('controlSamplemodel');

        $trackid = array("testid" => $trackid);
        $resulttestApp = $this->samplemodel->getsamplewithid($trackid)["Sample"]->result()[0];
        if ($resulttestApp->testactive <> "1") {
            $this->load->model('userModel');
            $userdata = $this->session->userdata('user_data');
            $uid = $userdata["uid"];

            /// get control doc and
            $controldoc = $this->controlSamplemodel->getcontroldoc()->result()[0];


            $docnumber = $this->samplemodel->updateActive($uid, $inputdata["trackid"], $inputdata["fileaddress"], $controldoc);
            $operationnumber = $this->samplemodel->updateOperation($inputdata["trackid"], $controldoc);


            $this->controlSamplemodel->updateoperationNumber($operationnumber);
            $this->controlSamplemodel->updatedocnumber($docnumber);
            $datainfo["info"] = "success";
        } else {
            $datainfo["info"] = "duplication";
        }

        echo json_encode($datainfo);
    }

    public function get_sample_details()
    {


        $sampleid = $this->input->post('sampleid');

        $this->load->model("samplemodel");
        $resultArray = $this->samplemodel->get_sample_details($sampleid);

        $result["Sample"] = $resultArray->result();

        echo json_encode($result);
    }



    public function saveSampleTestService()
    {
        $this->load->model('userModel');
        $userdata = $this->session->userdata('user_data');
        $uid = $userdata["uid"];


        // Get the POST data
        $serviceId = $this->input->post('serviceid');
        $userId = $this->input->post('userid');

        // Validate input
        if (empty($serviceId) || empty($userId)) {
            $response = array('status' => 'error', 'message' => 'Invalid input data');
            echo json_encode($response);
            return;
        }

        // Call the model to save the data
        $this->load->model('Sampletestservicemodel');

        $result = $this->Sampletestservicemodel->updateassigntime($serviceId, $uid, $userId);

        if ($result) {
            $response = array('status' => 'success', 'message' => 'User selection saved successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to save user selection');
        }

        // Send JSON response
        echo json_encode($response);
    }

    public function get_data_assigment()
    {


        $this->load->model('userModel');
        $userdata = $this->session->userdata('user_data');
        $uid = $userdata["uid"];


        $this->load->model("Sampletestservicemodel");
        $draw = $this->input->post('draw');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $search = $this->input->post('search')['value'];
        $completed = $this->input->post('completed');

        if ($completed === null) {
            $completed = 'false';
        }

        $result = $this->Sampletestservicemodel->getworkAssigment($start, $length,  $search, $completed, $uid);

        $data = array();
        foreach ($result['data'] as $row) {
            $data[] = array(
                'docnumber' => str_pad($row->docnumber, 4, '0', STR_PAD_LEFT),
                'operationnumber' => str_pad($row->operationnumber, 5, '0', STR_PAD_LEFT),
                'samplename' => $row->samplename,
                'service' => $row->service,
                'method' => $row->method,
                'senderAgencyname' => $row->senderAgencyname,
                'assigntime' => date('d/m/Y', strtotime($row->assigntime))
            );
        }

        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => $result['total'],
            "recordsFiltered" => $result['filtered'],
            "data" => $data
        );

        echo json_encode($output);
    }
}
