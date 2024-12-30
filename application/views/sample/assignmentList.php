<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profile</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">

    <!-- Add jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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


        .ui-autocomplete {
            z-index: 9999 !important;
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }


        .autocomplete-message {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border-radius: 5px;
            z-index: 9999;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>

<body class="color-light">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar sidebar-default" id="mainMenu">
            <!-- Sidebar content will be loaded here -->
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
                                        <th>Completed Date</th>
                                        <th>Confirm</th>
                                        <th>Action</th>
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

    <!-- Modal HTML -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">บันทึกผล</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" role="form">
                        <input type="hidden" id="editId">
                        <input type="hidden" id="editidmethod">

                        <!-- Sample Information -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">ข้อมูลตัวอย่าง</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>เลขที่เอกสาร:</strong> <span id="docNumber"></span></p>
                                        <p><strong>รหัสปฏิบัติการ:</strong> <span id="operationNumber"></span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>ชื่อตัวอย่าง:</strong> <span id="sampleName"></span></p>
                                        <p><strong>รายการทดสอบ:</strong> <span id="testService"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Fields -->
                        <div class="edit-field">
                            <div class="form-group">
                                <label for="editTestValue">ผลการทดสอบ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editTestValue">
                                <div class="invalid-feedback">กรุณากรอกผลการทดสอบ</div>
                            </div>
                            <div class="form-group">
                                <label for="editmethodName">กระบวนการทดสอบ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="editmethodName">
                                <div id="methodLoadingIndicator" style="display: none;">Loading...</div>
                                <div class="invalid-feedback">กรุณาเลือกกระบวนการทดสอบ</div>
                            </div>
                        </div>

                        <!-- Display Fields -->
                        <div class="display-field" style="display:none;">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>ผลการทดสอบ:</strong> <span id="displayTestValue"></span></p>
                                    <p><strong>กระบวนการทดสอบ:</strong> <span id="displaymethodName"></span></p>
                                    <p><strong>วันที่เสร็จสิ้น:</strong> <span id="displayCompletedDate"></span></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary" id="saveChanges">บันทึก</button>
                </div>
            </div>
        </div>
    </div>


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
    <!-- jQuery UI JavaScript -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <style>
        .modal-content:focus {
            outline: none;
        }

        .modal-content input:focus,
        .modal-content button:focus {
            outline: 2px solid #007bff;
            outline-offset: 2px;
        }

        .ui-autocomplete {
            z-index: 99999;
        }

        .btn-sm i {
            font-size: 14px;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
        }

        .tooltip {
            z-index: 9999;
        }

        .btn-info {
            color: #fff;
        }

        .text-center {
            text-align: center !important;
        }
    </style>

    <script>
        var table;
        $(document).ready(function() {
            table = $('#sampleTestTable').DataTable({
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
                        "data": "assigntime",
                        "render": function(data) {
                            if (data) {
                                return `<span class="badge badge-primary">มอบหมายแล้ว<br/>เมื่อ: ${data}</span>`;
                            }
                            return '';
                        }
                    },
                    {
                        "data": "completetime",
                        "render": function(data) {
                            if (data) {
                                return `<span class="badge badge-warning">ดำเนินการแล้ว<br/>เมื่อ: ${data}</span>`;
                            }
                            return '';
                        }
                    },
                    {
                        "data": "confirmtime",
                        "render": function(data) {
                            if (data) {
                                return `<span class="badge badge-success">ยืนยันแล้ว<br/>เมื่อ: ${data}</span>`;
                            }
                            return '';
                        }
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            if (row.confirmtime) {
                                return `<button class="btn btn-info btn-sm edit-row" data-toggle="tooltip" title="ดูข้อมูล">
                    <i class="fas fa-eye"></i>
                </button>`;
                            } else if (row.completetime) {
                                return `<button class="btn btn-warning btn-sm edit-row" data-toggle="tooltip" title="แก้ไขข้อมูล">
                    <i class="fas fa-edit"></i>
                </button>`;
                            } else {
                                return `<button class="btn btn-primary btn-sm edit-row" data-toggle="tooltip" title="บันทึกผล">
                    <i class="fas fa-edit"></i>
                </button>`;
                            }
                        },
                        "orderable": false,
                        "className": "text-center"
                    }
                ]
            });


            $('<select id="completedFilter" class="btn btn-primary dropdown-toggle">' +
                '<option value="false">รายการที่ยังไม่เสร็จ</option>' +
                '<option value="true">รายการที่เสร็จแล้ว</option>' +
                '</select>'
            ).appendTo('#sampleTestTable_filter');

            $('#completedFilter').on('change', function() {
                table.ajax.reload();
            });



            $('#editModal').on('show.bs.modal', function() {
                $(this).removeAttr('aria-hidden');
            });

            $('#editModal').on('hidden.bs.modal', function() {
                resetForm();
                $(this).find('input').blur();
            });

            $('#editModal').on('shown.bs.modal', function() {
                setupFocusTrap(this);
            });


        });


        // // Initialize tooltips for the action buttons
        // $('#sampleTestTable').on('draw.dt', function() {
        //     $('[data-toggle="tooltip"]').tooltip();
        // });

        // // Destroy tooltip before table updates
        // $('#sampleTestTable').on('preXhr.dt', function() {
        //     $('[data-toggle="tooltip"]').tooltip('dispose');
        // });


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



        function initializeAutocomplete() {
            $('#editmethodName').autocomplete({
                source: function(request, response) {
                    $('#methodLoadingIndicator').show();

                    $.ajax({
                        url: '<?php echo base_url() . 'index.php/Sample/samplecontrol/get_method_names'; ?>',
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            $('#methodLoadingIndicator').hide();
                            if (Array.isArray(data) && data.length > 0) {
                                var processedData = $.map(data, function(item) {
                                    return {
                                        label: item.methodname,
                                        value: item.methodname,
                                        id: item.idmethod
                                    };
                                });
                                response(processedData);
                            } else {
                                response([]);

                            }
                        },
                        error: function(xhr, status, error) {
                            $('#methodLoadingIndicator').hide();
                            response([]);
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: 'ไม่สามารถค้นหาข้อมูลได้',
                                confirmButtonText: 'ตกลง'
                            });
                        }
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    if (ui.item) {
                        $(this).data('selected-id', ui.item.id);
                        $('#editidmethod').val(ui.item.id);
                    }
                },
                change: function(event, ui) {
                    if (!ui.item) {
                        $(this).data('selected-id', '');
                        $('#editidmethod').val('');
                    }
                }
            });
        }


        // Edit Row Click Handler
        $('#sampleTestTable').on('click', '.edit-row', function() {
            var rowData = table.row($(this).closest('tr')).data();
            resetForm();
            populateModal(rowData);
            $('#editModal').modal('show');
        });



        // Add a reset form function if you don't have one
        function resetForm() {
            $('#editForm')[0].reset();
            $('.is-invalid').removeClass('is-invalid');
            $('#editidmethod').val('');
            $('#editmethodName').removeData('selected-id');
            $('.edit-field, .display-field').hide();
        }

        // Populate Modal
        function populateModal(rowData) {
            resetForm();

            $('#editId').val(rowData.id);
            $('#docNumber').text(rowData.docnumber);
            $('#operationNumber').text(rowData.operationnumber);
            $('#sampleName').text(rowData.samplename);
            $('#testService').text(rowData.service);

            // Check completetime first
            if (!rowData.completetime) {
                // Not completed - fully editable
                $('.edit-field').show();
                $('.display-field').hide();
                $('#saveChanges').show();

                $('#editTestValue').val(rowData.testvalue || '');
                $('#editmethodName').val(rowData.methodName || '');
                $('#editidmethod').val(rowData.methodId || '');

                initializeAutocomplete();
            }
            // Then check confirmtime if completed
            else if (rowData.completetime && !rowData.confirmtime) {
                // Completed but not confirmed
                $('.edit-field').show();
                $('.display-field').hide();
                $('#saveChanges').show();

                $('#editTestValue').val(rowData.testvalue);
                $('#editmethodName').val(rowData.methodName);
                $('#editidmethod').val(rowData.methodId);

                initializeAutocomplete();

                Swal.fire({
                    icon: 'warning',
                    title: 'รายการดำเนินการแล้ว',
                    text: 'กรุณาตรวจสอบข้อมูลก่อนทำการแก้ไข',
                    timer: 2000,
                    showConfirmButton: false
                });
            } else if (rowData.completetime && rowData.confirmtime) {
                // Confirmed - read only
                $('.edit-field').hide();
                $('.display-field').show();
                $('#saveChanges').hide();

                $('#displayTestValue').text(rowData.testvalue || '-');
                $('#displaymethodName').text(rowData.methodName || '-');
                $('#displayCompletedDate').text(rowData.completetime || '-');

                Swal.fire({
                    icon: 'info',
                    title: 'รายการถูกยืนยันแล้ว',
                    text: 'ไม่สามารถแก้ไขข้อมูลได้',
                    timer: 2000,
                    showConfirmButton: false
                });
            }

            $('#editModal').modal('show');
        }


        function setupFocusTrap(modalElement) {
            const focusableElements = $(modalElement).find(
                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
            ).filter(':visible');

            const firstFocusable = focusableElements[0];
            const lastFocusable = focusableElements[focusableElements.length - 1];

            $(modalElement).on('keydown', function(e) {
                if (e.key === 'Tab') {
                    if (e.shiftKey) {
                        if (document.activeElement === firstFocusable) {
                            e.preventDefault();
                            lastFocusable.focus();
                        }
                    } else {
                        if (document.activeElement === lastFocusable) {
                            e.preventDefault();
                            firstFocusable.focus();
                        }
                    }
                }
            });
        }


        // Form Validation
        function validateForm() {
            let isValid = true;
            $('.is-invalid').removeClass('is-invalid');

            // Validate test value
            if (!$('#editTestValue').val().trim()) {
                $('#editTestValue').addClass('is-invalid');
                isValid = false;
            }

            // Validate method
            if (!$('#editmethodName').val().trim()) {
                $('#editmethodName').addClass('is-invalid');
                isValid = false;
            }

            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'กรุณาตรวจสอบข้อมูล',
                    text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                    confirmButtonText: 'ตกลง'
                });
            }

            return isValid;
        }

        // Save Changes Handler
        $('#saveChanges').on('click', function() {
            if (!validateForm()) return;

            const formData = {
                id: $('#editId').val(),
                testvalue: $('#editTestValue').val().trim(),
                methodName: $('#editmethodName').val().trim(),
                methodId: $('#editidmethod').val()
            };

            Swal.fire({
                title: 'ยืนยันการบันทึก',
                text: 'คุณต้องการบันทึกข้อมูลใช่หรือไม่?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'บันทึก',
                cancelButtonText: 'ยกเลิก',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    saveSampleTest(formData);
                }
            });
        });

        function saveSampleTest(formData) {
            Swal.fire({
                title: 'กำลังบันทึก',
                text: 'กรุณารอสักครู่...',
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: '<?php echo base_url() . 'index.php/Sample/samplecontrol/update_sample_test'; ?>',
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ',
                            text: response.message,
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            $('#editModal').modal('hide');
                            table.ajax.reload(null, false);
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: response.message,
                            confirmButtonText: 'ตกลง'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถบันทึกข้อมูลได้: ' + error,
                        confirmButtonText: 'ตกลง'
                    });
                }
            });
        }

        function showValidationError(message) {
            Swal.fire({
                icon: 'error',
                title: 'ข้อมูลไม่ถูกต้อง',
                text: message,
                confirmButtonText: 'ตกลง'
            });
        }

        // Example of loading state
        function showLoading() {
            Swal.fire({
                title: 'กำลังดำเนินการ',
                html: 'กรุณารอสักครู่...',
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }


        // Notification System
        function showNotification(type, message) {
            const alertClass = {
                success: 'alert-success',
                error: 'alert-danger',
                warning: 'alert-warning',
                info: 'alert-info'
            } [type];

            const alert = $(`
                <div class="alert ${alertClass} alert-dismissible fade show position-fixed" 
                     style="top: 20px; right: 20px; z-index: 9999;">
                    ${message}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            `);

            $('body').append(alert);
            alert.addClass('show');

            setTimeout(() => {
                alert.removeClass('show');
                setTimeout(() => alert.remove(), 150);
            }, 3000);
        }


        function showTemporaryMessage(message, duration) {
            var messageElement = $('<div>', {
                text: message,
                css: {
                    position: 'fixed',
                    top: '10px',
                    right: '10px',
                    padding: '10px',
                    background: '#4CAF50',
                    color: 'white',
                    borderRadius: '5px',
                    zIndex: 9999,
                    boxShadow: '0 2px 5px rgba(0,0,0,0.2)',
                    opacity: 0,
                    transition: 'opacity 0.3s ease-in-out'
                }
            }).appendTo('body');

            // Fade in
            setTimeout(() => {
                messageElement.css('opacity', '1');
            }, 10);

            // Fade out and remove
            setTimeout(() => {
                messageElement.css('opacity', '0');
                setTimeout(() => {
                    messageElement.remove();
                }, 300); // Wait for fade out animation
            }, duration);
        }
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
    </script>
</body>

</html>