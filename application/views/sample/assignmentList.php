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


        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">บันทึกผล</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm">
                            <input type="hidden" id="editId">
                            <div class="form-group edit-field">
                                <label for="editTestValue">ผลการทดสอบ</label>
                                <input type="text" class="form-control" id="editTestValue">
                            </div>
                            <div class="form-group edit-field">
                                <label for="editmethodName">กระบวนการทดสอบ</label>
                                <select class="form-control" id="editmethodName">
                                    <option value="">Loading methods...</option>
                                </select>
                                <div id="methodLoadingIndicator" style="display: none;">Loading...</div>
                            </div>
                            <div class="display-field" style="display:none;">
                                <p><strong>ผลการทดสอบ:</strong> <span id="displayTestValue"></span></p>
                                <p><strong>กระบวนการทดสอบ:</strong> <span id="displaymethodName"></span></p>
                                <p><strong>Completed Date:</strong> <span id="displayCompletedDate"></span></p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
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
                                        <th>Completed Date</th>
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
        function fetchMethodNames() {
            $('#methodLoadingIndicator').show();
            $.ajax({
                url: '<?php echo base_url() . 'index.php/Sample/samplecontrol/get_method_names'; ?>',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#editmethodName').empty();
                    $.each(response, function(index, method) {
                        $('#editmethodName').append($('<option></option>').attr('value', method.id).text(method.methodname));
                    });
                    $('#methodLoadingIndicator').hide();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching method names:', error);
                    $('#methodLoadingIndicator').hide();
                    $('#editmethodName').html('<option value="">Error loading methods</option>');
                }
            });
        }


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
                        "data": "assigntime",

                    },
                    {
                        "data": "completetime",

                    },

                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<button class="btn btn-primary edit-row">info</button>';
                        }
                    }
                ]
            });

            // Handle edit button click
            $('#sampleTestTable').on('click', '.edit-row', function() {
                var row = table.row($(this).parents('tr'));
                var rowData = row.data();

                $('#editId').val(rowData.id);

                if (rowData.completetime === "") {
                    $('.edit-field').show();
                    $('.display-field').hide();
                    $('#saveChanges').show();

                    $('#editTestValue').val(rowData.testvalue);
                    fetchMethodNames(); // Call the new function to populate method names
                } else {
                    $('.edit-field').hide();
                    $('.display-field').show();
                    $('#saveChanges').hide();

                    $('#displayTestValue').text(rowData.testvalue);
                    $('#displayUnit').text(rowData.unit);
                    $('#displaymethodName').text(rowData.methodName);
                    $('#displayCompletedDate').text(rowData.completetime);
                }

                $('#editModal').modal('show');
            });

            // Handle save changes button click
            $('#saveChanges').on('click', function() {
                var id = $('#editId').val();
                var testvalue = $('#editTestValue').val();
                var methodName = $('#editmethodName').val();

                $.ajax({
                    url: '<?php echo base_url() . 'index.php/Sample/samplecontrol/update_sample_test'; ?>',
                    method: 'POST',
                    data: {
                        id: id,
                        testvalue: testvalue,
                        methodName: methodName
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            $('#editModal').modal('hide');
                            table.ajax.reload(null, false);
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });
            });

            // Add filter dropdown (unchanged)
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