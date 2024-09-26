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
        #upload-avatar {
            z-index: 1080 !important;
        }
    </style>


    <style>
        .status-icon-container {
            margin-left: 5px;
            display: inline-block;
            width: 14px;
            /* Adjust as needed */
            text-align: center;
        }

        .status-icon-container .fa-check-circle {
            color: #28a745;
            font-size: 0.8em;
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
                    <div class="card-body">
                        <h4 class="mb-3">รายละเอียด ตัวอย่างที่นำมาวิเคราะห์ห้องปฏิบัติการ</h4>
                        <ul class="nav nav-tabs justify-content-end" id="myTab-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-end" data-toggle="tab" href="#home-end" role="tab" aria-controls="home" aria-selected="true">ข้อมูลทั่วไป</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-end" data-toggle="tab" href="#profile-end" role="tab" aria-controls="profile" aria-selected="false">กำหนดผู้ทดสอบ</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent-5">
                            <div class="tab-pane fade active show" id="home-end" role="tabpanel" aria-labelledby="home-tab-end">
                                <div class="card">
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
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-end" role="tabpanel" aria-labelledby="profile-tab-end">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">รายการทดสอบ</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">ตัวอย่างที่ 1</a>
                                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">ตัวอย่างที่ 2</a>
                                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">ตัวอย่างที่ 3</a>
                                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">ตัวอย่างที่ 4</a>
                                                </div>
                                            </div>
                                            <div class="iq-top-navbar" id="topmenu">
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="tab-content mt-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <table class="table table-hover" id="tablesample">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">รายการ</th>
                                                                    <th scope="col">กระบวนการ</th>
                                                                    <th scope="col">วันที่ระบุผู้รับผิดชอบ</th>
                                                                    <th scope="col">ผู้รับผิดชอบ</th>
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

    <!-- app JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/app.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/table-treeview.js"></script>

    <script>
        (function() {
            var proxied = window.alert;
            window.alert = function() {
                // modal = $('<div class="modal-content" id="myModal"  tabindex="-1" role="dialog" aria-hidden="true" ><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div>');
                modal = $('<div id="myModal" class="modal fade" tabindex="9999" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalCenterTitle">ข้อความจากระบบ</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><p>One fine body&hellip;</p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>');
                modal.find(".modal-body").text(arguments[0]);
                modal.modal('show');
            };
        })();

        $(document).ready(function() {
            showdetail();

        });

        function formatDate(dateString) {
            if (!dateString) return '-';
            var date = new Date(dateString);
            return date.toLocaleDateString('th-TH', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                timeZone: 'Asia/Bangkok'
            });
        }


        function isOverdue(dateString) {
            if (!dateString) return false;
            var assignDate = new Date(dateString);
            var currentDate = new Date();
            var diffTime = currentDate - assignDate;
            var diffDays = diffTime / (1000 * 60 * 60 * 24);
            return diffDays > 7;
        }

        function addaction() {
            $(".tabgettest").click(function(event) {
                event.preventDefault(); // Prevent default link behavior
                var clickedId = $(this).attr("id");
                // Remove 'active' class from all tabs
                $(".tabgettest").removeClass("active");
                // Add 'active' class to the clicked tab
                $(this).addClass("active");
                var dataToSend = {
                    "sampleid": clickedId,
                };
                $.ajax({
                    url: "<?php echo base_url() . 'index.php/sample/samplecontrol/get_sample_details' ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: dataToSend,
                    success: function(data) {
                        data = data["Sample"];

                        var table = $("#tablesample");
                        table.empty(); // Clear previous table content

                        // Build table header
                        var tableHeader = $('<thead><tr><th scope="col">#</th><th scope="col">รายการ</th><th scope="col">กระบวนการ</th><th scope="col">วันที่กำหนดผู้รับผิดชอบ</th><th scope="col">ผู้รับผิดชอบ</th></tr></thead>');
                        table.append(tableHeader);

                        // Build table body
                        var tableBody = $('<tbody>');
                        var indexid = 1;
                        var allprice = 0;
                        $.each(data, function(index, row) {

                            // Create a table row
                            var rowElement = $('<tr>');

                            // ลำดับ cell
                            rowElement.append($('<td>').text(indexid++));
                            rowElement.append($('<td>').text(row.service));
                            rowElement.append($('<td>').text(row.method));
                            // Display and check assigntime
                            var assignTime = formatDate(row.assigntime);
                            rowElement.append($('<td>').text(assignTime));

                            // Check if overdue and add class if necessary
                            if (isOverdue(row.assigntime)) {
                                rowElement.addClass('table-danger');
                            }



                            // Create select element for user
                            var selectElement = $('<select>').addClass('user-select form-control form-control').attr('data-row-id', row.id);
                            rowElement.append($('<td>').append(selectElement));



                            // Append the row to the table body
                            tableBody.append(rowElement);
                        });
                        table.append(tableBody);
                        // Fetch users and populate dropdowns
                        fetchUsers(data);
                    },
                    error: function() {
                        alert("Error loading service. Please try again.");
                    }
                });

            });

        }


        function fetchUsers(sampleData) {
            $.ajax({
                url: "<?php echo base_url() . 'index.php/User/Usercontrol/get_listuser_active' ?>",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var users = response.userall;
                    var selectElements = $('.user-select');

                    selectElements.each(function(index) {
                        var select = $(this);
                        var row = sampleData[index];

                        select.empty();
                        select.append($('<option>').val('').text('Select a user'));

                        $.each(users, function(i, user) {
                            var option = $('<option>').val(user.uid).text(user.thai_name);
                            if (row.userrespon === user.uid) {
                                option.prop('selected', true);
                            }
                            select.append(option);
                        });

                        // Add change event listener to save selection
                        select.off('change').on('change', function() {
                            var rowId = $(this).data('row-id');
                            var userId = $(this).val();
                            saveUserSelection(rowId, userId);
                        });
                    });
                },
                error: function() {
                    alert("Error fetching users. Please try again.");
                }
            });
        }

        function saveUserSelection(rowId, userId) {
            $.ajax({
                url: "<?php echo base_url() . 'index.php/Sample/samplecontrol/savesampletestservice' ?>",
                type: 'POST',
                dataType: 'json',
                data: {
                    serviceid: rowId,
                    userid: userId
                },
                success: function(response) {
                    console.log("User selection saved successfully");
                    // You can add more feedback here if needed
                },
                error: function() {
                    alert("Error saving user selection. Please try again.");
                }
            });
        }

        function showdetail() {
            var dataToSend = {
                "testid": <?php echo $idtest ?>
            };
            $.ajax({
                url: "<?php echo base_url() . 'index.php/sample/samplecontrol/getsampleid' ?>",
                type: 'POST',
                dataType: 'json',
                data: dataToSend,
                success: function(data) {
                    console.log(data);
                    var sampledata = data["Sample"][0];
                    var sampleDetail = data["Sampledetail"];

                    // Update general information
                    $("#text_samplename").text(sampledata.sampleName);
                    $("#text_datetime").text(convertToThaiBuddhistDate(sampledata.datetime));
                    $("#text_senderagencyname").text(sampledata.senderAgencyname);
                    $("#text_address").text(sampledata.address);
                    $("#text_province").text(sampledata.province);
                    $("#text_telephone").text(sampledata.telephone);
                    $("#text_lineid").text(sampledata.LineId || "-");
                    $("#text_email").text(sampledata.email || "-");
                    $("#text_RegistrationNo").text(sampledata.RegistrationNo || "-");
                    $("#text_RegistrationDate").text(convertToThaiBuddhistDate(sampledata.RegistrationDate));

                    // Handle special cases
                    $("#text_agencytype").text(sampledata.Agencytype === "other" ?
                        "อื่น ๆ : " + sampledata.otherAgencytype :
                        sampledata.Agencytype);

                    if (sampledata.sendertype === "ส่งด้วยตนเอง") {
                        $("#text_sendertype").text("ส่งด้วยตนเอง");
                    } else if (sampledata.sendertype === "ไปรษณีย์") {
                        $("#text_sendertype").text("ส่งผ่านไปรษณีเลขที่ " + sampledata.othersendertype);
                    } else {
                        $("#text_sendertype").text("ส่งช่องทางอื่น ๆ รายละเอียด " + sampledata.othersendertype);
                    }

                    $("#textReportuncertainty").text(sampledata.ReportmethodName);
                    $("#text_MethodTest").text(sampledata.MethodTest);
                    $("#text_Returnsample").text(sampledata.Returnsample);

                    // Update service visibility
                    $("#text_s1").toggle(sampledata.service1 === "on");
                    $("#text_s2").toggle(sampledata.service2 === "on");
                    $("#text_s3").toggle(sampledata.service3 === "on");
                    $("#text_s4").toggle(sampledata.service4 === "on");

                    // Create tab elements
                    var tabtable = $("#v-pills-tab");
                    tabtable.empty();

                    var firstElementId = null;
                    $.each(sampleDetail, function(index, row) {
                        var isFirstrow = (index == 0) ? "nav-link active" : "nav-link";
                        var rowElement = $('<a class="nav-link tabgettest" role="tab" href="#" id="' + row.sampleid + '">' + row.samplename + '</a>');
                        rowElement.addClass(isFirstrow);
                        tabtable.append(rowElement);

                        if (index === 0) {
                            firstElementId = row.sampleid;
                        }
                    });

                    // Initialize tab functionality
                    addaction();

                    // Trigger click on the first element
                    if (firstElementId) {
                        $("#" + firstElementId).click();
                    }
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