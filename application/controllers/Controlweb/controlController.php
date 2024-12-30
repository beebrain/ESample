<?php
defined('BASEPATH') or exit('No direct script access allowed');

class controlcontroller extends CI_Controller
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
}
