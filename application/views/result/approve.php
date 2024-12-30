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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
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
                                <h4 class="mb-3">รายการรอยืนยันการทดสอบ</h4>
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
            var ajax_url = "<?php echo base_url() . "index.php/sample/sampleControl/get_TestApproveActive" ?>";
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
                        "data": "sampleName",
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
                            var date = new Date(data);
                            var year = date.getFullYear();
                            var month = ("0" + (date.getMonth() + 1)).slice(-2);
                            var day = ("0" + date.getDate()).slice(-2);
                            return year + "/" + month + "/" + day;
                        }
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            // Add review status badge
                            let reviewBadge = '';
                            if (row.reviewer_confirm) {
                                reviewBadge = '<span class="badge badge-success ml-2">ผ่านการทบทวน</span>';
                            }

                            return `<div class="flex align-items-center list-user-action">
                <a class="btn btn-sm bg-primary" data-toggle="tooltip" data-placement="top" title="แสดงรายละเอียดข้อมูล" data-original-title="Add" onclick="showdetail('${row.testid}')">
                    <i class="ri-eye-line mr-0"></i>
                </a>
                <a class="btn btn-sm bg-success" data-toggle="tooltip" data-placement="top" title="แสดงเอกสารหลักฐาน" data-original-title="Edit" onclick="showdoc('${row.testid}')">
                    <i class="ri-pencil-line mr-0"></i>
                </a>
                <a class="btn btn-sm bg-danger" data-toggle="tooltip" data-placement="top" title="แสดงผลการทดสอบ" onclick="showTestResults('${row.testid}')">
                    <i class="ri-flask-line mr-0"></i>
                </a>
                ${reviewBadge}
            </div>`;
                        }
                    }
                ]

            });



        });

        function showTestResults(testid) {
            // First, get the sample details
            $.ajax({
                url: '<?php echo site_url("sample/samplecontrol/getsampleid"); ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    testid: testid
                },
                success: function(sampleData) {
                    // Then get results for each sample
                    var sampleDetails = sampleData.Sampledetail;
                    var allResults = [];
                    var processedSamples = 0;

                    sampleDetails.forEach(function(sample) {
                        $.ajax({
                            url: '<?php echo site_url("sample/samplecontrol/getAllResultOperationdetail"); ?>',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                sampleid: sample.sampleid
                            },
                            success: function(results) {
                                allResults = allResults.concat(results);
                                processedSamples++;

                                // Once all samples are processed, show the modal
                                if (processedSamples === sampleDetails.length) {
                                    showResultsModal(sampleData.Sample[0], sampleData.Sampledetail, allResults);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Ajax error:', error);
                                alert("เกิดข้อผิดพลาดในการโหลดผลการทดสอบ กรุณาลองใหม่อีกครั้ง");
                            }
                        });
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Ajax error:', error);
                    alert("เกิดข้อผิดพลาดในการโหลดข้อมูลตัวอย่าง กรุณาลองใหม่อีกครั้ง");
                }
            });
        }

        function showResultsModal(sampleData, sampleDetails, results) {
            // Get current user ID from session
            const currentUserId = '<?php echo $this->session->userdata("user_data")["uid"]; ?>';

            // Group results by sampleid
            var groupedResults = {};
            var sampleInfo = {};

            // Create lookup object for sample details
            sampleDetails.forEach(function(detail) {
                sampleInfo[detail.sampleid] = {
                    samplename: detail.samplename,
                    textpack: detail.textpack,
                    appearance: detail.appearance,
                    amount: detail.amount,
                    operationnumber: detail.operationnumber
                };
            });

            // Group results by sampleid
            results.forEach(function(result) {
                if (!groupedResults[result.sampleid]) {
                    groupedResults[result.sampleid] = [];
                }
                groupedResults[result.sampleid].push(result);
            });

            var modalContent = `
    <div class="modal fade" id="testResultsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ผลการทดสอบตัวอย่าง</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-white mb-0">เลขที่เอกสาร: ${sampleData.docnumber}</h6>
                                    <h6 class="text-white mb-0">ชื่อตัวอย่าง: ${sampleData.sampleName}</h6>
                                    <h6 class="text-white mb-0">วันที่: ${formatThaiDateTime(sampleData.activeDate)}</h6>
                                </div>
                              <div class="col-md-6 text-right">
    <h6 class="text-white mb-0">ผู้ส่งตัวอย่าง: ${sampleData.senderAgencyname}</h6>
    ${sampleData.scientist_id == currentUserId ? 
        '<span class="badge badge-warning">คุณเป็นผู้รับผิดชอบการทดสอบนี้</span>' : ''}
    ${sampleData.reviewer_id == currentUserId ? 
        '<span class="badge badge-info">คุณเป็นผู้ทบทวนการทดสอบนี้</span>' : ''}
    ${sampleData.reviewer_confirm ? 
        '<span class="badge badge-success ml-2">ผ่านการทบทวนเมื่อ: ' + formatThaiDateTime(sampleData.reviewer_confirm) + '</span>' : ''}
</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="resultsTable">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="text-center" width="5%">ลำดับ</th>
                                            <th width="20%">รายการทดสอบ</th>
                                            <th width="15%">วิธีการทดสอบ</th>
                                            <th width="15%">ผลการทดสอบ</th>
                                            <th width="15%">วิธีที่ใช้</th>
                                            <th width="15%">สถานะ</th>
                                            <th width="15%">การดำเนินการ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="testResultsBody">`;

            // Populate results
            var index = 1;
            var hasCompletedResults = false;
            var allResultsConfirmed = true;
            var canShowApproveAll = false;

            // For each sample group
            Object.keys(groupedResults).forEach(function(sampleid) {
                var sampleResults = groupedResults[sampleid];
                var sample = sampleInfo[sampleid] || {};

                // Add sample header row
                modalContent += `
            <tr class="bg-light">
                <td colspan="7" class="sample-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>${sample.samplename || 'ไม่ระบุชื่อตัวอย่าง'}</strong>
                            ${sample.operationnumber ? `<br><small>เลขที่: ${sample.operationnumber}</small>` : ''}
                        </div>
                        <div class="col-md-6">
                            <div class="sample-details">
                                ${sample.textpack ? `<small class="mr-3">รายละเอียด: ${sample.textpack}</small>` : ''}
                                ${sample.appearance ? `<small class="mr-3">ลักษณะ: ${sample.appearance}</small>` : ''}
                                ${sample.amount ? `<small>ปริมาณ: ${sample.amount}</small>` : ''}
                            </div>
                        </div>
                    </div>
                </td>
            </tr>`;

                // Add results for this sample
                sampleResults.forEach(function(result) {
                    var status = getStatusBadge(result);
                    var approveButton = '';

                    // Check if user can approve this result
                    if (result.completetime && !result.confirmtime && sampleData.scientist_id == currentUserId) {
                        hasCompletedResults = true;
                        canShowApproveAll = true;
                        approveButton = `<button class="btn btn-success btn-sm approve-result" data-id="${result.id}">ยืนยันผล</button>`;
                    }

                    if (!result.confirmtime) {
                        allResultsConfirmed = false;
                    }

                    modalContent += `
                <tr>
                    <td class="text-center">${index++}</td>
                    <td>${result.service || '-'}</td>
                    <td>${result.method || '-'}</td>
                    <td>${result.testvalue || '-'}</td>
                    <td>${result.methodName || '-'}</td>
                    <td class="text-center">${status}</td>
                    <td class="text-center">${approveButton}</td>
                </tr>`;
                });
            });

            modalContent += `
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">`;

            // Show Approve All button only if user is the scientist and there are results to approve
            if (canShowApproveAll && sampleData.scientist_id == currentUserId) {
                modalContent += `<button type="button" class="btn btn-primary" id="approveAllBtn">ยืนยันทั้งหมด</button>`;
            }

            // Show Review Confirmation button only if:
            // 1. User is the reviewer
            // 2. All results are confirmed
            // 3. Review is not yet confirmed
            if (sampleData.reviewer_id == currentUserId &&
                allResultsConfirmed &&
                !sampleData.reviewer_confirm) {
                modalContent += `<button type="button" class="btn btn-success" id="approveReviewBtn">ยืนยันการทบทวน</button>`;
            } else if (sampleData.reviewer_confirm) {
                modalContent += `<button type="button" class="btn btn-success" disabled>ผ่านการทบทวนแล้ว</button>`;
            }

            modalContent += `
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>`;

            // Remove existing modal if any
            $('#testResultsModal').remove();

            // Append new modal to body
            $('body').append(modalContent);

            // Add click handlers for approve buttons
            $('.approve-result').click(function() {
                var resultId = $(this).data('id');
                approveResult(resultId, $(this));
            });

            // Add click handler for approve all button
            $('#approveAllBtn').click(function() {
                approveAllResults(groupedResults, sampleData.scientist_id);
            });

            // Add click handler for review approval button
            $('#approveReviewBtn').click(function() {
                approveReview(sampleData.testid);
            });

            // Show modal
            $('#testResultsModal').modal('show');
        }



        function approveReview(testId) {
            Swal.fire({
                title: 'ยืนยันการทบทวน',
                text: 'คุณต้องการยืนยันการทบทวนผลการทดสอบทั้งหมดหรือไม่?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'กำลังดำเนินการ',
                        text: 'กรุณารอสักครู่...',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    $.ajax({
                        url: '<?php echo site_url("sample/samplecontrol/approveReview"); ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            testid: testId
                        }
                    }).then(function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'สำเร็จ',
                                text: 'ยืนยันการทบทวนเรียบร้อยแล้ว',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                // Close the modal
                                $('#testResultsModal').modal('hide');

                                // Refresh the datatable if it exists
                                if ($.fn.DataTable.isDataTable('#datatable')) {
                                    $('#datatable').DataTable().ajax.reload(null, false);
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: response.message || 'ไม่สามารถยืนยันการทบทวนได้',
                            });
                        }
                    }).catch(function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้ กรุณาลองใหม่อีกครั้ง',
                        });
                        console.error('Error:', error);
                    });
                }
            });
        }


        // Helper function for approving all results
        function approveAllResults(groupedResults, scientistId) {
            Swal.fire({
                title: 'ยืนยันการดำเนินการ',
                text: 'คุณต้องการยืนยันผลการทดสอบทั้งหมดหรือไม่?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading state
                    Swal.fire({
                        title: 'กำลังดำเนินการ',
                        text: 'กรุณารอสักครู่...',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Collect all incomplete results
                    let promises = [];
                    $('.approve-result').each(function() {
                        const resultId = $(this).data('id');
                        const button = $(this);

                        // Create a promise for each approval
                        const promise = new Promise((resolve, reject) => {
                            $.ajax({
                                    url: '<?php echo site_url("sample/samplecontrol/approveResult"); ?>',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {
                                        id: resultId
                                    }
                                })
                                .done(function(response) {
                                    if (response.success) {
                                        // Update UI for this result
                                        const row = button.closest('tr');
                                        const now = new Date();
                                        row.find('td:nth-last-child(2)').html(
                                            `<span class="badge badge-success">ยืนยันแล้ว<br/>เมื่อ: ${formatThaiDateTime(now)}</span>`
                                        );
                                        button.remove();
                                        resolve(response);
                                    } else {
                                        reject(response.message || 'ไม่สามารถยืนยันผลการทดสอบได้');
                                    }
                                })
                                .fail(function(xhr, status, error) {
                                    reject(error);
                                });
                        });

                        promises.push(promise);
                    });

                    // Wait for all approvals to complete
                    Promise.all(promises)
                        .then(() => {
                            // Hide the approve all button
                            $('#approveAllBtn').hide();

                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'สำเร็จ',
                                text: 'ยืนยันผลการทดสอบทั้งหมดเรียบร้อยแล้ว',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                // Refresh the datatable
                                if ($.fn.DataTable.isDataTable('#datatable')) {
                                    $('#datatable').DataTable().ajax.reload(null, false);
                                }

                                // Optionally close the modal
                                // $('#testResultsModal').modal('hide');
                            });
                        })
                        .catch((error) => {
                            console.error('Error during batch approval:', error);
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: 'ไม่สามารถยืนยันผลการทดสอบบางรายการได้ กรุณาลองใหม่อีกครั้ง',
                            });
                        });
                }
            });
        }

        // Helper function for getting status badge
        function getStatusBadge(result) {
            if (result.confirmtime) {
                return `<span class="badge badge-success">ยืนยันแล้ว<br/>เมื่อ: ${formatThaiDateTime(result.confirmtime)}</span>`;
            } else if (result.completetime) {
                return '<span class="badge badge-warning">รอยืนยัน</span>';
            } else {
                return '<span class="badge badge-danger">รอผล</span>';
            }
        }

        function approveResult(resultId, buttonElement) {
            return Swal.fire({
                title: 'ยืนยันการดำเนินการ',
                text: 'คุณต้องการยืนยันผลการทดสอบนี้หรือไม่?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'กำลังดำเนินการ',
                        text: 'กรุณารอสักครู่...',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    return $.ajax({
                        url: '<?php echo site_url("sample/samplecontrol/approveResult"); ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: resultId
                        }
                    }).then(function(response) {
                        if (response.success) {
                            // Update the UI
                            var row = buttonElement.closest('tr');
                            var now = new Date();
                            row.find('td:nth-last-child(2)').html(
                                `<span class="badge badge-success">ยืนยันแล้ว<br/>เมื่อ: ${formatThaiDateTime(now)}</span>`
                            );
                            buttonElement.remove();

                            // Check if there are any remaining approve buttons
                            if ($('.approve-result').length === 0) {
                                $('#approveAllBtn').fadeOut();
                            }

                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'สำเร็จ',
                                text: response.message || 'ยืนยันผลการทดสอบเรียบร้อยแล้ว',
                                timer: 2000,
                                showConfirmButton: false
                            });

                            // Refresh the datatable if it exists
                            if ($.fn.DataTable.isDataTable('#datatable')) {
                                $('#datatable').DataTable().ajax.reload(null, false);
                            }
                        } else {
                            return Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: response.message || 'ไม่สามารถยืนยันผลการทดสอบได้',
                            });
                        }
                    }).catch(function(xhr, status, error) {
                        return Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้ กรุณาลองใหม่อีกครั้ง',
                        });
                        console.error('Error:', error);
                    });
                }
            });
        }

        function formatThaiDateTime(dateString) {
            if (!dateString) return '-';

            const date = new Date(dateString);
            const thaiOptions = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
            };

            let thaiDate = date.toLocaleDateString('th-TH', thaiOptions);
            thaiDate = thaiDate.replace(date.getFullYear() + '', (date.getFullYear() + 543) + '');
            const time = date.toLocaleTimeString('th-TH', {
                hour: '2-digit',
                minute: '2-digit'
            });

            return `${thaiDate} ${time}`;
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