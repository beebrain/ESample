<?php
defined('BASEPATH') or exit('No direct script access allowed');

class resultpanel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel', "usermodel");
        if (!$this->session->userdata('user_data')) {
            $this->session->unset_userdata('access_token');
            $this->session->unset_userdata('user_data');
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view('sample/insertForm');
    }

    public function genreportTester($testid)
    {
        $condition = array("testid" => $testid);
        $this->load->model("samplemodel");
        $this->load->model("userModel");
        $this->load->model("Sampletestservicemodel");  // Load the Sampletestservicemodel

        $resultArray = $this->samplemodel->getsamplewithid($condition);
        $querySample = $resultArray["Sample"]->result();
        $querySampledetail = $resultArray["Sampledetail"]->result();

        // Retrieve full names for scientist and reviewer
        if (!empty($querySample[0]->scientist_id)) {
            $querySample[0]->scientist_name = $this->userModel->getFullName($querySample[0]->scientist_id);
        }

        if (!empty($querySample[0]->reviewer_id)) {
            $querySample[0]->reviewer_name = $this->userModel->getFullName($querySample[0]->reviewer_id);
        }

        // Get the latest test result and confirmation times
        $testResultTimes = $this->Sampletestservicemodel->getLatestTestResultTimes($testid);

        // Add these times to the sample data
        $querySample[0]->latest_test_result_time = $testResultTimes['latest_completetime'];
        $querySample[0]->latest_confirmation_time = $testResultTimes['latest_confirmtime'];

        $result["Sample"] = $querySample;
        $result["Sampledetail"] = $querySampledetail;

        $this->load->view('genPDF/ReportTester', $result);
    }
}
