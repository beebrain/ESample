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

    <style>
        #camera-feed {
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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



        <div class="content-page">
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
                                                        <input type="text" class="form-control" placeholder="Tracking No" aria-label="notification" id="trackno" name="trackno" value="<?php echo $trackNo ?>">
                                                        <input type="hidden" class="form-control" placeholder="Tracking No" aria-label="notification" id="trackid" name="trackid">



                                                        <div class="input-group-append">
                                                            <button class="btn btn-success dropone dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="searchid"><i class="las la-search font-size-20"></i></button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p> อัพโหลดไฟล์หลักฐานยืนยันการส่งตัวอย่างทดสอบ </p>

                                                <div class="input-group floating-label form-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="fileupload" name="fileupload" accept="image/*" capture="environment">
                                                        <label class="custom-file-label" for="fileupload">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-primary" type="button" id="upload_doc">Upload</button>
                                                        <button class="btn btn-outline-secondary" type="button" id="addPhotoBtn">Add Photo</button>
                                                    </div>
                                                    <input type="hidden" class="custom-file-input" id="fileaddress" name="fileaddress">
                                                </div>

                                                <!-- Camera Modal -->


                                                <!-- <div class="modal">
                                                    <div class="modal-content">
                                                        <span class="close">&times;</span>

                                                    </div>
                                                </div> -->


                                                <div class="modal fade" id="cameraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <video id="camera-feed" autoplay playsinline></video>
                                                                <button id="capture-btn" type="button" class="btn btn-primary mt-2">Capture Photo</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="msgfile" class="alert alert-primary" role="alert" style="display: none;">
                                                    <!-- This will show upload status messages -->
                                                </div>
                                                <!-- <div class="form-text">สนับสนุนไฟล์ นามสกุล .docx, .pdf เท่านั้น</div> -->
                                                <!-- <div id="msgfile" class="alert alert-primary" role="alert">This is a primary
                                                    alert — check it out!</div> -->

                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label> </label>
                                                    <button type="button" class="btn btn-primary mr-2" id="saveactive">ยืนยันการนำส่งข้อมูล</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>


                                            </div>
                                        </div>

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
        $(document).ready(function() {
            const fileUpload = document.getElementById('fileupload');
            const addPhotoBtn = document.getElementById('addPhotoBtn');
            const cameraModal = $('#cameraModal');
            const cameraFeed = document.getElementById('camera-feed');
            const captureBtn = document.getElementById('capture-btn');
            const msgFile = document.getElementById('msgfile');
            let stream;

            // Function to start the camera
            async function startCamera() {
                try {
                    stream = await navigator.mediaDevices.getUserMedia({
                        video: {
                            facingMode: 'environment'
                        }
                    });
                    cameraFeed.srcObject = stream;
                    cameraModal.modal('show');
                } catch (err) {
                    console.error("Error accessing camera:", err);
                    alert("Unable to access camera. Please make sure you've granted permission and your device has a camera.");
                }
            }

            // Function to stop the camera and close the modal
            function stopCameraAndCloseModal() {
                if (stream) {
                    stream.getTracks().forEach(track => track.stop());
                }
                cameraModal.modal('hide');
            }

            // Event Listeners
            addPhotoBtn.addEventListener('click', startCamera);

            captureBtn.addEventListener('click', function() {
                const canvas = document.createElement('canvas');
                canvas.width = cameraFeed.videoWidth;
                canvas.height = cameraFeed.videoHeight;
                canvas.getContext('2d').drawImage(cameraFeed, 0, 0);

                canvas.toBlob(function(blob) {
                    const file = new File([blob], "captured_photo.jpg", {
                        type: "image/jpeg"
                    });
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    fileUpload.files = dataTransfer.files;

                    // Update the file input label
                    const fileLabel = fileUpload.nextElementSibling;
                    fileLabel.textContent = file.name;

                    stopCameraAndCloseModal();
                    uploadFile(file);
                }, 'image/jpeg');
            });

            cameraModal.on('hidden.bs.modal', stopCameraAndCloseModal);

            // File upload function
            function uploadFile(file) {
                var form_data = new FormData();
                form_data.append('file', file);
                $.ajax({
                    url: '<?= base_url(); ?>index.php/utility/ajaxFileUpload/upload_fileGeneral/alldoc',
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    beforeSend: function() {
                        $(msgFile).html("Uploading...").show();
                    },
                    success: function(response) {
                        $(msgFile).html(response["msg"]);
                        $('#fileaddress').val(response["filename"]);
                    },
                    error: function(response) {
                        $(msgFile).html("Error uploading file: " + response["msg"]);
                    },
                    complete: function() {
                        $(msgFile).show();
                    }
                });
            }

            // Existing file input change event
            fileUpload.addEventListener('change', function() {
                const fileName = this.value.split('\\').pop();
                this.nextElementSibling.textContent = fileName;
            });

            // Existing upload_doc click event
            $('#upload_doc').on('click', function() {
                var file_data = $('#fileupload').prop('files')[0];
                if (file_data) {
                    uploadFile(file_data);
                } else {
                    alert("Please select a file to upload.");
                }
            });

            // Existing search functionality
            $("#searchid").click(getinfowithtrackno);

            // Existing save active functionality
            $("#saveactive").on('click', function() {
                $trackid = $("#trackid").val();
                $fileaddress = $('#fileaddress').val();

                if ($trackid == "") {
                    alert("กรุณาระบุ Track Number และกดค้นหา");
                } else if ($fileaddress == "") {
                    alert("กรุณา Upload ไฟล์หลักฐานยืนยัน");
                } else {
                    $("#saveactive").prop("disabled", true);
                    var dataToSend = {
                        "trackid": $trackid,
                        "fileaddress": $fileaddress
                    };

                    $.ajax({
                        url: "<?php echo base_url() . 'index.php/sample/samplecontrol/saveactive' ?>",
                        type: 'POST',
                        dataType: 'json',
                        data: dataToSend,
                        success: function(data) {
                            if (data["info"] == "success") {
                                alert("บันทึกข้อมูลเรียบร้อย");
                                setTimeout(function() {
                                    window.location = "<?php echo base_url('index.php/sample/samplepanel/listactive/') ?>";
                                }, 2000);
                            } else {
                                alert("หมายเลข Tracking นี้ ถูกบันทึกไปแล้ว");
                            }
                        },
                        error: function() {
                            alert("พบข้อผิดพลาดบางอย่างกรุณาติดต่อผู้พัฒนา");
                        },
                        complete: function() {
                            $("#saveactive").prop("disabled", false);
                        }
                    });
                }
            });

            // Initialize
            $("#testappprocess").hide();
            $(msgFile).hide();
        });
    </script>


    <script>
        var servicepacksample = [];
        var idsample = 1; // Start with ID 1
        var reportcharge = 0;
        var recallTrack = 0;


        (function() {
            var proxied = window.alert;
            window.alert = function() {
                // modal = $('<div class="modal-content" id="myModal"  tabindex="-1" role="dialog" aria-hidden="true" ><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div>');
                modal = $('<div id="myModal" class="modal fade" tabindex="9999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle">ข้อความจากระบบ</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><p>One fine body&hellip;</p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>');
                modal.find(".modal-body").text(arguments[0]);
                modal.modal('show');
            };
        })();


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

                    $("#trackid").val(sampledata.testid);


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


                    textReportmethodName.textContent = sampledata.ReportmethodName;
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
    </script>


    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>

</body>

</html>