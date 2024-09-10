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
                        <div class="card-body">
                            <form id="sampledetail">
                                <h3>เลือกวิธีการทดสอบ</h3>
                                <div class="form-group">
                                    <label class="" for="samplenale">ชื่อตัวอย่างทดสอบ</label>
                                    <input type="text" class="form-control" id="samplename" name="samplename" placeholder="ใส่ชื่อตัวอย่างทดสอบ">
                                </div>

                                <div class="form-group">
                                    <label class="" for="samplenale">ลักษณะตัวอย่างทางกายภาพ</label>
                                    <input type="text" class="form-control" id="appearance" name="appearance" placeholder="ลักษณะตัวอย่างทางกายภาพ">
                                </div>

                                <div class="form-group">
                                    <label class="" for="samplenale">จำนวน/ปริมาณ</label>
                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="จำนวน">
                                </div>
                                <div class="form-group">
                                    <label>เลือกกลุ่มการทดสอบ</label>
                                    <select class="form-control mb-3" id="servicegroup" name="servicegroup">
                                        <option selected="">เลือกกลุ่มการทดสอบ</option>

                                    </select>
                                </div>


                                <div class="col-lg-12">



                                    <table id="servicetable" class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>รายการทดสอบ</th>
                                                <th>วิธีการทดสอบ</th>
                                                <th>ค่าบริการ</th>

                                            </tr>
                                        </thead>

                                        <tbody class="ligth-body"></tbody>

                                        <tfoot>
                                            <tr>
                                                <th colspan="3" class="align-items-center">รวมราคา</th>
                                                <th><span name="totalprice">0</span> </th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" id='saveservice' class="btn btn-primary">บันทึก</button>
                                </div>
                            </form>
                        </div>

                    </div>



                </div>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="testappform">
                            <div class="card-header d-flex justify-content-between bg-primary header-invoice">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">แบบขอยื่นใช้บริการ</h4>
                                </div>
                                <!-- <div class="invoice-btn">
                                    <button type="button" class="btn btn-primary-dark mr-2"><i class="las la-print"></i> Print
                                        Print</button>
                                    <button type="button" class="btn btn-primary-dark"><i class="las la-file-download"></i>PDF</button>
                                </div> -->
                            </div>
                            <form id="generalform">
                                <div class="card-body">

                                    <h4 class="card-title">ข้อมูลทั่วไป</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-control-sm">ชื่อตัวอย่าง</label>
                                            <input type="text" name="sampleName" class="form-control form-control-sm" placeholder="ชื่อตัวอย่าง" required>

                                        </div>
                                        <div class="col">
                                            <label class="form-control-sm">วันนำส่ง</label>
                                            <input type="text" name="datetime" class="form-control form-control-sm" placeholder="date" required>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-control-sm">ผู้นำส่ง</label>
                                            <select name="Agencytype" id="Agencytype" class="form-control-sm form-control" required>
                                                <option value="">กรุณาระบุ</option>
                                                <option value="ราชการ">ราชการ</option>
                                                <option value="เอกชน">เอกชน</option>
                                                <option value="other">อื่นๆ</option>
                                            </select>

                                        </div>
                                        <div class="col" id="otherAgency">
                                            <label class="form-control-sm">กรุณาระบุ:</label>
                                            <input type="text" class="form-control form-control-sm" name="otherAgencytype" id="otherAgencytype" placeholder="กรุณาระบุ">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-control-sm">ชื่อผู้นำส่ง</label>
                                            <input type="text" class="form-control form-control-sm" name="senderAgencyname" id="senderAgencyname" placeholder="ชื่อผู้นำส่ง" required>

                                        </div>
                                        <div class="col">
                                            <label class="form-control-sm">ที่อยู่</label>
                                            <input type="text" class="form-control form-control-sm" name="address" id="address" placeholder="ที่อยู่" required>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-control-sm">จังหวัด</label>
                                            <select id="province" name="province" class="form-control-sm form-control" required>
                                                <option value="">-- โปรดเลือกจังหวัด --</option>

                                            </select>

                                        </div>
                                        <div class="col">
                                            <label class="form-control-sm">หมายเลขโทรศัพท์</label>
                                            <input type="text" name="telephone" id="telephone" class="form-control form-control-sm" placeholder="หมายเลขโทรศัพท์" required>
                                        </div>
                                        <div class="col">
                                            <label class="form-control-sm">lineid</label>
                                            <input type="text" name="lineid" id="lineid" class="form-control form-control-sm" placeholder="lineid">
                                        </div>
                                        <div class="col">
                                            <label class="form-control-sm">email</label>
                                            <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label class="form-control-sm">เลขที่หนังสือนำส่ง</label>
                                            <input type="text" class="form-control form-control-sm" name="RegistrationNo" id="RegistrationNo" placeholder="ใส่เลขหนังสือนำส่ง(ถ้ามี)">
                                        </div>
                                        <div class="col">
                                            <label class="form-control-sm">ลงวันที่</label>
                                            <input type="text" class="form-control form-control-sm" name="RegistrationDate" id="RegistrationDate" placeholder="ใส่วันที่ของหนังสือนำส่ง">
                                        </div>
                                    </div>

                                    <h4 class="card-title">ข้อมูลการนำส่ง</h4>


                                    <div class="form-row">
                                        <div class="col">
                                            <label class="form-control-sm">วิธีส่ง</label>
                                            <select name="sendertype" id="sendertype" class="form-control-sm form-control mb-3" required>
                                                <option value="">กรุณาระบุ</option>
                                                <option value="ส่งด้วยตนเอง">ส่งด้วยตนเอง</option>
                                                <option value="ไปรษณีย์">ไปรษณีย์</option>
                                                <option value="other">อื่น</option>
                                            </select>
                                        </div>
                                        <div class="col " id="othersender">
                                            <label class="form-control-sm">กรุณาระบุ:</label>
                                            <input type="text" class="form-control form-control-sm " name="othersendertype" id="othersendertype" placeholder="กรุณาระบุ">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-9">
                                            <label class="control-label  align-self-center form-control-sm">ตัวอย่างที่นำมาวิเคราะห์ห้องปฏิบัติการ ทางผู้ให้บริการมีนโยบายไม่ดำเนินการจัดเก็บตัวอย่างภายหลังจากการทดสอบเสร็จแล้ว ดังนั้น ท่านมีความประสงค์</label>
                                        </div>
                                        <div class="col-sm-3 ">
                                            <select name="Returnsample" id="Returnsample" class="form-control form-control-sm" data-style="py-0" required>
                                                <option value="">กรุณาระบุ</option>
                                                <option>รับตัวอย่างคืน</option>
                                                <option>ไม่ขอรับตัวอย่างคืน</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-9">
                                            <label class="control-label  align-self-center form-control-sm">รายงานผลค่าความไม่แน่นอนของวิธีทดสอบ</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="Reportuncertainty" id="Reportuncertainty" class="form-control form-control-sm" data-style="py-0" required>
                                                <option value="">กรุณาระบุ</option>
                                                <option>ต้องการ</option>
                                                <option>ไม่ต้องการ</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-9">
                                            <label class="control-label  align-self-center form-control-sm">การเลือกวิธีทดสอบ</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="MethodTest" id="MethodTest" class="form-control form-control-sm" data-style="py-0" required>
                                                <option value="">กรุณาระบุ</option>
                                                <option>วิธีทดสอบของห้องปฏิบัติการ</option>
                                                <option>วิธีทดสอบของผู้ใช้บริการ</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-row">
                                        <div class="col-sm-12">
                                            <label class="control-label  align-self-center form-control-sm">ท่านมีความประส่งค์ให้ห้องปฏิบัติการให้บริการ</label>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <div class="checkbox d-inline-block mr-3 form-control-sm">
                                                <input type="checkbox" class="checkbox-input" id="checkbox" name="service1">
                                                <label for="checkbox1">ให้เยี่ยมชมห้องปฏิบัติการ</label>
                                            </div>
                                            <div class="checkbox d-inline-block mr-3 form-control-sm">
                                                <input type="checkbox" class="checkbox-input" id="checkbox2" name="service2">
                                                <label for="checkbox2">ให้บริการภาชนะเก็บตัวอย่าง</label>
                                            </div>
                                            <div class="checkbox d-inline-block mr-3 form-control-sm">
                                                <input type="checkbox" class="checkbox-input" id="checkbox3" name="service3">
                                                <label for="checkbox3">เทคนิคการตรวจวิเคราะห์</label>
                                            </div>
                                            <div class="checkbox d-inline-block mr-3 form-control-sm">
                                                <input type="checkbox" class="checkbox-input" id="checkbox4" name="service4">
                                                <label for="checkbox4">เครื่องมือวิเคราะห์</label>
                                            </div>
                                            <div class="checkbox d-inline-block mr-3 form-control-sm">
                                                <input type="checkbox" class="checkbox-input" id="checkbox5" name="service5">
                                                <label for="checkbox5">ไม่ประสงค์ขอรับบริการ</label>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                                        <div>
                                            <h4 class="mb-3">รายการทดสอบ</h4>
                                        </div>
                                        <a href="#" class="btn btn-primary add-list" data-toggle="modal" data-target="#new-order"><i class="las la-plus mr-3"></i> เพิ่มตัวอย่าง</a>
                                    </div>

                                    <div class="table-responsive-sm">
                                        <table class="table" id="ordersample" name="ordersample">
                                            <thead>
                                                <tr>
                                                    <th class="text" scope="col">Action</th>
                                                    <th class="text" scope="col">ลำดับ</th>
                                                    <th class="text" scope="col">ชื่อตัวอย่าง</th>
                                                    <th class="text" scope="col">ลักษณะตัวอย่างทางกายภาพ</th>
                                                    <th class="text" scope="col">จำนวน</th>

                                                    <th class="text" scope="col">ราคา</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="generalformsave()">บันทึก</button>
                                </div>
                            </form>


                        </div>

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



                                <h5>รายการทดสอบ</h5>
                                <div class="table-responsive-sm">
                                    <table class="table" id="text_ordersample" name="text_ordersample">
                                        <thead>
                                            <tr>
                                                <th class="text" scope="col">ลำดับ</th>
                                                <th class="text" scope="col">ชื่อตัวอย่าง</th>
                                                <th scope="col">รายการ</th>
                                                <th scope="col">ลักษณะทางกายภาพ</th>
                                                <th scope="col">จำนวน</th>
                                                <th class="text" scope="col">ราคา</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-primary-dark mr-2" onclick="openPDF()" id="pdfbutton"><i class="las la-print"></i> Print
                                    Print</button>




                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

    <script>
        var servicepacksample = [];
        var idsample = 1; // Start with ID 1
        var reportcharge = 0;
        var recallTrack = 0;

        function convertToThaiBuddhistDate(dateString) {
            try {
                const dateObject = new Date(dateString);

                if (isNaN(dateObject.getTime())) {
                    if (dateString === "0000-00-00") {
                        return "วันที่ไม่ได้ระบุ"; // Display a message for missing date
                    } else {
                        throw new Error("Invalid date string: " + dateString);
                    }
                }

                // Convert Gregorian date to Thai Buddhist date
                const buddhistYear = dateObject.getFullYear() + 543;
                const thaiMonthNames = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                    "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
                ];
                const thaiMonth = thaiMonthNames[dateObject.getMonth()];
                const thaiDay = dateObject.getDate();

                // Format Thai Buddhist date string
                const thaiBuddhistDate = `${thaiDay} ${thaiMonth} พ.ศ. ${buddhistYear}`;

                return thaiBuddhistDate;
            } catch (error) {
                console.error(error);
                return "";
            }
        }

        function removesample(sampleId) {
            // 1. Find the index of the sample in your data (servicepacksample)
            const index = servicepacksample.findIndex(sample => sample.id === sampleId);

            // 2. If the sample is found, remove it from the data
            if (index !== -1) {
                servicepacksample.splice(index, 1);

                // 3. Redraw the table to reflect the change
                redrawtable();
            }
        }

        function generalformsave() {
            $("#generalform").validate({
                groups: {
                    checkboxGroup: "input[name='checkbox[]']" // Group checkboxes
                },
                rules: {
                    sampleName: "required",
                    datetime: "required",
                    Agencytype: "required",
                    senderAgencyname: "required",
                    address: "required",
                    province: "required",
                    telephone: {
                        required: true,
                        digits: true
                    },
                    email: {
                        email: true
                    },
                    otherAgencytype: {
                        required: function(element) {
                            return $("#Agencytype").val() === "other";
                        }
                    },
                    sendertype: "required",
                    othersendertype: {
                        required: function(element) {
                            return $("#sendertype").val() === "other";
                        }
                    },
                    Returnsample: "required",
                    Reportuncertainty: "required",
                    MethodTest: "required"
                },
                messages: {
                    sampleName: "กรุณาระบุชื่อตัวอย่าง",
                    datetime: "กรุณาระบุวันนำส่ง",
                    Agencytype: "กรุณาระบุผู้นำส่ง",
                    senderAgencyname: "กรุณาระบุชื่อผู้นำส่ง",
                    address: "กรุณาระบุที่อยู่",
                    province: "กรุณาระบุจังหวัด",
                    telephone: {
                        required: "กรุณาระบุหมายเลขโทรศัพท์",
                        digits: "กรุณาระบุเฉพาะตัวเลข"
                    },
                    email: {
                        email: "กรุณาระบุอีเมลให้ถูกต้อง"
                    },
                    otherAgencytype: "กรุณาระบุผู้นำส่งอื่นๆ",
                    sendertype: "กรุณาระบุวิธีส่ง",
                    othersendertype: "กรุณาระบุวิธีส่งอื่นๆ",
                    Returnsample: "กรุณาระบุความประสงค์เกี่ยวกับการรับตัวอย่างคืน",
                    Reportuncertainty: "กรุณาระบุความประสงค์เกี่ยวกับรายงานผลค่าความไม่แน่นอน",
                    MethodTest: "กรุณาระบุวิธีทดสอบ"
                },

            });

            if ($("#generalform").valid()) {
                var formData = $("#generalform").serializeArray();
                var generatetrack = generateTracking();

                var data = [{
                    "name": "reportcharge",
                    "value": reportcharge
                }, {
                    "name": "trackNo",
                    "value": generatetrack
                }];
                formData = $.merge(formData, data);

                var dataToSend = {
                    gedata: formData,
                    sampledata: servicepacksample
                };
                $.ajax({
                    url: "<?php echo base_url() . 'index.php/sample/samplecontrol/savesample' ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: dataToSend,
                    success: function(data) {


                        console.log(data["value"]);
                        if (data["value"] !== null) {
                            regetinvoidformDB(data["value"]);
                        }
                        $('#testappprocess').show();
                        $('#testappform').hide();

                        // alert("Data have been saved");

                    },
                    error: function() {
                        alert("Error loading service. Please try again.");
                    }
                });
            }

        }

        function regetinvoidformDB(lastid) {
            var dataToSend = {
                "testid": lastid
            };
            $.ajax({
                url: "<?php echo base_url() . 'index.php/sample/samplecontrol/getsampleid' ?>",
                type: 'POST',
                dataType: 'json',
                data: dataToSend,
                success: function(data) {
                    sampledata = data["Sample"][0];

                    sampleDetail = data["Sampledetail"];

                    recallTrack = sampledata.trackNo;
                    // console.log(sampledata.datetime);
                    // เลือก element <dd> ที่ต้องการ
                    const textSamplename = document.getElementById("text_samplename");
                    const textDatetime = document.getElementById("text_datetime");
                    const textAgencytype = document.getElementById("text_agencytype");
                    const textSenderagencyname = document.getElementById("text_senderagencyname");
                    const textAddress = document.getElementById("text_address");
                    const textProvince = document.getElementById("text_province");
                    const textTelephone = document.getElementById("text_telephone");
                    const textLineid = document.getElementById("text_lineid");
                    const textEmail = document.getElementById("text_email");
                    const textSendertype = document.getElementById("text_sendertype");
                    const textRegistrationNo = document.getElementById("text_RegistrationNo");
                    const textRegistrationDate = document.getElementById("text_RegistrationDate");


                    const textReportuncertainty = document.getElementById("text_Reportuncertainty");
                    const textMethodTest = document.getElementById("text_MethodTest");
                    const textReturnsample = document.getElementById("text_Returnsample");

                    const texts1 = document.getElementById("text_s1");
                    const texts2 = document.getElementById("text_s2");
                    const texts3 = document.getElementById("text_s3");
                    const texts4 = document.getElementById("text_s4");

                    // แมปข้อมูล JSON ไปยัง element <dd>
                    textSamplename.textContent = sampledata.sampleName;
                    textDatetime.textContent = convertToThaiBuddhistDate(sampledata.datetime);
                    textSenderagencyname.textContent = sampledata.senderAgencyname;
                    textAddress.textContent = sampledata.address;
                    textProvince.textContent = sampledata.province;
                    textTelephone.textContent = sampledata.telephone;
                    textLineid.textContent = sampledata.LineId || "-"; // ถ้าไม่มี LineId ให้แสดง "-"
                    textEmail.textContent = sampledata.email || "-";
                    textRegistrationNo.textContent = sampledata.RegistrationNo || "-";
                    textRegistrationDate.textContent = convertToThaiBuddhistDate(sampledata.RegistrationDate);


                    if (sampledata.sendertype === "ส่งด้วยตนเอง") {
                        textSendertype.textContent = "ส่งด้วยตนเอง";
                    } else if (sampledata.sendertype === "ไปรษณีย์") {
                        textSendertype.textContent = "ส่งผ่านไปรษณีเลขที่ " + sampledata.othersendertype;
                    } else {
                        textSendertype.textContent = "ส่งช่องทางอื่น ๆ รายละเอียด " + sampledata.othersendertype;
                    }



                    if (sampledata.Agencytype === "other") {
                        textAgencytype.textContent = "อื่น ๆ : " + sampledata.otherAgencytype;

                    } else {
                        textAgencytype.textContent = sampledata.Agencytype;
                    }


                    textReportuncertainty.textContent = sampledata.Reportuncertainty;
                    textMethodTest.textContent = sampledata.MethodTest;
                    textReturnsample.textContent = sampledata.Returnsample;

                    texts1.style.display = "none";
                    texts2.style.display = "none";
                    texts3.style.display = "none";
                    texts4.style.display = "none";

                    if (sampledata.service1 === "on") {
                        texts1.style.display = "block";
                    }
                    if (sampledata.service2 === "on") {
                        texts2.style.display = "block";
                    }
                    if (sampledata.service3 === "on") {
                        texts3.style.display = "block";
                    }
                    if (sampledata.service4 === "on") {
                        texts4.style.display = "block";
                    }




                    /// redrattable

                    var table = $("#text_ordersample");
                    table.empty(); // Clear previous table content

                    // Build table header
                    var tableHeader = $('<thead><tr><th class="text" scope="col">ลำดับ</th><th class="text" scope="col">ชื่อตัวอย่าง</th><th scope="col">รายการ</th><th scope="col">ลักษณะทางกายภาพ</th><th scope="col">จำนวน</th><th class="text" scope="col">ราคา</th></tr></thead>');
                    table.append(tableHeader);

                    // Build table body
                    var tableBody = $('<tbody>');
                    var indexid = 1;
                    var allprice = 0;
                    $.each(sampleDetail, function(index, row) {
                        allprice += parseFloat(row.totalprice);

                        // Create a table row
                        var rowElement = $('<tr>');

                        // ลำดับ cell
                        rowElement.append($('<td>').text(indexid++));

                        // ��ายการ cell
                        rowElement.append($('<td>').text(servicedetail.samplename));
                        rowElement.append($('<td>').text(servicedetail.textpack));


                        rowElement.append($('<td>').text(servicedetail.appearance));
                        rowElement.append($('<td>').text(servicedetail.amount));

                        // ราคา cell
                        rowElement.append($('<td>').text(row.totalprice));

                        // Append the row to the table body
                        tableBody.append(rowElement);
                    });

                    // Build table footer
                    var tablefoot = $('<tfoot><tr><th colspan="5" class="align-items-center">รวมราคา</th><th><span name="allprice">' + allprice + '</span> THB</th></tr></tfoot>');
                    table.append(tableBody);
                    table.append(tablefoot);
                    $("#pdfbutton").click(function() {

                        openPDF(sampledata.trackNo);
                    });

                },
                error: function() {
                    alert("Error loading service. Please try again.");
                }
            });

        }

        function calculateTotalPrice() {
            var totalPrice = 0;
            $("#servicetable input[type='checkbox'][name='service[]']:checked ").each(function() {
                var priceText = $(this).closest("tr").find("td:last").text();
                var price = parseFloat(priceText);
                totalPrice += price;
            });

            var discountCheckbox = $("#servicetable input[type='checkbox'][name='discount']");
            if (discountCheckbox.prop("checked")) {
                var priceText = discountCheckbox.closest("tr").find("td:last").text();
                var price = parseFloat(priceText);
                totalPrice += price;
            }

            $("#servicetable tfoot span").text(totalPrice); // Update the total
        }


        function redrawtable() {
            var table = $("#ordersample");
            table.empty(); // Clear previous table content

            // Build table header
            var tableHeader = $('<thead><tr><th class="text" scope="col">Action</th><th class="text" scope="col">ลำดับ</th><th scope="col">ชื่อตัวอย่าง</th><th scope="col">รายการ</th><th class="text" scope="col">ลักษณะทางกายภาพ</th><th class="text" scope="col">จำนวน</th><th class="text" scope="col">ราคา</th></tr></thead>');
            table.append(tableHeader);

            // Build table body
            var tableBody = $('<tbody>');
            var indexid = 1;
            var allprice = 0;
            $.each(servicepacksample, function(index, row) {
                servicedetail = row.servicedetail;
                allprice += parseFloat(servicedetail.totalprice);

                // Create a table row
                var rowElement = $('<tr>');

                // Action cell
                rowElement.append(
                    $('<td>').append(
                        $('<div>').addClass('d-flex align-items-center list-action').append(
                            $('<a>')
                            .addClass('badge bg-warning mr-2')
                            .attr('onclick', 'removesample(' + row.id + ')') // Pass row.id as an argument
                            .append(
                                $('<i>').addClass('ri-delete-bin-line mr-0')
                            )
                        )
                    )
                );

                // ลำดับ cell
                rowElement.append($('<td>').text(indexid++));

                // ��ายการ cell
                rowElement.append($('<td>').text(servicedetail.samplename));
                rowElement.append($('<td>').text(servicedetail.textpack));

                rowElement.append($('<td>').text(servicedetail.appearance));
                rowElement.append($('<td>').text(servicedetail.amount));
                // ราคา cell
                rowElement.append($('<td>').text(servicedetail.totalprice));

                // Append the row to the table body
                tableBody.append(rowElement);
            });

            // Build table footer
            var tablefoot = $('<tfoot><tr><th colspan="6" class="align-items-center">รวมราคา</th><th><span name="allprice">' + allprice + '</span> THB</th></tr></tfoot>');
            table.append(tableBody);
            table.append(tablefoot);

            reportcharge = allprice;
        }




        // Event handler for the discount checkbox (wrapped in a function)
        function handleDiscountCheckboxChange() {

            // this function for click row table to check box
            $("#servicetable tbody tr").click(function(event) {
                var discountCheckbox = $("#servicetable input[type='checkbox'][name='discount']");
                var selectallCheckbox = $("#servicetable input[type='checkbox'][name='selectall']");
                // Check if the click target is not a checkbox AND the discount checkbox is NOT checked
                if (!$(event.target).is("input[type='checkbox']") && (!discountCheckbox.prop("checked")) && (!selectallCheckbox.prop("checked"))) {
                    var checkbox = $(this).find("input[type='checkbox']");
                    checkbox.prop("checked", !checkbox.prop("checked"));
                    checkbox.trigger("change");
                }
            });

            // when we click discount checked box. it will select all  check box
            $("#servicetable input[type='checkbox'][name='discount']").change(function() {
                var isChecked = $(this).prop("checked");
                var serviceCheckboxes = $("#servicetable input[type='checkbox']").not(this);

                serviceCheckboxes.prop("checked", isChecked);
                if (isChecked) {
                    serviceCheckboxes.prop("disabled", true);
                } else {
                    serviceCheckboxes.prop("disabled", false);
                }
            });

            $("#servicetable input[type='checkbox'][name='selectall']").change(function() {
                var isChecked = $(this).prop("checked");
                var serviceCheckboxes = $("#servicetable input[type='checkbox']").not(this);

                serviceCheckboxes.prop("checked", isChecked);
                if (isChecked) {
                    serviceCheckboxes.prop("disabled", true);
                } else {
                    serviceCheckboxes.prop("disabled", false);
                }
            });


            // for recalculate total price when click check box
            $("#servicetable input[type='checkbox']").change(calculateTotalPrice);

        }

        $(document).ready(function() {
            $('#testappprocess').hide();
            // regetinvoidformDB(31); // test function
            const provinces = ["กระบี่", "กรุงเทพมหานคร", "กาญจนบุรี", "กาฬสินธุ์", "กำแพงเพชร", "ขอนแก่น", "จันทบุรี", "ฉะเชิงเทรา", "ชลบุรี", "ชัยนาท", "ชัยภูมิ", "ชุมพร", "ตรัง", "ตราด", "ตาก", "นครนายก", "นครปฐม", "นครพนม", "นครราชสีมา", "นครศรีธรรมราช", "นครสวรรค์", "นนทบุรี", "นราธิวาส", "น่าน", "บึงกาฬ", "บุรีรัมย์", "ปทุมธานี", "ประจวบคีรีขันธ์", "ปราจีนบุรี", "ปัตตานี", "พระนครศรีอยุธยา", "พะเยา", "พังงา", "พัทลุง", "พิจิตร", "พิษณุโลก", "เพชรบุรี", "เพชรบูรณ์", "แพร่", "ภูเก็ต", "มหาสารคาม", "มุกดาหาร", "ยะลา", "ยโสธร", "ร้อยเอ็ด", "ระนอง", "ระยอง", "ราชบุรี", "ลพบุรี", "ลำปาง", "ลำพูน", "เลย", "ศรีสะเกษ", "สกลนคร", "สงขลา", "สตูล", "สมุทรปราการ", "สมุทรสงคราม", "สมุทรสาคร", "สระแก้ว", "สระบุรี", "สิงห์บุรี", "สุโขทัย", "สุพรรณบุรี", "สุราษฎร์ธานี", "สุรินทร์", "หนองคาย", "หนองบัวลำภู", "อ่างทอง", "อำนาจเจริญ", "อุดรธานี", "อุตรดิตถ์", "อุทัยธานี", "อุบลราชธานี", "เชียงราย", "เชียงใหม่"];


            for (const province of provinces) {
                const option = $('<option>').val(province).text(province);
                $('#province').append(option);
            }

            $("input[name='datetime']").datepicker({
                dateFormat: "yy-mm-dd", // Set the desired date format
                changeMonth: true, // Allow changing month in dropdown
                changeYear: true, // Allow changing year in dropdown
                yearRange: "-100:+10" // Display year range (e.g., past 100 years to 10 years ahead)
            });

            $("#RegistrationDate").datepicker({
                dateFormat: "yy-mm-dd", // Set the desired date format
                changeMonth: true, // Allow changing month in dropdown
                changeYear: true, // Allow changing year in dropdown
                yearRange: "-100:+10" // Display year range (e.g., past 100 years to 10 years ahead)
            });


            $("#othersender").hide();
            $('#otherAgency').hide();

            $("#Agencytype").change(function() {
                $("#otherAgency").hide();
                if ($(this).val() == "other") {
                    $("#otherAgency").show();
                } else {
                    $("#otherAgency").hide();
                }
            });


            $("#sendertype").change(function() {
                $("#othersender").hide();
                $("#othersendertype").attr("placeholder", "กรุณาระบุรายละเอียด");
                if ($(this).val() == "other" || $(this).val() == "ไปรษณีย์") {
                    if ($(this).val() == "ไปรษณีย์") {
                        $("#othersendertype").attr("placeholder", "เลขที่ไปรษณีย์");
                    }

                    $("#othersender").show();
                } else {
                    $("#othersender").hide();
                }
            });

            // click save will return selected id
            $("#saveservice").click(function() {
                var selectedIds = [];
                // Get checked service IDs (excluding those under disabled discounts)
                var textpack = "";
                var totalprice = $("#servicetable span[name='totalprice']").text();
                $("#servicetable input[type='checkbox'][name='service[]']:checked")
                    .each(function() {
                        selectedIds.push($(this).val());
                        var text = $(this).closest("tr").find("td:nth-child(2)").text();
                        textpack += text + ",";
                    });

                var selectallCheckbox = $("#servicetable input[type='checkbox'][name='selectall']");

                // if they select all list
                if (selectallCheckbox.prop("checked")) {
                    textpack = $("#servicegroup option:selected").text();
                }


                console.log("Selected IDs:", selectedIds);
                console.log("textpack :", textpack);
                console.log("totalprice :", parseFloat(totalprice));

                servicedetail = {
                    selectedID: selectedIds,
                    textpack: textpack,
                    totalprice: totalprice,
                    samplename: $("#samplename").val(),
                    appearance: $("#appearance").val(),
                    amount: $("#amount").val()
                };

                servicepacksample.push({
                    id: idsample++, // Increment ID for each item
                    servicedetail: servicedetail,
                });

                $("#sampledetail")[0].reset();
                var table = $("#servicetable");
                table.empty(); // Clear previous table content

                $('#new-order').modal('toggle')

                console.log("servicepack all", servicepacksample);
                redrawtable();
            })


            $.ajax({
                url: "<?php echo base_url() . 'index.php/utility/serviceController/getserviceGroup' ?>",
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    $("#servicegroup").empty();

                    // Add a default option
                    $("#servicegroup").append($('<option>', {
                        value: '',
                        text: '---- เลือกการทดสอบ ----'
                    }));

                    // Iterate through the JSON data and add options
                    $.each(data["servicegroup"], function(index, item) {
                        $("#servicegroup").append($('<option>', {
                            value: item.idgroup,
                            text: item.desGroup
                        }));
                    });

                },
                error: function() {
                    alert("Error loading service. Please try again.");
                }
            });



            $("#servicegroup").change(function() {
                var serviceGroupId = $(this).val();
                url = "<?php echo base_url() . 'index.php/utility/serviceController/getserviceIngroup' ?>";
                if (serviceGroupId !== "") { // Check if ID is not empty
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                            groupid: serviceGroupId
                        }, // Send selected ID
                        dataType: "json",
                        success: function(response) {
                            var table = $("#servicetable");
                            table.empty(); // Clear previous table content

                            // (rest of the code to build the table is the same)

                            var tableHeader = "<thead><tr><th><input type='checkbox' name='selectall'></th> <th>รายการทดสอบ</th> <th>วิธีการทดสอบ</th><th>ค่าบริการ</th>></tr></thead>";
                            var tableBody = "<tbody>";
                            // Build table rows using response data
                            $.each(response["service"], function(index, row) {
                                tableBody += "<tr>";
                                tableBody += "<td><input type='checkbox' value='" + row.id + "' name='service[]'></td>"; // Checkbox
                                tableBody += "<td>" + row.service + "</td>";
                                tableBody += "<td>" + row.method + "</td>";
                                tableBody += "<td>" + row.price + "</td>";
                                tableBody += "</tr>";
                            });
                            $.each(response["discount"], function(index, row) {
                                tableBody += "<tr>";
                                tableBody += "<td><input type='checkbox' value='" + row.id + "'  name='discount'></td>"; // Checkbox
                                tableBody += "<td>" + row.service + "</td>";
                                tableBody += "<td>" + row.method + "</td>";
                                tableBody += "<td>" + row.price + "</td>";
                                tableBody += "</tr>";
                            });

                            var tablefoot = "<tfoot><tr><th colspan='3' class='align-items-center'>รวมราคา</th> <th><span name='totalprice'>0</span>THB</th></tr> </tfoot>"
                            table.append(tableHeader);
                            table.append(tableBody);
                            table.append(tablefoot);



                            handleDiscountCheckboxChange()
                        },
                        error: function() {
                            console.error("Error fetching data.");
                        }
                    });
                }
            });






        });
    </script>


    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>

    <script>
        function openPDF(trackNo) {
            window.open('<?php echo base_url('index.php/sample/samplepanel/createPDF') ?>' + '/' + trackNo, '_blank');
        }

        function generateTracking() {
            const now = new Date();
            const datePrefix = now.toISOString().slice(0, 10).replace(/-/g, '');

            const hash = Array.from(crypto.getRandomValues(new Uint8Array(5)))
                .map(byte => byte.toString(36)) // Base-36 for a-z, 0-9
                .join('');

            return datePrefix + hash.slice(0, 6); // Take first 6 chars for length consistency
        }
    </script>





</body>

</html>