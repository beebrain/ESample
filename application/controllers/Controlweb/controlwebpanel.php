<?php
defined('BASEPATH') or exit('No direct script access allowed');

class controlwebpanel extends CI_Controller
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
        $this->load->view('control/controlpanel');
    }


    public function listmethodTemplate() {}
}
