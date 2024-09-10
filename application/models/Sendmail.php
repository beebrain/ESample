<?php

class Sendmail extends CI_Model {



    private $username = "datascience@uru.ac.th";
    private $detailname = "Position System";
    private $password = "datascience";
    private $sendform = "datascience@uru.ac.th";

    // private $subject = "Confirm Account";


    public function __construct() {
        parent::__construct();
    }

    public function confirmUser($emailAddress, $password) {
        $body = "Welcome to Our System
Please keep this e-mail for your records. Your account information is as follows:
----------------------------

Username:" . $emailAddress;
        $body .="
Password:" . $password;
        $body .="

----------------------------
Please visit the following link in order to activate your account:
";
        $body .= base_url('index.php/UserController/confirmUser/') . "/" . base64_encode($emailAddress);
        $body .="
Your password has been securely stored in our database and cannot be 
retrieved. In the event that it is forgotten, you will be able to reset it
using the email address associated with your account.

Thank you for registering.";

        $subject = "Welcome to Faculty Science and Technology System.";

        $this->sendMail($emailAddress, $body, $subject);
    }

    
     public function resetPass($emailAddress) {
        $body = "This email was sent automatically by ICDEA 2023  Conference System in response to your request to reset your password.\n";
        $body .= "This is done for your protection; only you, the recipient of this email can take the next step in the password recovery process.\n";
        $body .= "To reset your password and access your account, either click on the button or copy and paste the following link into the address bar of your browser:\n";
        $body .= "\n----------------------------\n";
        $body .= "link reset:" .base_url('index.php/Welcome/resetFromemail/') . "/" . base64_encode($emailAddress."%pass");
        $body .= "\n----------------------------\n";


        $subject = "Reset Password From  ICDEA 2023  Conference ";

        $this->sendMail($emailAddress, $body, $subject);
    }
    

   
    public function sendMail2(){
        // Load PHPMailer library
        $this->load->library('PHPMailer_Lib','phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $this->username;
        $mail->Password = $this->password;
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom($this->sendform, $this->detailname);
        $mail->addReplyTo('icdea2023@psru.ac.th');

        // Add a recipient
        $mail->addAddress('icdea2023@psru.ac.th');

        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;

        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
	}
	
	
    public function sendMail($emailAddress, $body, $subject,$bcc="") {

        // Load PHPMailer library
        $this->load->library('PHPMailer_Lib','phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
		
        $mail->IsSMTP();       // ใช้งาน SMTP
        $mail ->CharSet = "UTF-8";
        $mail->SMTPAuth = true;   // เปิดการการตรวจสอบการใช้งาน SMTP
        $mail->SMTPSecure = "ssl";  // protocol ที่จะใช้เชื่อมต่อกับ server
        $mail->Host = "smtp.gmail.com";      // ตั้งค่า mail server ของเรานะครับ ตัวอย่างจะใช้ของ Gmail นะครับ
        $mail->Port = 465;                   //  port ที่ใช้  ถ้าเป็นของ hosting ทั่วไปส่วนใหญ่เป็น 25 นะครับ
        $mail->Username = $this->username;  //  email address
        $mail->Password = $this->password;            // รหัสผ่าน Gamil
        $mail->SetFrom($this->sendform, $this->detailname);  //ผู้ส่ง
        //$mail->AddReplyTo("mynameisbee@uru.ac.th", "ชื่อ-นามสกุล");  //email ผู้รับเมื่อมีการตอบกลับนะครับ
        $mail->Subject = $subject; //หัวข้ออีเมล์
        $mail->Body = $body; //ส่วนนี้รายละเอียดสามารถส่งเป็นรูปแบบ HTML ได้
        //$mail->AltBody    = "Plain text message"; //ส่วนนี้ส่งเป็นข้อมูลอย่างเดียวเท่าสนั้น แล้วแต่จะเปิดใช้นะครับ
        $to_array = explode(',', $emailAddress);
        foreach($to_array as $address)
        {
            $mail->addAddress($address, 'Web Enquiry');
        }
        if ($bcc <> ""){
                $mail->addBcc($bcc, 'Secrete');
        } 
        //$mail->AddAddress($emailAddress); //อีกเมล์ผู้รับ  สามารถเพิ่มได้มากกว่า 1
        //  $mail->AddAttachment("images/phpmailer.gif");      // การแนบไฟล์ถ้าต้องการ สามารถเพิ่มได้มากกว่า 1 เช่นกันครับ
        //   $mail->AddAttachment("images/phpmailer_mini.gif"); // ตัวอย่างการพิ่มได้มากกว่า 1

        if (!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "ส่งอีเมล์สำเร็จ!";
        }
		//print_r($data);
        //$this->load->view('sent_mail', $data);
        return $data;
    }

}