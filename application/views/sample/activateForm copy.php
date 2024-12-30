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
        <div class="iq-top-navbar" id="topmenu">

        </div>



        <div class="content-page">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Custom file input</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                    <div class="input-group mb-4">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label selected" for="inputGroupFile02">book-bankbee.pdf</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="upload">Upload</span>
                        </div>
                    </div>
                    <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile03">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
                    </div>
                    <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">ระบบยืนยันการส่งตัวอย่าง</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ค้นหา</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Tracking No" aria-label="notification" id="trackno" name="trackno">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-success dropone dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="searchid"><i class="las la-search font-size-20"></i></button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p> อัพโหลดไฟล์หลักฐานยืนยันการส่งตัวอย่างทดสอบ </p>
                                                <div class="input-group mb-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                        <label class="custom-file-label selected" for="inputGroupFile02"></label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="upload">Upload</span>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="fileupload" name="fileupload">
                                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">

                                                        <button class="btn btn-outline-primary" type="button" id="upload_doc">upload</button>
                                                    </div>
                                                    <input type="hidden" class="custom-file-input" id="fileaddress" name="fileaddress">

                                                </div>
                                                <div class="form-text">สนับสนุนไฟล์ นามสกุล .docx, .pdf เท่านั้น</div>
                                                <div id="msgfile" class="alert alert-primary" role="alert">This is a primary
                                                    alert — check it out!</div>

                                            </div>

                                        </div>
                                        <button type="button" class="btn btn-primary mr-2" id="saveactive">ยืนยันการนำส่งข้อมูล</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card" id="testappprocess">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title mb-0">ข้อมูลการนำส่งตัวอย่าง</h4>
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



                                    <h5>รายการทดสอบ</h5>
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


        function getinfowithtrackno() {
            $("#testappprocess").hide();
            $trackno = $("#trackno").val();

            var dataToSend = {
                "trackNo": $trackno
            };
            $.ajax({
                url: "<?php echo base_url() . 'index.php/sample/samplecontrol/getsampletracking' ?>",
                type: 'POST',
                dataType: 'json',
                data: dataToSend,
                success: function(data) {
                    sampledata = data["Sample"][0];

                    sampleDetail = data["Sampledetail"];

                    recallTrack = sampledata.trackNo;
                    console.log(sampleDetail);
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

                    $("#testappprocess").show();
                },
                error: function() {
                    alert("Error loading service. Please try again.");
                }
            });
        }





        // Event handler for the discount checkbox (wrapped in a function)

        $(document).ready(function() {
            $("#searchid").click(function() {
                getinfowithtrackno();

            });

            $("#testappprocess").hide();

            $("#msgfile").hide();


            $("#saveactive").on('click', function() {
                $trackno = $("#trackno").val();
                $fileaddress = $('#fileaddress').val();
                var dataToSend = {
                    "trackNo": $trackno,
                    "fileaddress": $fileaddress
                };

                $.ajax({
                    url: "<?php echo base_url() . 'index.php/sample/samplecontrol/saveactive' ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: dataToSend,
                    success: function(data) {
                        sampledata = data["Sample"][0];

                    },
                    error: function() {
                        alert("Error loading service. Please try again.");
                    }
                });


            });
            $('#upload_doc').on('click', function() {
                var file_data = $('#fileupload').prop('files')[0];
                console.log($('#fileupload'))
                var form_data = new FormData();
                form_data.append('file', file_data);
                $.ajax({
                    url: '<?= base_url(); ?>index.php/utility/ajaxFileUpload/upload_fileGeneral/alldoc', // point to server-side controller method
                    dataType: 'json', // what to expect back from the server
                    cache: false,
                    contentType: false,
                    processData: false,
                    uploadProgress: function(e) {
                        alert("Uploading");
                    },
                    data: form_data,
                    type: 'post',
                    success: function(response) {
                        $('#msgfile').html(response["msg"]); // display success response from the server
                        $('#fileaddress').val(response["filename"]);
                    },
                    error: function(response) {
                        $('#msgfile').html(response["msg"]); // display error response from the server
                    },
                    complete: function(response) {
                        $('#msgfile').show();
                    }
                });
            });



        });
    </script>


    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>

</body>

</html>