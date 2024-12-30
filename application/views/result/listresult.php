<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Result List</title>

    <!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">

    <style>
        #upload-avatar {
            z-index: 1080 !important;
        }
    </style>

    <style>
        .status-icon-container {
            margin-left: 5px;
            display: inline-block;
        }

        .status-icon-container .fa-check-circle,
        .status-icon-container .fa-user-check {
            color: #28a745;
            font-size: 0.8em;
        }

        .status-icon-container .fa-clock,
        .status-icon-container .fa-user-clock {
            color: #ffc107;
            font-size: 0.8em;
        }

        .status-icon-container i {
            margin-right: 3px;
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



        <div class="modal fade" id="ShowDoc" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">หลักฐาน</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card" id="documentdetail">
                            <div class="card-body">
                                <embed src="<?php echo base_url('alldoc/02db206fc457bada22f6cb4cc0f83312.pdf') ?>" id='docsource' frameborder="0" width="100%" height="800px">
                            </div>
                        </div>

                    </div>



                </div>
            </div>





        </div>


        <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card" id="testappprocess">
                            <div class="card-header d-flex justify-content-between bg-primary flex-wrap align-items-left justify-content-between mb-4">
                                <div>
                                    <h4 class="mb-3">รายละเอียดรายการ</h4>

                                </div>
                                <!-- <a href="page-add-customers.html" class="btn btn-warning add-list"><i class="las la-plus mr-3"></i></a> -->
                                <button type="button" class="btn btn-warning mr-2" id="printPDF">Print</button>
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
                                                    <li id="textReportuncertainty"></li>

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
                                <h4 class="mb-3">รายการทดสอบที่ยืนยันแล้ว</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive rounded mb-3">
                            <table id="datatable" class="data-tables table mb-0 tbl-server-info">
                                <thead class="bg-white text-uppercase">
                                    <tr class="ligth ligth-data">

                                        <th>testid</th>
                                        <th>เลขที่หนังสือ</th>
                                        <th>samplename</th>
                                        <th>senderAgencyname</th>
                                        <th>telephone</th>
                                        <th>reportCharge</th>
                                        <th>createDate</th>
                                        <th>info</th>
                                    </tr>
                                </thead>

                                <tbody class="ligth-body"></tbody>
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
            // load_data();
            var ajax_url = "<?php echo base_url() . "index.php/sample/sampleControl/get_testActive" ?>";
            var datatable = $("#datatable").DataTable({
                order: [
                    [0, 'desc']
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": ajax_url,
                    "type": "POST"
                },
                "columns": [{
                        "data": "testid"
                    },
                    {
                        "data": "docnumber"
                    },
                    {
                        "data": "sampleName"
                    },
                    {
                        "data": "senderAgencyname"
                    },
                    {
                        "data": "telephone"
                    },
                    {
                        "data": "reportCharge"
                    },
                    {
                        "data": "createDate",
                        "render": function(data, type, row) {
                            // Assuming 'createDate' is in a format like 'YYYY-MM-DD'
                            var date = new Date(data);
                            var year = date.getFullYear();
                            var month = ("0" + (date.getMonth() + 1)).slice(-2); // Add leading zero if needed
                            var day = ("0" + date.getDate()).slice(-2); // Add leading zero if needed
                            return year + "/" + month + "/" + day;
                        }
                    },
                    {
                        "data": null, // No data source, we'll create the button here
                        "render": function(data, type, row) {
                            // console.log(row.idarea)
                            // return '<button class="btn-details btn btn-outline-info rounded-pill mt-2" onclick="showdetailArea(\'' + row.idarea + '\')" >info</button>';
                            // Assuming the qrid is unique identifier for each row, you can use it as a parameter in the URL for the details page
                            return ' <div class="flex align-items-center list-user-action">' +
                                '<a class="btn btn-sm bg-primary"  data-toggle="tooltip" data-placement="top" title="แสดงรายละเอียดข้อมูล" data-original-title="Add" onclick="showdetail(\'' + row.testid + '\')"><i class="ri-eye-line mr-0"></i></a>' +
                                ' <a class="btn btn-sm bg-success"  data-toggle="tooltip" data-placement="top" title="แสดงเอกสารหลักฐาน" data-original-title="Edit" onclick="showdoc(\'' + row.testid + '\')"><i class="ri-pencil-line mr-0"></i></a>' +
                                ' <a class="btn btn-sm bg-info" data-toggle="tooltip" data-placement="top" title="แสดงรายละเอียดOperation"  onclick="showOperation(\'' + row.testid + '\')"><i class=" ri-book-line mr-0"></i></a>' +
                                '</div>';
                        }
                    }
                ]

            });

        });


        function openPDF(recallTrack) {
            window.open('<?php echo base_url('index.php/sample/samplepanel/createPDF') ?>' + '/' + recallTrack, '_blank');
        }

        function showdoc(lastid) {
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
                    filesrc = "<?php echo base_url() ?>/alldoc/" + sampledata.fileActive;
                    $('#docsource').attr('src', filesrc);
                    $("#ShowDoc").modal('show');

                },
                error: function() {
                    alert("Error loading service. Please try again.");
                }
            });

        }



        function showdetail(lastid) {
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


                    const textReportmethodName = document.getElementById("textReportuncertainty");
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


                    textReportmethodName.textContent = sampledata.Reportuncertainty;
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
                    var tableHeader = $('<thead><tr><th class="text-center" scope="col">ลำดับ</th><th scope="col">รายการ</th><th class="text-center" scope="col">ราคา</th></tr></thead>');
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
                        rowElement.append(
                            $('<td>').append(
                                $('<h6>').addClass('mb-0').text(row.samplename),
                                $('<p>').addClass('mb-0').text(row.textpack)
                            )
                        );

                        // ราคา cell
                        rowElement.append($('<td>').text(row.totalprice));

                        // Append the row to the table body
                        tableBody.append(rowElement);
                    });

                    // Build table footer
                    var tablefoot = $('<tfoot><tr><th colspan="2" class="align-items-center">รวมราคา</th><th><span name="allprice">' + allprice + '</span> THB</th></tr></tfoot>');
                    table.append(tableBody);
                    table.append(tablefoot);

                    $("#printPDF").click(function() {
                        openPDF(recallTrack);

                    });
                    $("#new-order").modal('show');
                    // $("#upfile").click(function() {
                    //     alert(lastid);

                    // });
                },
                error: function() {
                    alert("Error loading service. Please try again.");
                }
            });

        }


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
    </script>



    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>







</body>

</html>