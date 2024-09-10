<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Name:  Testpdf
*
* Version: 1.0.0
*
* Author: Pedro Ruiz Hidalgo
*		  ruizhidalgopedro@gmail.com
*         @pedroruizhidalg
*
* Location: application/controllers/Testpdf.php
*
* Created:  208-02-27
*
* Description:  This demonstrates pdf library is working.
*
* Requirements: PHP5 or above
*
*/


class Testpdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        ob_start(); // Start get HTML code
        ?>
        
        
        <!DOCTYPE html>
        <html>
        <head>
        <title>PDF</title>
        <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
        <style>
        body {
            font-family: sarabun;
        }
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        </head>
        <body>
        
        <h1>ตัวอย่างในการเก็บโค้ด HTML มาเป็น PDF</h1>
        <table>
          <tr>
            <th>ชื่อ</th>
            <th>ที่อยู่</th>
            <th>ประเทศ</th>
          </tr>
          <tr>
            <td>น้องไก่ คนงาม</td>
            <td>นายบ้าน บ้าน</td>
            <td>ไทย</td>
          </tr>
          <tr>
            <td>นายรักเรียน</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
          </tr>
          <tr>
            <td>นายรักดี</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
          </tr>
        </table>
        
        </body>
        </html>
        
        <?php
        $html = ob_get_contents();
        $mpdf->WriteHTML($html);
        $mpdf->Output("MyPDF.pdf");
        ob_end_flush()
	}
}


