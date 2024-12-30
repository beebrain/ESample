<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Test Status</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #printArea,
            #printArea * {
                visibility: visible;
            }

            #printArea {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            .no-print {
                display: none !important;
            }

            @page {
                size: A4;
                margin: 1cm;
            }
        }


        .status-badge {
            padding: 0.4em 0.8em;
            border-radius: 0.25rem;
            font-size: 0.85em;
            font-weight: 500;
        }

        .status-pending {
            background-color: #ffeeba;
            color: #856404;
        }

        .status-in-progress {
            background-color: #b8daff;
            color: #004085;
        }

        .status-completed {
            background-color: #c3e6cb;
            color: #155724;
        }

        .status-card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .status-card:hover {
            transform: translateY(-5px);
        }

        .timeline-container {
            position: relative;
            padding: 20px 0;
        }

        .timeline-item {
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 50%;
            width: 20px;
            height: 2px;
            background-color: #dee2e6;
        }

        .timeline-date {
            color: #6c757d;
            font-size: 0.85em;
            margin-bottom: 5px;
        }

        .progress-indicator {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
        }

        .status-count {
            font-size: 2em;
            font-weight: bold;
            margin: 10px 0;
        }

        .status-label {
            color: #6c757d;
            font-size: 0.9em;
        }

        /* Custom styles for DataTables */
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 20px;
        }

        .dataTables_wrapper .dataTables_length select {
            min-width: 60px;
        }

        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }

        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #statusDetailsContent,
            #statusDetailsContent * {
                visibility: visible;
            }

            #statusDetailsContent {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            .modal {
                position: absolute;
                left: 0;
                top: 0;
                margin: 0;
                padding: 0;
                min-height: 100%;
                visibility: visible;
                /**Remove scrollbar for printing.**/
                overflow: visible !important;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body class="color-light">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center"></div>
    </div>
    <!-- loader END -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar sidebar-default" id="mainMenu">
            <!-- Load your main menu here -->
        </div>

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <!-- Page Title -->
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">สถานะการทดสอบทั้งหมด</h4>
                                <p class="mb-0">ภาพรวมและรายละเอียดสถานะการทดสอบตัวอย่าง</p>
                            </div>
                        </div>
                    </div>

                    <!-- Status Cards -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card status-card bg-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="progress-indicator bg-warning">
                                        <i class="fas fa-clock text-white"></i>
                                    </div>
                                    <h6 class="mb-0">รอมอบหมาย</h6>
                                </div>
                                <div class="status-count" id="pending-assignment-count">0</div>
                                <div class="status-label">ตัวอย่าง</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="card status-card bg-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="progress-indicator bg-info">
                                        <i class="fas fa-vial text-white"></i>
                                    </div>
                                    <h6 class="mb-0">รอผลทดสอบ</h6>
                                </div>
                                <div class="status-count" id="pending-results-count">0</div>
                                <div class="status-label">ตัวอย่าง</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="card status-card bg-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="progress-indicator bg-primary">
                                        <i class="fas fa-check-double text-white"></i>
                                    </div>
                                    <h6 class="mb-0">รอยืนยันผล</h6>
                                </div>
                                <div class="status-count" id="pending-confirmation-count">0</div>
                                <div class="status-label">ตัวอย่าง</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="card status-card bg-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="progress-indicator bg-success">
                                        <i class="fas fa-clipboard-check text-white"></i>
                                    </div>
                                    <h6 class="mb-0">รอทบทวน</h6>
                                </div>
                                <div class="status-count" id="pending-review-count">0</div>
                                <div class="status-label">ตัวอย่าง</div>
                            </div>
                        </div>
                    </div>

                    <!-- Status Table -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="status-datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>เลขที่เอกสาร</th>
                                                <th>ชื่อตัวอย่าง</th>
                                                <th>หน่วยงาน</th>
                                                <th>นักวิทยาศาสตร์</th>
                                                <th>ผู้ทบทวน</th>
                                                <th>สถานะการทดสอบ</th>
                                                <th>สถานะการยืนยัน</th>
                                                <th>สถานะการทบทวน</th>
                                                <th width="150px">การดำเนินการ</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Details Modal -->
    <!-- Status Details Modal -->
    <div class="modal fade" id="statusDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl"> <!-- Changed to modal-xl for larger content -->
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">
                        <i class="fas fa-info-circle mr-2"></i>
                        รายละเอียดสถานะการทดสอบ
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="statusDetailsContent">
                    <!-- Content will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="window.print()">
                        <i class="fas fa-print mr-1"></i> พิมพ์
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i> ปิด
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">
                        <i class="fas fa-file-alt mr-2"></i>
                        เอกสารการทดสอบ
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0" id="documentModalbody">
                    <!-- Document Information -->
                    <div class="bg-light p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>เลขที่เอกสาร:</strong> ${sampleData.docnumber || '-'}</p>
                                <p class="mb-1"><strong>ชื่อตัวอย่าง:</strong> ${sampleData.sampleName || '-'}</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="mb-1"><strong>วันที่:</strong> ${formatThaiDate(sampleData.createDate)}</p>
                                <p class="mb-1"><strong>หน่วยงาน:</strong> ${sampleData.senderAgencyname || '-'}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Document Viewer -->
                    <div class="document-viewer" style="height: 75vh;">
                        <embed
                            src="${fileUrl}"
                            type="application/pdf"
                            width="100%"
                            height="100%"
                            class="border-0">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="${fileUrl}" class="btn btn-primary" target="_blank" download>
                        <i class="fas fa-download mr-1"></i> ดาวน์โหลด
                    </a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i> ปิด
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Test Results Modal -->
    <!-- Test Results Modal -->
    <div class="modal fade" id="testResultsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="fas fa-flask mr-2"></i>
                        รายละเอียดการทดสอบ
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="testResultsContent">
                    <!-- Content will be loaded dynamically -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i> ปิด
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Scripts -->
    <script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

    <script>
        const base_url = '<?php echo base_url() ?>';

        $(document).ready(function() {
            // Initialize DataTable
            let statusTable = $('#status-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: base_url + 'index.php/sample/samplecontrol/getTestStatus',
                    type: 'POST'
                },
                columns: [{
                        data: 'docnumber',
                        render: function(data) {
                            return data || '-';
                        }
                    },
                    {
                        data: 'sampleName'
                    },
                    {
                        data: 'senderAgencyname'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            let scientistName = row.scientist_name ?
                                `${row.scientist_name} ${row.scientist_lastname}` :
                                '<span class="text-muted">ยังไม่ได้กำหนด</span>';
                            return scientistName;
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            let reviewerName = row.reviewer_name ?
                                `${row.reviewer_name} ${row.reviewer_lastname}` :
                                '<span class="text-muted">ยังไม่ได้กำหนด</span>';
                            return reviewerName;
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            let status = getTestResultStatus(row);
                            let badgeClass = getStatusBadgeClass(status);
                            let text = getStatusText(status);
                            let completedCount = row.completed_tests || 0;
                            let totalCount = row.total_tests || 0;

                            return `
                        <div class="d-flex align-items-center">
                            <span class="status-badge ${badgeClass}">${text}</span>
                            ${totalCount > 0 ? 
                                `<small class="text-muted ml-2">(${completedCount}/${totalCount})</small>` : 
                                ''}
                        </div>`;
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            let status = getConfirmationStatus(row);
                            let badgeClass = getStatusBadgeClass(status);
                            let text = getConfirmationText(status);
                            let confirmedCount = row.confirmed_tests || 0;
                            let totalCount = row.total_tests || 0;

                            return `
                        <div class="d-flex align-items-center">
                            <span class="status-badge ${badgeClass}">${text}</span>
                            ${totalCount > 0 ? 
                                `<small class="text-muted ml-2">(${confirmedCount}/${totalCount})</small>` : 
                                ''}
                        </div>`;
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            let status = getReviewStatus(row);
                            let badgeClass = getStatusBadgeClass(status);
                            let text = getReviewText(status);
                            return `<span class="status-badge ${badgeClass}">${text}</span>`;
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                        <div class="action-buttons">
                            <button class="btn btn-info btn-sm mr-1" 
                                onclick="showStatusDetails('${row.testid}')" 
                                title="ดูรายละเอียด">
                                <i class="fas fa-info-circle"></i>
                            </button>
                            <button class="btn btn-success btn-sm mr-1" 
                                onclick="showDocument('${row.testid}')" 
                                title="ดูเอกสาร">
                                <i class="fas fa-file-alt"></i>
                            </button>
                            <button class="btn btn-primary btn-sm" 
                                onclick="showTestResults('${row.testid}')" 
                                title="ดูผลการทดสอบ">
                                <i class="fas fa-flask"></i>
                            </button>
                        </div>`;
                        }
                    }
                ],
                order: [
                    [0, 'desc']
                ],
                pageLength: 10,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Thai.json'
                }
            });

            // Initial status counts update
            updateStatusCounts();

            // Auto refresh every 5 minutes
            setInterval(function() {
                statusTable.ajax.reload(null, false);
                updateStatusCounts();
            }, 300000);
        });

        // Status Helper Functions
        function getTestResultStatus(row) {
            if (!row.total_tests) return 'pending';
            if (row.completed_tests === row.total_tests) return 'completed';
            if (row.completed_tests > 0) return 'partial';
            return 'pending';
        }

        function getConfirmationStatus(row) {
            if (!row.total_tests) return 'pending';
            if (row.confirmed_tests === row.total_tests) return 'completed';
            if (row.confirmed_tests > 0) return 'partial';
            return 'pending';
        }

        function getReviewStatus(row) {
            if (row.reviewer_confirm) return 'completed';
            if (row.reviewer_id) return 'in_progress';
            return 'pending';
        }

        function getStatusBadgeClass(status) {
            switch (status) {
                case 'completed':
                    return 'status-completed';
                case 'partial':
                case 'in_progress':
                    return 'status-in-progress';
                default:
                    return 'status-pending';
            }
        }

        function getStatusText(status) {
            switch (status) {
                case 'completed':
                    return 'เสร็จสิ้น';
                case 'partial':
                    return 'บางส่วน';
                default:
                    return 'รอดำเนินการ';
            }
        }

        function getConfirmationText(status) {
            switch (status) {
                case 'completed':
                    return 'ยืนยันแล้ว';
                case 'partial':
                    return 'บางส่วน';
                default:
                    return 'รอยืนยัน';
            }
        }

        function getReviewText(status) {
            switch (status) {
                case 'completed':
                    return 'ทวนสอบแล้ว';
                case 'in_progress':
                    return 'รอการทวนสอบ';
                default:
                    return 'กำหนดผู้ทวนสอบ';
            }
        }

        // Status Details Modal Functions
        function showStatusDetails(testId) {
            Swal.fire({
                title: 'กำลังโหลดข้อมูล',
                text: 'กรุณารอสักครู่...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: base_url + 'index.php/sample/samplecontrol/getTestStatusDetails',
                type: 'POST',
                data: {
                    testId: testId
                },
                success: function(response) {
                    if (response && response.data) {
                        // Check if ALL tests are completed AND confirmed
                        const canPrint = response.data.stats.completed_tests === response.data.stats.total_tests &&
                            response.data.stats.confirmed_tests === response.data.stats.total_tests;

                        // Build the modal content
                        const html = buildStatusDetailsHtml(response.data);
                        $('#statusDetailsContent').html(html);

                        // Update footer with print button
                        const footerButtons = `
                    <button type="button" class="btn ${canPrint ? 'btn-primary' : 'btn-secondary'} mr-2" 
                            ${canPrint ? `onclick="printResults('${testId}')"` : 'disabled'}
                            data-toggle="tooltip" 
                            title="${canPrint ? 'พิมพ์ผลการทดสอบ' : 'ต้องดำเนินการทดสอบและยืนยันผลให้ครบถ้วนก่อนพิมพ์'}">
                        <i class="fas fa-print mr-1"></i> พิมพ์
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i> ปิด
                    </button>
                `;

                        $('#statusDetailsModal .modal-footer').html(footerButtons);

                        // Initialize tooltips
                        $('[data-toggle="tooltip"]').tooltip();

                        // Show modal
                        $('#statusDetailsModal').modal('show');
                    }
                    Swal.close();
                },
                error: function(xhr, status, error) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถโหลดข้อมูลได้ กรุณาลองใหม่อีกครั้ง'
                    });
                    console.error('Error:', error);
                }
            });
        }

        // Document Functions
        function showDocument(testId) {
            Swal.fire({
                title: 'กำลังโหลดเอกสาร',
                text: 'กรุณารอสักครู่...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: base_url + 'index.php/sample/samplecontrol/getsampleid',
                type: 'POST',
                dataType: 'json',
                data: {
                    testid: testId
                },
                success: function(data) {
                    Swal.close();
                    if (data && data.Sample && data.Sample[0]) {
                        const sampleData = data.Sample[0];
                        if (sampleData.fileActive) {
                            updateDocumentModal(sampleData);
                            $('#documentModal').modal('show');
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'ไม่พบเอกสาร',
                                text: 'ยังไม่มีเอกสารสำหรับการทดสอบนี้'
                            });
                        }
                    }
                },
                error: function(xhr, status, error) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถโหลดข้อมูลได้ กรุณาลองใหม่อีกครั้ง'
                    });
                }
            });
        }

        // Results Functions
        function printResults(testId) {
            if (testId) {
                window.location.href = base_url + 'index.php/Result/resultpanel/genreportTester/' + testId;
            }
        }

        // Utility Functions
        function formatThaiDate(dateString) {
            if (!dateString || dateString === '0000-00-00' || dateString === '0000-00-00 00:00:00') return '-';

            try {
                let date;

                // Check if date is in d/m/Y H:i format
                if (dateString.includes('/')) {
                    // Split the date and time parts
                    const [datePart, timePart = '00:00'] = dateString.split(' ');
                    const [day, month, year] = datePart.split('/');
                    const [hours = '00', minutes = '00'] = timePart.split(':');

                    // Create date object (month - 1 because months are 0-based in JavaScript)
                    date = new Date(parseInt(year), parseInt(month) - 1, parseInt(day),
                        parseInt(hours), parseInt(minutes));
                } else {
                    // Handle standard format (yyyy-mm-dd HH:mm:ss)
                    date = new Date(dateString.replace(' ', 'T'));
                }

                // Check if date is valid
                if (isNaN(date.getTime())) {
                    return '-';
                }

                const thaiMonth = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.",
                    "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
                ];

                // Format time with leading zeros
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');

                // Return formatted date and time
                return `${date.getDate()} ${thaiMonth[date.getMonth()]} ${date.getFullYear() + 543} ${hours}:${minutes} น.`;
            } catch (e) {
                console.error('Date parsing error:', e);
                return '-';
            }
        }

        function updateStatusCounts() {
            $.ajax({
                url: base_url + 'index.php/sample/samplecontrol/getStatusCounts',
                type: 'GET',
                success: function(response) {
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                    }
                    animateCount('pending-assignment-count', response.pending_assignment || 0);
                    animateCount('pending-results-count', response.pending_results || 0);
                    animateCount('pending-confirmation-count', response.pending_confirmation || 0);
                    animateCount('pending-review-count', response.pending_review || 0);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching status counts:', error);
                }
            });
        }

        function animateCount(elementId, newValue) {
            const element = document.getElementById(elementId);
            if (!element) return;

            const currentValue = parseInt(element.textContent);
            if (currentValue === newValue) return;

            const duration = 1000;
            const steps = 20;
            const stepValue = (newValue - currentValue) / steps;
            const stepDuration = duration / steps;

            let currentStep = 0;
            const interval = setInterval(() => {
                currentStep++;
                const displayValue = Math.round(currentValue + (stepValue * currentStep));
                element.textContent = displayValue;

                if (currentStep >= steps) {
                    element.textContent = newValue;
                    clearInterval(interval);
                }
            }, stepDuration);
        }


        function buildStatusDetailsHtml(data) {
            return `
    <div class="card">
        <div class="card-body">
            <!-- Header Information -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="bg-light p-3 rounded">
                        <h6 class="mb-3">ข้อมูลการทดสอบ</h6>
                        <table class="table table-sm table-borderless mb-0">
                            <tr>
                                <td width="130">เลขที่เอกสาร:</td>
                                <td>${data.test.docnumber || '-'}</td>
                            </tr>
                            <tr>
                                <td>ชื่อตัวอย่าง:</td>
                                <td>${data.test.sampleName || '-'}</td>
                            </tr>
                            <tr>
                                <td>หน่วยงาน:</td>
                                <td>${data.test.senderAgencyname || '-'}</td>
                            </tr>
                            <tr>
                                <td>วันที่รับตัวอย่าง:</td>
                                <td>${formatThaiDate(data.test.createDate)}</td>
                            </tr>
                            <tr>
                                <td>วันที่ทดสอบ:</td>
                                <td>${formatThaiDate(data.test.activeDate)}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-light p-3 rounded">
                        <h6 class="mb-3">สถานะการดำเนินการ</h6>
                        <div class="progress-status">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>การทดสอบ (${data.stats.completed_tests}/${data.stats.total_tests})</div>
                                <span class="badge ${data.test_result_status.badge_class}">
                                    ${data.test_result_status.text}
                                </span>
                            </div>
                            <div class="progress mb-3" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" 
                                     style="width: ${data.stats.total_tests > 0 ? (data.stats.completed_tests / data.stats.total_tests * 100) : 0}%">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>การยืนยันผล (${data.stats.confirmed_tests}/${data.stats.total_tests})</div>
                                <span class="badge ${data.confirmation_status.badge_class}">
                                    ${data.confirmation_status.text}
                                </span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" role="progressbar" 
                                     style="width: ${data.stats.total_tests > 0 ? (data.stats.confirmed_tests / data.stats.total_tests * 100) : 0}%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Details -->
            ${data.samples.map(sample => `
                <div class="card mb-3">
                    <div class="card-header bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">
                                ${sample.samplename}
                                <small class="text-muted ml-2">รหัส: ${sample.operationnumber || '-'}</small>
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="text-center" width="50">#</th>
                                        <th>รายการทดสอบ</th>
                                        <th>วิธีการทดสอบ</th>
                                        <th>ผลการทดสอบ</th>
                                        <th>ผู้ทดสอบ</th>
                                        <th class="text-center">สถานะ</th>
                                        <th>วันที่</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${sample.tests.map((test, index) => `
                                        <tr>
                                            <td class="text-center">${index + 1}</td>
                                            <td>${test.service || '-'}</td>
                                            <td>${test.methodName || test.method || '-'}</td>
                                            <td>
                                                ${test.testvalue ? `${test.testvalue} ${test.unit || ''}` : '-'}
                                            </td>
                                            <td>${test.tester_name || '-'}</td>
                                            <td class="text-center">
                                                <span class="badge ${test.status.badge_class}">
                                                    ${test.status.text}
                                                </span>
                                            </td>
                                            <td>
                                                ${test.status.code === 'confirmed' ? formatThaiDate(test.confirmtime) :
                                                  test.status.code === 'completed' ? formatThaiDate(test.completetime) : '-'}
                                            </td>
                                        </tr>
                                    `).join('')}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            `).join('')}
        </div>
    </div>`;
        }



        function updateDocumentModal(sampleData) {
            // Generate file URL
            const fileUrl = base_url + 'alldoc/' + sampleData.fileActive;

            // Update document information
            const documentInfo = `
        <div class="bg-light p-3">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-1"><strong>เลขที่เอกสาร:</strong> ${sampleData.docnumber || '-'}</p>
                    <p class="mb-1"><strong>ชื่อตัวอย่าง:</strong> ${sampleData.sampleName || '-'}</p>
                </div>
                <div class="col-md-6 text-right">
                    <p class="mb-1"><strong>วันที่:</strong> ${formatThaiDate(sampleData.createDate)}</p>
                    <p class="mb-1"><strong>หน่วยงาน:</strong> ${sampleData.senderAgencyname || '-'}</p>
                </div>
            </div>
        </div>

        <div class="document-viewer" style="height: 75vh;">
            <embed
                src="${fileUrl}"
                type="application/pdf"
                width="100%"
                height="100%"
                class="border-0">
        </div>`;

            // Update modal content
            $('#documentModalbody').html(documentInfo);

            // Update footer buttons
            const footerButtons = `
        <a href="${fileUrl}" class="btn btn-primary" target="_blank" download>
            <i class="fas fa-download mr-1"></i> ดาวน์โหลด
        </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times mr-1"></i> ปิด
        </button>`;

            // Update footer
            $('#documentModal .modal-footer').html(footerButtons);
        }

        function showTestResults(testId) {
            // Show loading indicator
            Swal.fire({
                title: 'กำลังโหลดข้อมูล',
                text: 'กรุณารอสักครู่...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Get test details
            $.ajax({
                url: base_url + 'index.php/sample/samplecontrol/getsampleid',
                type: 'POST',
                dataType: 'json',
                data: {
                    testid: testId
                },
                success: function(data) {
                    Swal.close();

                    if (data && data.Sample && data.Sample[0]) {
                        const testData = data.Sample[0];

                        // Build content
                        let html = `
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">ข้อมูลทั่วไป</h4>
                            <dl class="row">
                                <dt class="col-sm-2">ชื่อตัวอย่าง</dt>
                                <dd class="col-sm-6">${testData.sampleName || '-'}</dd>
                                <dt class="col-sm-1">วันนำส่ง</dt>
                                <dd class="col-sm-3">${formatThaiDate(testData.datetime) || '-'}</dd>

                                <dt class="col-sm-2">ชื่อผู้นำส่ง</dt>
                                <dd class="col-sm-6">${testData.senderAgencyname || '-'}</dd>
                                <dt class="col-sm-1">ผู้นำส่ง</dt>
                                <dd class="col-sm-3">${testData.Agencytype || '-'}</dd>

                                <dt class="col-sm-2">ที่อยู่</dt>
                                <dd class="col-sm-6">${testData.address || '-'}</dd>
                                <dt class="col-sm-1">จังหวัด</dt>
                                <dd class="col-sm-3">${testData.province || '-'}</dd>

                                <dt class="col-sm-2">หมายเลขโทรศัพท์</dt>
                                <dd class="col-sm-2">${testData.telephone || '-'}</dd>
                                <dt class="col-sm-1">Line ID</dt>
                                <dd class="col-sm-3">${testData.LineId || '-'}</dd>
                                <dt class="col-sm-1">Email</dt>
                                <dd class="col-sm-3">${testData.email || '-'}</dd>

                                <dt class="col-sm-2">เลขที่หนังสือนำส่ง</dt>
                                <dd class="col-sm-6">${testData.RegistrationNo || '-'}</dd>
                                <dt class="col-sm-1">ลงวันที่</dt>
                                <dd class="col-sm-3">${formatThaiDate(testData.RegistrationDate) || '-'}</dd>
                            </dl>

                            <hr>

                            <h5 class="mb-3">ข้อมูลเพิ่มเติม</h5>
                            <dl class="row">
                                <dt class="col-sm-3">วิธีการส่งตัวอย่าง:</dt>
                                <dd class="col-sm-9">
                                    ${testData.sendertype === 'ส่งด้วยตนเอง' ? 'ส่งด้วยตนเอง' : 
                                      testData.sendertype === 'ไปรษณีย์' ? `ส่งผ่านไปรษณีย์เลขที่ ${testData.othersendertype}` :
                                      `ส่งช่องทางอื่น ๆ รายละเอียด ${testData.othersendertype}`}
                                </dd>

                                <dt class="col-sm-3">การส่งคืนตัวอย่าง:</dt>
                                <dd class="col-sm-9">${testData.Returnsample || '-'}</dd>

                                <dt class="col-sm-3">รายงานค่าความไม่แน่นอน:</dt>
                                <dd class="col-sm-9">${testData.Reportuncertainty || '-'}</dd>

                                <dt class="col-sm-3">การเลือกวิธีทดสอบ:</dt>
                                <dd class="col-sm-9">${testData.MethodTest || '-'}</dd>

                                <dt class="col-sm-3">บริการเพิ่มเติม:</dt>
                                <dd class="col-sm-9">
                                    <ul class="list-unstyled mb-0">
                                        ${testData.service1 === 'on' ? '<li><i class="fas fa-check text-success mr-2"></i>ให้เยี่ยมชมห้องปฏิบัติการ</li>' : ''}
                                        ${testData.service2 === 'on' ? '<li><i class="fas fa-check text-success mr-2"></i>ให้บริการภาชนะเก็บตัวอย่าง</li>' : ''}
                                        ${testData.service3 === 'on' ? '<li><i class="fas fa-check text-success mr-2"></i>เทคนิคการตรวจวิเคราะห์</li>' : ''}
                                        ${testData.service4 === 'on' ? '<li><i class="fas fa-check text-success mr-2"></i>เครื่องมือวิเคราะห์</li>' : ''}
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                    </div>`;

                        // Update modal content
                        $('#testResultsContent').html(html);

                        // Show modal
                        $('#testResultsModal').modal('show');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่พบข้อมูลการทดสอบ'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถโหลดข้อมูลได้ กรุณาลองใหม่อีกครั้ง'
                    });
                    console.error('Error:', error);
                }
            });
        }
        // Load main menu
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
    </script>
</body>

</html>