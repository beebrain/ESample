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



        <div class="content-page">

            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">User List</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive rounded mb-3">
                            <table id="datatable" class="data-tables table mb-0 tbl-server-info">
                                <thead class="bg-white text-uppercase">
                                    <tr class="ligth ligth-data">
                                        <th>Uid</th>
                                        <th>email</th>
                                        <th>gf_name</th>
                                        <th>gl_name</th>
                                        <th>thai_name</th>
                                        <th>thai_lastname</th>
                                        <th>phone</th>
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
    <script src="<?php echo base_url() ?>/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="<?php echo base_url() ?>/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            // load_data();
            var ajax_url = "<?php echo base_url() . "index.php/User/UserControl/get_datauser" ?>";
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
                        "data": "uid"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "gf_name"
                    },
                    {
                        "data": "gl_name"
                    },
                    {
                        "data": "thai_name"
                    },
                    {
                        "data": "thai_lastname"
                    },
                    {
                        "data": "phone"
                    }
                ]

            });

        });
    </script>


    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>






</body>

</html>