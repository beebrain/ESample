<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AjaxFileUpload extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }




    // function upload_file()
    // {

    //     //upload file
    //     $config['upload_path'] = 'uploads/';
    //     $config['allowed_types'] = 'pdf|docx|png|jpg';
    //     $config['max_filename'] = '255';
    //     $config['encrypt_name'] = TRUE;
    //     $config['max_size'] = 1024 * 500; //1 MB
    //     $config['remove_spaces'] = TRUE;

    //     if (isset($_FILES['file']['name'])) {
    //         if (0 < $_FILES['file']['error']) {
    //             echo 'Error during file upload' . $_FILES['file']['error'];
    //         } else {
    //             if (file_exists('uploads/' . $_FILES['file']['name'])) {
    //                 $msg["status"] = "error";
    //                 $msg["msg"] = 'File already exists : uploads/' . $_FILES['file']['name'];
    //                 echo json_encode($msg);
    //             } else {
    //                 $this->load->library('upload', $config);
    //                 if (!$this->upload->do_upload('file')) {
    //                     $msg["status"] = "error";
    //                     $msg["msg"] = $this->upload->display_errors();
    //                     echo json_encode($msg);
    //                 } else {
    //                     $filename = $this->upload->data('file_name');
    //                     $stringMsg = "File successfully uploaded : <a href=" . base_url() . "/uploads/" . $filename . ">" . $_FILES['file']['name'] . "</a>";
    //                     $msg["status"] = "success";
    //                     $msg["msg"]  = $stringMsg;
    //                     $msg["filename"] = $filename;
    //                     echo json_encode($msg);
    //                 }
    //             }
    //         }
    //     } else {
    //         // echo 'Please choose a file';
    //         $msg["status"] = "error";
    //         $msg["msg"] = 'Please choose a file';
    //         echo json_encode($msg);
    //     }
    // }






    function upload_fileGeneral($uploadPath)
    {

        //upload file
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'pdf|docx|png|jpg|zip|rar';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 1024 * 1000; //1 MB
        $config['remove_spaces'] = TRUE;

        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists($uploadPath . '/' . $_FILES['file']['name'])) {
                    $msg["status"] = "error";
                    $msg["msg"] = 'File already exists : ' . $uploadPath . $_FILES['file']['name'];
                    echo json_encode($msg);
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        $msg["status"] = "error";
                        $msg["msg"] = $this->upload->display_errors();
                        echo json_encode($msg);
                    } else {
                        $filename = $this->upload->data('file_name');
                        $stringMsg = "Upload ไฟล์เรียบร้อยแล้ว : <a href=" . base_url() . "/" . $uploadPath . "/" . $filename . ">" . $_FILES['file']['name'] . "</a>";
                        $msg["status"] = "success";
                        $msg["msg"]  = $stringMsg;
                        $msg["filename"] = $filename;
                        echo json_encode($msg);
                    }
                }
            }
        } else {
            // echo 'Please choose a file';
            $msg["status"] = "error";
            $msg["msg"] = 'Please choose a file';
            echo json_encode($msg);
        }
    }
}
