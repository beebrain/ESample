<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userpanel extends CI_Controller
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

        $userdata  = $this->session->userdata('user_data');
        $data['userdata'] = $userdata;


        $query = $this->usermodel->getInfoUser($userdata["uid"]);
        $data['userdetail'] = $query->result();


        $this->load->view('user/userprofile', $data);
    }


    public function manageuser()
    {

        $userdata  = $this->session->userdata('user_data');
        $data['userdata'] = $userdata;


        $query = $this->usermodel->getInfoUser($userdata["uid"]);
        $data['userdetail'] = $query->result();


        $this->load->view('user/listUser', $data);
    }

    public function listwork()
    {
        $userdata  = $this->session->userdata('user_data');
        $data['userdata'] = $userdata;


        $query = $this->usermodel->getInfoUser($userdata["uid"]);
        $data['userdetail'] = $query->result();


        $this->load->view('sample/assignmentList', $data);
    }
}
