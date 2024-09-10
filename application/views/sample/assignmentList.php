<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profiile</title>

    <!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
    <style>
        .custom-filter {
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-weight: 400;
            color: #676E8A;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 10px;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
</head>

<body class=" color-light ">


    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">


        <div class="iq-sidebar  sidebar-default " id="mainMenu">

        </div>
        <!-- <div class="iq-top-navbar" id="topmenu">
        </div> -->


        <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card" id="testappprocess">
                            <div class="card-header d-flex justify-content-between bg-primary header-invoice">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">ใบยืนยันการส่งตัวอย่าง</h4>
                                </div>

                            </div>

                            <div class="card-body">
                                <h4 class="mb-3">ข้อมูลทั่วไป</h4>
                                <dl class="row">
                                    <dt class="col-sm-2">ชื่อตัวอย่าง</dt>
                                    <dd class="col-sm-6" id="text_samplename"></dd>
                                    <dt class="col-sm-1">วันนำส่ง</dt>
                                    <dd class="col-sm-3" id="text_datetime"></dd>
                                    <dt class="col-sm-2">ชื่อผู้นำส่ง</dt>
                                    <dd class="col-sm-6" id="text_senderagencyname"></dd>
                                    <dt class="col-sm-1">ผู้นำส่ง</dt>
                                    <dd class="col-sm-3" id="text_agencytype"></dd>
                                    <dt class="col-sm-2">ที่อยู่</dt>
                                    <dd class="col-sm-6" id="text_address"></dd>
                                    <dt class="col-sm-1">จังหวัด</dt>
                                    <dd class="col-sm-3" id="text_province"></dd>
                                    <dt class="col-sm-2">หมายเลขโทรศัพท์</dt>
                                    <dd class="col-sm-2" id="text_telephone"></dd>
                                    <dt class="col-sm-1">lineid</dt>
                                    <dd class="col-sm-3" id="text_lineid"></dd>
                                    <dt class="col-sm-1">email</dt>
                                    <dd class="col-sm-3" id="text_email"></dd>
                                    <dt class="col-sm-2">เลขที่หนังสือนำส่ง</dt>
                                    <dd class="col-sm-6" id="text_RegistrationNo"></dd>
                                    <dt class="col-sm-1">ลงวันที่</dt>
                                    <dd class="col-sm-3" id="text_RegistrationDate"></dd>
                                    <dt class="col-sm-2">วิธีการส่งตัวอย่าง</dt>
                                    <dd class="col-sm-10" id="text_sendertype"></dd>
                                    <dd class="col-sm-12">
                                        <ul class="list-unstyled">
                                            <li>
                                                ตัวอย่างที่นำมาวิเคราะห์ห้องปฏิบัติการ ทางผู้ให้บริการมีนโยบายไม่ดำเนินการจัดเก็บตัวอย่างภายหลังจากการทดสอบเสร็จแล้ว ดังนั้น ท่านมีความประสงค์
                                                <ul>
                                                    <li id="text_Returnsample"></li>

                                                </ul>
                                            </li>
                                            <li>
                                                รายงานผลค่าความไม่แน่นอนของวิธีทดสอบ
                                                <ul>
                                                    <li id="text_Reportuncertainty"></li>

                                                </ul>
                                            </li>
                                            <li>
                                                การเลือกวิธีทดสอบ
                                                <ul>
                                                    <li id="text_MethodTest"></li>

                                                </ul>
                                            </li>
                                            <li>
                                                ท่านมีความประส่งค์ให้ห้องปฏิบัติการให้บริการ
                                                <ul>
                                                    <li id="text_s1">ให้เยี่ยมชมห้องปฏิบัติการ</li>
                                                    <li id="text_s2">ให้บริการภาชนะเก็บตัวอย่าง</li>
                                                    <li id="text_s3">เทคนิคการตรวจวิเคราะห์</li>
                                                    <li id="text_s4">เครื่องมือวิเคราะห์</li>


                                                </ul>
                                            </li>
                                        </ul>
                                    </dd>

                                </dl>



                                <h5>รายละเอียดการนำส่ง</h5>
                                <div class="table-responsive-sm">
                                    <table class="table" id="text_ordersample" name="text_ordersample">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">ลำดับ</th>
                                                <th scope="col">รายการ</th>
                                                <th class="text-center" scope="col">ราคา</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>

                                <button type="button" class="btn btn-primary-dark mr-2" id="printPDF">Print</button>

                            </div>
                        </div>

                    </div>



                </div>
            </div>





        </div>


        <div class="content-page">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">รายการทดสอบตัวอย่าง</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive rounded mb-3">
                            <table id="sampleTestTable" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>DO/No.</th>
                                        <th>Op/No.</th>
                                        <th>Sample Name</th>
                                        <th>Service</th>
                                        <th>Method</th>
                                        <th>PIC</th>
                                        <th>Assign Date</th>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>©
                            </span> <a href="#" class="">Science-Center</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <!-- <script src="<?php echo base_url() ?>/assets/js/table-treeview.js"></script> -->

    <!-- Chart Custom JavaScript -->
    <!-- <script src="<?php echo base_url() ?>/assets/js/customizer.js"></script> -->

    <!-- Chart Custom JavaScript -->
    <!-- <script async src="<?php echo base_url() ?>/assets/js/chart-custom.js"></script> -->

    <!-- app JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#sampleTestTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?php echo base_url() . 'index.php/Sample/samplecontrol/get_data_assigment'; ?>",
                    "type": "POST",
                    "data": function(d) {
                        d.completed = $('#completedFilter').val();
                    }
                },
                "columns": [{
                        "data": "docnumber"
                    },
                    {
                        "data": "operationnumber"
                    },
                    {
                        "data": "samplename"
                    },
                    {
                        "data": "service"
                    },
                    {
                        "data": "method"
                    },
                    {
                        "data": "senderAgencyname"
                    },
                    {
                        "data": "assigntime"
                    }
                ]
            });

            // Add a select input to filter completed/uncompleted assignments
            $('<select id="completedFilter" class="btn btn-primary dropdown-toggle"><option value="false">Uncompleted</option><option value="true">Completed</option></select>')
                .appendTo('#sampleTestTable_wrapper .dataTables_filter');

            $('#completedFilter').on('change', function() {
                table.ajax.reload();
            });
        });
    </script>


    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>







</body>

</html>