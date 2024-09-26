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

        $searchValue = $this->input->post('search')['value'];
        $totalRecords = $this->samplemodel->get_total_records(True);
        $filteredRecords = $this->samplemodel->get_filtered_records($searchValue, True);

        $orderColumn = $this->input->post('order')[0]['column'];
        $orderDir = $this->input->post('order')[0]['dir'];

        $columns = array(
            0 => 'testid',
            1 => 'sci_id',
            2 => 'sampleName',
            3 => 'senderAgencyname',
            4 => 'telephone',
            5 => 'reportCharge',
            6 => 'createDate',
        );

        $start = $this->input->post('start');
        $length = $this->input->post('length');

        $data = $this->samplemodel->get_datatable($start, $length, $searchValue, $columns[$orderColumn], $orderDir, True);

        // Check completion status for each test
        foreach ($data as $test) {
            $status = $this->samplemodel->check_test_completion_and_response($test->testid);
            $test->servicesCompleted = $status ? $status->servicesCompleted : false;
            $test->userResponseComplete = $status ? $status->userResponseComplete : false;
        }
        $response = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $data
        );

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


            $getactivatedate = $this->samplemodel->gettestappwithid($inputdata["trackid"])->result()[0]->activeDate;

            $datetime = new DateTime($getactivatedate);
            $newYear = $datetime->format('Y') + 543;
            $activedate = $datetime->format('d-m-') . $newYear;


            $operationnumber = $this->samplemodel->updateOperation($inputdata["trackid"], $controldoc, $activedate);


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

    private function formatThaiDate($date)
    {
        if (!$date || $date == null) return '';
        $timestamp = strtotime($date);
        $thai_month_arr = array(
            "ม.ค.",
            "ก.พ.",
            "มี.ค.",
            "เม.ย.",
            "พ.ค.",
            "มิ.ย.",
            "ก.ค.",
            "ส.ค.",
            "ก.ย.",
            "ต.ค.",
            "พ.ย.",
            "ธ.ค."
        );
        $thai_date_return = date("d", $timestamp);
        $thai_date_return .= "/" . $thai_month_arr[date("m", $timestamp) - 1];
        $thai_date_return .= "/" . (date("Y", $timestamp) + 543);
        return $thai_date_return;
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
                'assigntime' => $this->formatThaiDate($row->assigntime),
                'completetime' => ($row->completetime <> "") ? $this->formatThaiDate($row->completetime) : "",
                'id' => $row->id,
                'testvalue' => $row->testvalue,
                'methodName' => $row->methodName,
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



    public function update_sample_test()
    {
        // Ensure this is a POST request
        if ($this->input->method() !== 'post') {
            $this->output->set_status_header(405)->set_output(json_encode(['success' => false, 'message' => 'Method Not Allowed']));
            return;
        }

        // user who save
        $userdata = $this->session->userdata('user_data');
        $uid = $userdata["uid"];


        // Get the data from the POST request
        $id = $this->input->post('id');
        $testvalue = $this->input->post('testvalue');
        $methodName = $this->input->post('methodName');

        // Validate the data
        if (!$id || !is_numeric($id)) {
            $this->output->set_status_header(400)->set_output(json_encode(['success' => false, 'message' => 'Invalid ID']));
            return;
        }

        // Load the model
        $this->load->model("Sampletestservicemodel");

        // Update the database
        $result = $this->Sampletestservicemodel->updateSampleTest($id, [
            'testvalue' => $testvalue,
            'methodName' => $methodName,
            'completetime' => date('Y-m-d H:i:s') // Set the completion time to now
        ]);

        if ($result) {
            $this->output->set_output(json_encode([
                'success' => true,
                'message' => 'Data updated successfully'
            ]));
        } else {
            $this->output->set_status_header(500)->set_output(json_encode([
                'success' => false,
                'message' => 'Database update failed'
            ]));
        }
    }


    public function getAllResultOperation()
    {

        $sampleid = $this->input->post("sampleid");
        $this->load->model("Sampletestservicemodel");

        $condition = array("sampleid" => $sampleid);
        $result = $this->Sampletestservicemodel->getSampleservice($condition)->result();

        echo json_encode($result);
    }

    public function get_method_names()
    {
        $this->load->model('methodmodel'); // Make sure to load your model
        $methods = $this->methodmodel->get_method_names(); // Create this method in your model
        echo json_encode($methods);
    }


    public function checkServicesCompleted()
    {

        $this->load->model('samplemodel');
        $query = $this->samplemodel->checkiscomplete();
        $results = array();
        foreach ($query->result() as $row) {
            $results[] = array(
                'sampleid' => $row->sampleid,
                'operationnumber' => $row->operationnumber,
                'samplename' => $row->samplename,
                'allCompleted' => ($row->total_services > 0 && $row->total_services == $row->completed_services)
            );
        }

        return $results;
    }
}
