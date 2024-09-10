<?php
defined('BASEPATH') or exit('No direct script access allowed');

class serviceController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getserviceGroup()
    {
        $this->load->model("servicemodel");
        $query = $this->servicemodel->getservicegroup();
        $data["servicegroup"] = $query->result();

        echo json_encode($data);
    }



    public function getserviceIngroup()
    {
        $idgroup = $this->input->post("groupid");
        $this->load->model("servicemodel");
        $query = $this->servicemodel->getservice($idgroup);
        $data["service"] = $query->result();


        $query = $this->servicemodel->getservice($idgroup, TRUE);
        $data["discount"] = $query->result();

        echo json_encode($data);
    }
}
