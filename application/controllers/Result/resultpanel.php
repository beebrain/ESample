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

        $condition  = array("testid" => $testid);
        $this->load->model("samplemodel");
        $resultArray = $this->samplemodel->getsamplewithid($condition);
        $querySample = $resultArray["Sample"]->result();
        $querySampledetail = $resultArray["Sampledetail"]->result();
        $result["Sample"] = $querySample;
        $result["Sampledetail"] = $querySampledetail;


        $this->load->view('genPDF/ReportTester', $result);
    }
}
