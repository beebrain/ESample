<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserControl extends CI_Controller
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


    public function profileUpdate()
    {
        $session = $this->session->userdata('user_data');
        $data = $this->input->post(NULL, TRUE); // returns all POST items with XSS filter

        // Update
        //update data
        $current_datetime = date('Y-m-d H:i:s');
        $email = $data['email'];
        $user_data = array(
            'gf_name' => $data['FirstName'],
            'gl_name'  => $data['LastName'],
            'thai_name'  => $data['thaiName'],
            'thai_lastname' => $data['thaiLast'],
            'email' => $data['email'],
            'updated_at' => $current_datetime,
            'phone' => $data['phone']
        );

        $this->userModel->Update_user_data($user_data, $email, "email");

        //security section
        $this->logger->logDB('info', "profileUpdate->" . $this->db->last_query());
        $this->load->model('Sendmail', 'sendmail');
        $detail = "ระบบได้ตรวจพบมีผู้ต้องการเปลี่ยนชื่อผู้ใช้งาน \n " . implode("\n", $user_data);
        $subject = "[ScienceCenter systems] ระบบแจ้งเตือนการปรับปรุงชื่อผู้ใช้ ";
        $this->sendmail->sendMail("pisit.nak@uru.ac.th", $detail, $subject, "");
        /// end security section

        $user_info = $this->userModel->getCompleteInfoUser(array("email" => $data['email']))->result_array()[0];

        echo json_encode($user_info);
    }

    public function get_datauser()
    {
        // $user_info = $this->userModel->getallUser();
        // Get the search value from the DataTables AJAX request
        $searchValue = $this->input->post('search')['value'];

        // Get the total number of records in the table
        $totalRecords = $this->userModel->get_total_records();

        // Get the filtered number of records based on the search value and dastaid
        $filteredRecords = $this->userModel->get_filtered_records($searchValue);

        // Get the sorting parameters from the DataTable
        $orderColumn = $this->input->post('order')[0]['column'];
        $orderDir = $this->input->post('order')[0]['dir'];

        // Map DataTable's column index to your actual database column names
        $columns = array(
            0 => 'uid',
            1 => 'email',
            2 => 'gf_name',
            3 => 'gl_name',
            4 => 'thai_name',
            5 => 'thai_lastname',
            6 => 'phone',
        );

        // Get the data for the current page with sorting applied
        $start = $this->input->post('start');
        $length = $this->input->post('length');

        // $data = $this->userModel->getallUser()
        $data = $this->userModel->get_datatable($start, $length, $searchValue, $columns[$orderColumn], $orderDir);

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


    public function get_listuser_active()
    {

        $userall = $this->userModel->getCompleteInfoUser()->result_array();
        $returnresult['userall'] = $userall;
        echo json_encode($returnresult);
    }
}
