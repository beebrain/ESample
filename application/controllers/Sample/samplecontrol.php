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
        $userdata = $this->session->userdata('user_data');
        $uid = $userdata["uid"];



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


    public function get_TestApproveActive()
    {
        $this->load->model("samplemodel");
        $userdata = $this->session->userdata('user_data');
        $uid = $userdata["uid"];



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

        $data = $this->samplemodel->get_datatable($start, $length, $searchValue, $columns[$orderColumn], $orderDir, True, $uid, True);

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

        $result = $this->Sampletestservicemodel->getworkAssigment($start, $length,  $search, $completed, $confirm = False, $uid);



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
                'confirmtime' => ($row->confirmtime <> "") ? $this->formatThaiDate($row->confirmtime) : "",
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
        $methodId = $this->input->post('methodId');

        // Validate the data
        if (!$id || !is_numeric($id)) {
            $this->output->set_status_header(400)->set_output(json_encode(['success' => false, 'message' => 'Invalid ID']));
            return;
        }

        // Load the models
        $this->load->model("Sampletestservicemodel");
        $this->load->model("methodmodel");

        // If methodId is not provided, it's a new method
        if (!$methodId) {
            $methodId = $this->methodmodel->add_new_method($methodName);
        }

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

    public function getAllResultOperationdetail()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
            return;
        }

        $sampleid = $this->input->post('sampleid');
        if (!$sampleid) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => 'error',
                    'message' => 'Sample ID is required'
                ]));
            return;
        }

        $this->load->model("Sampletestservicemodel");
        $condition = array("sampleid" => $sampleid);
        $result = $this->Sampletestservicemodel->getSampleservice($condition)->result();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }


    public function get_method_names()
    {
        $term = $this->input->get('term');
        $this->load->model('methodmodel');
        $methods = $this->methodmodel->get_method_names($term);

        // Add error logging
        log_message('debug', 'get_method_names called with term: ' . $term);
        log_message('debug', 'Returned methods: ' . json_encode($methods));

        // Ensure the data is in the correct format
        $formatted_methods = array_map(function ($method) {
            return [
                'idmethod' => $method['idmethod'],
                'methodname' => $method['methodname']
            ];
        }, $methods);

        header('Content-Type: application/json');
        echo json_encode($formatted_methods);
    }

    public function add_new_method()
    {
        $methodName = $this->input->post('methodName');

        if (empty($methodName)) {
            echo json_encode(['success' => false, 'message' => 'Method name is required']);
            return;
        }

        $this->load->model('methodmodel');
        $newMethodId = $this->methodmodel->add_new_method($methodName);

        if ($newMethodId) {
            echo json_encode(['success' => true, 'id' => $newMethodId, 'methodName' => $methodName]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to add new method']);
        }
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


    public function get_completedtest()
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


    public function getTestResults()
    {
        $testid = $this->input->post('testid');

        if (!$testid) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => 'error',
                    'message' => 'Test ID is required'
                ]));
            return;
        }

        $condition = array("testid" => $testid);
        $this->load->model("samplemodel");
        $resultArray = $this->samplemodel->getsamplewithid($condition);

        $sampleData = $resultArray["Sample"]->row();
        $sampleDetails = $resultArray["Sampledetail"]->result();

        // Format the results
        $formattedResults = array_map(function ($detail) {
            return [
                'id' => $detail->id,
                'service' => $detail->service,
                'method' => $detail->method,
                'testvalue' => $detail->testvalue,
                'unit' => $detail->unit,
                'methodName' => $detail->methodName,
                'completetime' => $detail->completetime,
                'confirmtime' => $detail->confirmtime,
                'operationnumber' => $detail->operationnumber,
                'samplename' => $detail->samplename,
                'tester_name' => $detail->thai_name,
                'tester_lastname' => $detail->thai_lastname,
                'tester_firstname' => $detail->gf_name,
                'tester_lastname_en' => $detail->gl_name,
                'status' => $this->_getTestStatus($detail)
            ];
        }, $sampleDetails);

        $response = [
            'status' => 'success',
            'data' => $formattedResults,
            'sample' => [
                'docnumber' => $sampleData->docnumber,
                'sampleName' => $sampleData->sampleName,
                'senderAgencyname' => $sampleData->senderAgencyname,
                'datetime' => $sampleData->datetime
            ]
        ];

        echo json_encode($response);
    }


    private function _getTestStatus($result)
    {
        if ($result->confirmtime) {
            return [
                'code' => 'confirmed',
                'label' => 'ยืนยันแล้ว',
                'class' => 'badge-success'
            ];
        } elseif ($result->completetime) {
            return [
                'code' => 'completed',
                'label' => 'รอยืนยัน',
                'class' => 'badge-warning'
            ];
        } else {
            return [
                'code' => 'pending',
                'label' => 'รอผล',
                'class' => 'badge-danger'
            ];
        }
    }

    public function save_reviewers()
    {
        try {
            $testid = $this->input->post('testid');
            $scientist_id = $this->input->post('scientist_id');
            $reviewer_id = $this->input->post('reviewer_id');

            // Validate inputs
            if (!$testid || !$scientist_id || !$reviewer_id) {
                throw new Exception('กรุณากรอกข้อมูลให้ครบถ้วน');
            }

            if ($scientist_id === $reviewer_id) {
                throw new Exception('นักวิเคราะห์และผู้ทวนสอบต้องเป็นคนละคนกัน');
            }

            // Prepare data for update
            $updateData = array(
                'scientist_id' => $scientist_id,
                'reviewer_id' => $reviewer_id
            );

            // Call model to update data
            $this->load->model('samplemodel', 'Sample_model');
            $this->Sample_model->updateReviwer($testid, $updateData);

            $response = array(
                'success' => true,
                'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว'
            );
        } catch (Exception $e) {
            $response = array(
                'success' => false,
                'message' => $e->getMessage()
            );
        }

        echo json_encode($response);
    }

    public function get_reviewers()
    {
        try {
            $testid = $this->input->post('testid');

            if (!$testid) {
                throw new Exception('ไม่พบรหัสการทดสอบ');
            }

            $this->load->model('samplemodel', 'Sample_model');
            $result = $this->Sample_model->gettestappwithid($testid)->result()[0];

            echo json_encode($result);
        } catch (Exception $e) {
            echo json_encode(array(
                'error' => true,
                'message' => $e->getMessage()
            ));
        }
    }



    public function checkUserPermissions($testid, $userid)
    {
        // Get the test details
        $this->load->model('samplemodel');
        $test = $this->samplemodel->gettestappwithid($testid)->row();

        $permissions = new stdClass();
        $permissions->canConfirmTest = ($test->scientist_id == $userid);
        $permissions->canConfirmReview = ($test->reviewer_id == $userid);

        return $permissions;
    }



    public function approveResult()
    {
        try {
            $id = $this->input->post('id');

            // Load models
            $this->load->model('Sampletestservicemodel');
            $this->load->model('samplemodel');

            // Get current user ID from session
            $userconfirm = $this->session->userdata('user_data')["uid"];

            // Get test service with related test info
            $testService = $this->Sampletestservicemodel->get_service_with_test_info($id);
            if (!$testService) {
                throw new Exception('ไม่พบข้อมูลการทดสอบ');
            }

            // Get test application details
            $testApp = $this->samplemodel->get_test_by_id($testService->testid);
            if (!$testApp) {
                throw new Exception('ไม่พบข้อมูลการทดสอบหลัก');
            }

            // Check permissions and conditions
            if ($testApp->scientist_id != $userconfirm) {
                echo json_encode([
                    'success' => false,
                    'message' => 'ไม่มีสิทธิ์ในการยืนยันผลการทดสอบ เนื่องจากไม่ใช่ผู้รับผิดชอบการทดสอบนี้'
                ]);
                return;
            }

            if ($this->Sampletestservicemodel->is_result_confirmed($id)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'ผลการทดสอบนี้ได้รับการยืนยันแล้ว'
                ]);
                return;
            }

            if (!$this->Sampletestservicemodel->is_result_completed($id)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'ไม่สามารถยืนยันผลได้เนื่องจากยังไม่มีการบันทึกผลการทดสอบ'
                ]);
                return;
            }

            // Update the result
            $this->db->trans_begin();

            try {
                $data = array(
                    'confirmtime' => date('Y-m-d H:i:s'),
                    'userconfirm' => $userconfirm
                );

                $success = $this->Sampletestservicemodel->updateSampleTest($id, $data);
                if (!$success) {
                    throw new Exception('ไม่สามารถบันทึกการยืนยันผลได้');
                }

                $this->db->trans_commit();
                echo json_encode([
                    'success' => true,
                    'message' => 'ยืนยันผลการทดสอบเรียบร้อยแล้ว'
                ]);
            } catch (Exception $e) {
                $this->db->trans_rollback();
                throw $e;
            }
        } catch (Exception $e) {
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            }
            echo json_encode([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()
            ]);
        }
    }

    public function approveReview()
    {
        try {
            $testid = $this->input->post('testid');

            // Load models
            $this->load->model('samplemodel');

            // Get current user ID from session
            $reviewer_id = $this->session->userdata('user_data')["uid"];

            // Get test application details
            $testApp = $this->samplemodel->get_test_by_id($testid);
            if (!$testApp) {
                throw new Exception('ไม่พบข้อมูลการทดสอบ');
            }

            // Check if user has permission to review
            if (!$this->samplemodel->check_test_reviewer($testid, $reviewer_id)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'ไม่มีสิทธิ์ในการทบทวนผลการทดสอบ เนื่องจากไม่ใช่ผู้ทบทวนที่ได้รับมอบหมาย'
                ]);
                return;
            }

            // Check if review is already confirmed
            if ($this->samplemodel->is_review_confirmed($testid)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'การทบทวนนี้ได้รับการยืนยันแล้ว'
                ]);
                return;
            }

            // Check if all tests are confirmed
            $completionStatus = $this->samplemodel->check_test_completion_and_response($testid);
            if (!$completionStatus || !$completionStatus->servicesCompleted) {
                echo json_encode([
                    'success' => false,
                    'message' => 'ไม่สามารถทบทวนได้ เนื่องจากยังมีผลการทดสอบที่ยังไม่ได้รับการยืนยัน'
                ]);
                return;
            }

            // Begin transaction
            $this->db->trans_begin();

            try {
                // Update review confirmation
                $data = array(
                    'reviewer_confirm' => date('Y-m-d H:i:s')
                );

                $success = $this->samplemodel->update_reviewer_confirm($testid, $data);
                if (!$success) {
                    throw new Exception('ไม่สามารถบันทึกการทบทวนได้');
                }

                // Commit transaction
                $this->db->trans_commit();

                echo json_encode([
                    'success' => true,
                    'message' => 'ยืนยันการทบทวนเรียบร้อยแล้ว'
                ]);
            } catch (Exception $e) {
                $this->db->trans_rollback();
                throw $e;
            }
        } catch (Exception $e) {
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            }
            echo json_encode([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()
            ]);
        }
    }

    public function getTestStatus()
    {
        // Get DataTables parameters
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $search = $this->input->post('search')['value'];
        $order_column_index = $this->input->post('order')[0]['column'];
        $order_dir = $this->input->post('order')[0]['dir'];

        // Define column names for sorting
        $columns = array(
            0 => 'docnumber',
            1 => 'sampleName',
            2 => 'senderAgencyname',
            3 => 'scientist_name', // Will handle this in the query
            4 => 'reviewer_name',  // Will handle this in the query
            5 => 'test_result_status',
            6 => 'test_confirmation_status',
            7 => 'review_confirmation_status'
        );

        // Build the base query
        $this->db->select('
            t.testid,
            t.docnumber,
            t.sampleName,
            t.senderAgencyname,
            t.scientist_id,
            t.reviewer_id,
            t.review_assigntime,
            t.reviewer_confirm,
            sci.gf_name as scientist_name,
            sci.gl_name as scientist_lastname,
            rev.gf_name as reviewer_name,
            rev.gl_name as reviewer_lastname,
            COUNT(sts.id) as total_tests,
            SUM(CASE WHEN sts.completetime IS NOT NULL THEN 1 ELSE 0 END) as completed_tests,
            SUM(CASE WHEN sts.confirmtime IS NOT NULL THEN 1 ELSE 0 END) as confirmed_tests
        ');
        $this->db->from('es_testapp t');
        $this->db->join('es_user sci', 't.scientist_id = sci.uid', 'left');
        $this->db->join('es_user rev', 't.reviewer_id = rev.uid', 'left');
        $this->db->join('es_sampletest st', 't.testid = st.testid', 'left');
        $this->db->join('es_sampletestservice sts', 'st.sampleid = sts.sampleid', 'left');
        $this->db->where('t.testactive', 1);

        // Apply search if provided
        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('t.docnumber', $search);
            $this->db->or_like('t.sampleName', $search);
            $this->db->or_like('t.senderAgencyname', $search);
            $this->db->or_like('sci.gf_name', $search);
            $this->db->or_like('sci.gl_name', $search);
            $this->db->or_like('rev.gf_name', $search);
            $this->db->or_like('rev.gl_name', $search);
            $this->db->group_end();
        }

        // Group by to prevent duplicate rows
        $this->db->group_by('t.testid');

        // Get total records count (before filtering)
        $total_records = $this->db->count_all_results('', false);

        // Apply sorting
        if (isset($columns[$order_column_index])) {
            $this->db->order_by($columns[$order_column_index], $order_dir);
        }

        // Apply pagination
        $this->db->limit($length, $start);

        // Execute query
        $query = $this->db->get();
        $data = $query->result();

        // Process the results to add status fields
        foreach ($data as &$row) {
            // Calculate Test Result Status
            if ($row->total_tests == 0) {
                $row->test_result_status = 'Pending';
            } else if ($row->completed_tests == $row->total_tests) {
                $row->test_result_status = 'Completed';
            } else if ($row->completed_tests > 0) {
                $row->test_result_status = 'Partial';
            } else {
                $row->test_result_status = 'Pending';
            }

            // Calculate Test Confirmation Status
            if ($row->total_tests == 0) {
                $row->test_confirmation_status = 'Pending';
            } else if ($row->confirmed_tests == $row->total_tests) {
                $row->test_confirmation_status = 'Completed';
            } else if ($row->confirmed_tests > 0) {
                $row->test_confirmation_status = 'Partial';
            } else {
                $row->test_confirmation_status = 'Pending';
            }

            // Calculate Review Status
            if ($row->reviewer_confirm) {
                $row->review_confirmation_status = 'Completed';
            } else if ($row->review_assigntime) {
                $row->review_confirmation_status = 'In Progress';
            } else {
                $row->review_confirmation_status = 'Pending';
            }
        }

        // Prepare response
        $response = array(
            'draw' => intval($this->input->post('draw')),
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records, // In this case, same as total since we handle search in SQL
            'data' => $data
        );

        // Send response as JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function getStatusCounts()
    {
        // Initialize response array
        $response = array(
            'pending_assignment' => 0,
            'pending_results' => 0,
            'pending_confirmation' => 0,
            'pending_review' => 0
        );

        // Count pending assignments (tests without scientist assigned)
        $this->db->select('COUNT(*) as count');
        $this->db->from('es_testapp t');
        $this->db->where('t.testactive', 1);
        $this->db->where('(t.scientist_id IS NULL OR t.scientist_id = 0)');
        $query = $this->db->get();
        $result = $query->row();
        $response['pending_assignment'] = (int)$result->count;

        // Count pending results and confirmations
        $this->db->select('
        SUM(CASE 
            WHEN sts.completetime IS NULL 
            THEN 1 ELSE 0 
        END) as pending_results,
        SUM(CASE 
            WHEN sts.completetime IS NOT NULL 
            AND sts.confirmtime IS NULL 
            THEN 1 ELSE 0 
        END) as pending_confirmation
    ');
        $this->db->from('es_testapp t');
        $this->db->join('es_sampletest st', 't.testid = st.testid', 'inner');
        $this->db->join('es_sampletestservice sts', 'st.sampleid = sts.sampleid', 'inner');
        $this->db->where('t.testactive', 1);

        $query = $this->db->get();
        $result = $query->row();

        $response['pending_results'] = (int)$result->pending_results;
        $response['pending_confirmation'] = (int)$result->pending_confirmation;

        // Count pending reviews
        $this->db->select('COUNT(DISTINCT t.testid) as count');
        $this->db->from('es_testapp t');
        $this->db->where('t.testactive', 1);
        $this->db->where('t.reviewer_confirm IS NULL');

        $query = $this->db->get();
        $result = $query->row();
        $response['pending_review'] = (int)$result->count;

        // Log the counts for debugging if needed
        log_message('debug', 'Status Counts: ' . json_encode($response));

        // Send response as JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    /**
     * Alternative method using a single complex query
     * May be more efficient for large datasets
     */
    public function getStatusCountsOptimized()
    {
        $query = $this->db->query("
            SELECT 
                SUM(CASE WHEN scientist_id IS NULL THEN 1 ELSE 0 END) as pending_assignment,
                SUM(CASE 
                    WHEN scientist_id IS NOT NULL 
                    AND total_tests > completed_tests 
                    THEN 1 ELSE 0 END) as pending_results,
                SUM(CASE 
                    WHEN completed_tests = total_tests 
                    AND total_tests > confirmed_tests 
                    THEN 1 ELSE 0 END) as pending_confirmation,
                SUM(CASE 
                    WHEN completed_tests = total_tests 
                    AND confirmed_tests = total_tests 
                    AND reviewer_confirm IS NULL 
                    THEN 1 ELSE 0 END) as pending_review
            FROM (
                SELECT 
                    t.testid,
                    t.scientist_id,
                    t.reviewer_confirm,
                    COUNT(DISTINCT sts.id) as total_tests,
                    COUNT(DISTINCT CASE WHEN sts.completetime IS NOT NULL THEN sts.id END) as completed_tests,
                    COUNT(DISTINCT CASE WHEN sts.confirmtime IS NOT NULL THEN sts.id END) as confirmed_tests
                FROM es_testapp t
                LEFT JOIN es_sampletest st ON t.testid = st.testid
                LEFT JOIN es_sampletestservice sts ON st.sampleid = sts.sampleid
                WHERE t.testactive = 1
                GROUP BY t.testid, t.scientist_id, t.reviewer_confirm
            ) as status_summary
        ");

        $response = $query->row_array();

        // Ensure all counts are integers
        foreach ($response as &$count) {
            $count = intval($count);
        }

        // Send response as JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }


    public function getTestStatusDetails()
    {
        try {
            $testId = $this->input->post('testId');

            if (!$testId) {
                throw new Exception('Test ID is required');
            }

            // Load necessary models
            $this->load->model('samplemodel');
            $this->load->model('Sampletestservicemodel');

            // Get test information
            $testInfo = $this->samplemodel->gettestappwithid($testId)->row();

            if (!$testInfo) {
                throw new Exception('ไม่พบข้อมูลการทดสอบ');
            }

            // Get sample details
            $condition = array("testid" => $testId);
            $resultArray = $this->samplemodel->getsamplewithid($condition);
            $sampleDetails = $resultArray["Sampledetail"]->result();

            // Initialize statistics
            $stats = array(
                'total_tests' => 0,
                'completed_tests' => 0,
                'confirmed_tests' => 0
            );

            // Process each sample and get test services
            $samplesData = array();
            foreach ($sampleDetails as $sample) {
                $condition = array("sampleid" => $sample->sampleid);
                $services = $this->Sampletestservicemodel->getSampleservice($condition)->result();

                $testData = array();
                foreach ($services as $service) {
                    $stats['total_tests']++;
                    if ($service->completetime) $stats['completed_tests']++;
                    if ($service->confirmtime) $stats['confirmed_tests']++;

                    $testData[] = array(
                        'service_id' => $service->id,
                        'service' => $service->service,
                        'method' => $service->method,
                        'testvalue' => $service->testvalue,
                        'methodName' => $service->methodName,
                        'unit' => $service->unit,
                        'completetime' => $service->completetime ? date('d/m/Y H:i', strtotime($service->completetime)) : null,
                        'confirmtime' => $service->confirmtime ? date('d/m/Y H:i', strtotime($service->confirmtime)) : null,
                        'tester_name' => $service->respon_fname . ' ' . $service->respon_lname,
                        'assign_name' => $service->assign_fname . ' ' . $service->assign_lname,
                        'confirm_name' => $service->confirm_fname . ' ' . $service->confirm_lname,
                        'status' => array(
                            'code' => $service->confirmtime ? 'confirmed' : ($service->completetime ? 'completed' : 'pending'),
                            'text' => $service->confirmtime ? 'ยืนยันแล้ว' : ($service->completetime ? 'รอยืนยัน' : 'รอผล'),
                            'badge_class' => $service->confirmtime ? 'badge-success' : ($service->completetime ? 'badge-warning' : 'badge-danger')
                        )
                    );
                }

                $samplesData[] = array(
                    'sampleid' => $sample->sampleid,
                    'samplename' => $sample->samplename,
                    'operationnumber' => $sample->operationnumber,
                    'tests' => $testData
                );
            }

            // Get completion status
            $completionStatus = $this->samplemodel->check_test_completion_and_response($testId);

            // Prepare response data
            $response = array(
                'success' => true,
                'data' => array(
                    'test' => array(
                        'testid' => $testInfo->testid,
                        'docnumber' => $testInfo->docnumber,
                        'sampleName' => $testInfo->sampleName,
                        'senderAgencyname' => $testInfo->senderAgencyname,
                        'createDate' => date('d/m/Y', strtotime($testInfo->createDate)),
                        'activeDate' => $testInfo->activeDate ? date('d/m/Y', strtotime($testInfo->activeDate)) : null
                    ),
                    'samples' => $samplesData,
                    'stats' => $stats,
                    'completion_status' => $completionStatus,
                    'test_result_status' => array(
                        'code' => $stats['completed_tests'] === $stats['total_tests'] ? 'completed' : ($stats['completed_tests'] > 0 ? 'partial' : 'pending'),
                        'text' => $stats['completed_tests'] === $stats['total_tests'] ? 'ทดสอบครบถ้วน' : ($stats['completed_tests'] > 0 ? 'ทดสอบบางส่วน' : 'รอดำเนินการ'),
                        'badge_class' => $stats['completed_tests'] === $stats['total_tests'] ? 'badge-success' : ($stats['completed_tests'] > 0 ? 'badge-warning' : 'badge-danger')
                    ),
                    'confirmation_status' => array(
                        'code' => $stats['confirmed_tests'] === $stats['total_tests'] ? 'completed' : ($stats['confirmed_tests'] > 0 ? 'partial' : 'pending'),
                        'text' => $stats['confirmed_tests'] === $stats['total_tests'] ? 'ยืนยันครบถ้วน' : ($stats['confirmed_tests'] > 0 ? 'ยืนยันบางส่วน' : 'รอยืนยัน'),
                        'badge_class' => $stats['confirmed_tests'] === $stats['total_tests'] ? 'badge-success' : ($stats['confirmed_tests'] > 0 ? 'badge-warning' : 'badge-danger')
                    )
                )
            );

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(500)
                ->set_output(json_encode(array(
                    'success' => false,
                    'message' => $e->getMessage()
                )));
        }
    }

    private function _getTestServiceStatus($service)
    {
        if ($service->confirmtime) {
            return [
                'code' => 'confirmed',
                'text' => 'ยืนยันแล้ว',
                'badge_class' => 'badge-success',
                'timestamp' => $service->confirmtime
            ];
        } elseif ($service->completetime) {
            return [
                'code' => 'completed',
                'text' => 'รอยืนยัน',
                'badge_class' => 'badge-warning',
                'timestamp' => $service->completetime
            ];
        } else {
            return [
                'code' => 'pending',
                'text' => 'รอผล',
                'badge_class' => 'badge-danger',
                'timestamp' => null
            ];
        }
    }

    private function _getReviewStatus($test)
    {
        if ($test->reviewer_confirm) {
            return [
                'code' => 'reviewed',
                'text' => 'ทบทวนแล้ว',
                'badge_class' => 'badge-success',
                'timestamp' => $test->reviewer_confirm
            ];
        } elseif ($test->reviewer_id) {
            return [
                'code' => 'assigned',
                'text' => 'รอการทบทวน',
                'badge_class' => 'badge-warning',
                'timestamp' => $test->review_assigntime
            ];
        } else {
            return [
                'code' => 'pending',
                'text' => 'ยังไม่ได้มอบหมาย',
                'badge_class' => 'badge-danger',
                'timestamp' => null
            ];
        }
    }
}
