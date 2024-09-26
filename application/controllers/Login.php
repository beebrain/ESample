<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function index()
    {
        // call BPT Google Login
        // redirect('https://info.uru.ac.th/bptcarbon/academic/');
        $this->login();
    }



    public function login()
    {
        include_once APPPATH . "libraries/vendor/autoload.php";
        $google_client = new Google_Client();

        $google_client->setClientId('741576809790-ftb1e5e9d9j5ugpjj1j0slgu3punu603.apps.googleusercontent.com'); //Define your ClientID
        $google_client->setClientSecret('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'); //Define your Client Secret Key
        $google_client->setRedirectUri(base_url() . 'index.php/login/login'); //Define your Redirect Uri
        $google_client->addScope('email');
        $google_client->addScope('profile');



        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

            if (!isset($token["error"])) {
                $google_client->setAccessToken($token['access_token']);

                $this->session->set_userdata('access_token', $token['access_token']);

                $google_service = new Google_Service_Oauth2($google_client);

                $data = $google_service->userinfo->get();

                $current_datetime = date('Y-m-d H:i:s');

                if ($this->userModel->Is_already_register($data['id'])) {
                    //update data
                    $user_data = array(
                        'login_uid' => $data['id'],
                        'gf_name' => $data['given_name'],
                        'gl_name'  => $data['family_name'],
                        'email' => $data['email'],
                        'profile_picture' => $data['picture'],
                        'updated_at' => $current_datetime
                    );

                    $this->userModel->Update_user_data($user_data, $data['id']);
                } else {
                    //insert data
                    $user_data = array(
                        'login_uid' => $data['id'],
                        'gf_name'  => $data['given_name'],
                        'gl_name'   => $data['family_name'],
                        'email'  => $data['email'],
                        'profile_picture' => $data['picture'],
                        'created_at'  => $current_datetime,
                        'active'  => '1'
                    );

                    $this->userModel->Insert_user_data($user_data);
                }
                $condition = array('email' => $user_data["email"]);
                $user_data = $this->userModel->getCompleteInfoUser($condition)->result_array()[0];

                $this->session->set_userdata('user_data',  $user_data);
            }
        }


        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            //  $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'asset/sign-in-with-google.png" /></a>';
            $data['login_button'] = $google_client->createAuthUrl();
            $this->load->view('login', $data);
        } else {
            $data = "";
            redirect('user/userpanel');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('user_data');

        redirect('login/login');
    }
}
