<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menuController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getMainMenu()
    {
        $this->load->model('mainmenumodel', 'mainmodel');
        $result = $this->mainmodel->getMainMenu();
        $mainMenu = $result->result();
        foreach ($mainMenu as $row) {
            $resultsub = $this->mainmodel->getsubmenu($row->menuid);
            $row->submenu = $resultsub->result();
        }
        $data["mainMenu"] = $mainMenu;

        $this->load->model('Usermodel', 'usermodel');
        $userdata  = $this->session->userdata('user_data');
        $data['userdata'] = $userdata;
        $query = $this->usermodel->getInfoUser($userdata["uid"]);
        $data['userdetail'] = $query->result();


        $this->load->view('menu/mainmenu', $data);
    }
}
