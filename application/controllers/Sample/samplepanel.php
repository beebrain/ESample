<?php
defined('BASEPATH') or exit('No direct script access allowed');

class samplepanel extends CI_Controller
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

    public function list()
    {
        $this->load->view('sample/listtest');
    }


    public function listActive()
    {
        $this->load->view('sample/listActive');
    }

    public function createPDF($trackNo)
    {
        $result["trackNo"] = $trackNo;
        $this->load->view('genPDF/RequestFormpdf', $result);
    }

    public function activate($trackNo = "")
    {
        $result["trackNo"] = $trackNo;
        $this->load->view("sample/activateform", $result);
    }

    public function assignmentuser($idtest)
    {
        $result["idtest"] = $idtest;
        $this->load->view("sample/assignmentwork", $result);
    }

    // depend on user
    public function listwork()
    {
        $userData = $this->session->userdata('user_data');
        $this->load->model("Sampletestservicemodel");
    }

    public function printresult()
    {
        $userData = $this->session->userdata('user_data');
        $this->load->view("result/printresult", $userData);
    }

    public function approveresult()
    {
        $userData = $this->session->userdata('user_data');
        $this->load->view("result/approve", $userData);
    }
}
