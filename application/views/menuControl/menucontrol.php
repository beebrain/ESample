<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profiile</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class=" color-light ">

    <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">New Order</h4>
                        <div class="content create-workform bg-body">
                            <div class="pb-3">
                                <label class="mb-2">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Name or Email">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-block p-card">
                            <div class="profile-box">
                                <div class="profile-card rounded">

                                    <img src="<?php echo $userdetail[0]->profile_picture  ?>" alt="profile-bg" class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                                    <h3 class="font-600 text-white text-center mb-0" id="text_name"><?php echo $userdetail[0]->gf_name . " " . $userdetail[0]->gl_name ?></h3>

                                    <p class="text-white text-center mb-5" id="text_thainame"><?php echo $userdetail[0]->thai_name . " " . $userdetail[0]->thai_lastname ?></p>
                                </div>
                                <div class="pro-content rounded">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="p-icon mr-3">
                                            <i class="las la-envelope-open-text"></i>
                                        </div>
                                        <p class="mb-0 eml" id="text_email"><?php echo $userdetail[0]->email ?></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="p-icon  bg-danger mr-3">
                                            <i class="las la-map-marked"></i>
                                        </div>
                                        <p class="mb-0" id="text_thainame2"> <?php echo $userdetail[0]->thai_name . " " . $userdetail[0]->thai_lastname ?></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="p-icon bg-success mr-3">
                                            <i class="las la-phone"></i>
                                        </div>
                                        <p class="mb-0" id="text_phone"><?php echo $userdetail[0]->phone ?></p>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-block mb-3">
                            <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">แบบฟอร์มปรับปรุงข้อมูลผู้ใช้งาน</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="frmMain">
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col">
                                                <label>FirstName</label>
                                                <input type="text" class="form-control" readonly="true" name="FirstName" id="FirstName" placeholder="FirstName" value="<?php echo $userdetail[0]->gf_name ?>">
                                            </div>
                                            <div class="col">
                                                <label>Lastname</label>
                                                <input type="text" class="form-control" readonly="true" name="LastName" id="LastName" placeholder="Lastname" value="<?php echo $userdetail[0]->gl_name ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col">
                                                <label for="exampleInputText1">ชื่อ</label>
                                                <input type="text" class="form-control" name="thaiName" id="thaiName" placeholder="ชื่อ" value="<?php echo $userdetail[0]->thai_name ?>">
                                            </div>
                                            <div class="col">
                                                <label for="exampleInputText1">นามสกุล</label>
                                                <input type="text" class="form-control" name="thaiLast" id="thaiLast" placeholder="นามสกุล" value="<?php echo $userdetail[0]->thai_lastname ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email Input</label>
                                        <input type="email" class="form-control" id="email" name="email" readonly="true" placeholder="อีเมล" value="<?php echo $userdetail[0]->email ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword4">หมายเลขโทรศัพท์</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="หมายเลขโทรศัพท์" value="<?php echo $userdetail[0]->phone ?>">
                                    </div>
                                    <button type="button" id="saveBt" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn bg-danger">Cancel</button>
                                </form>
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
    <script src="<?php echo base_url() ?>/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="<?php echo base_url() ?>/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="<?php echo base_url() ?>/assets/js/app.js"></script>



    <script>
        $("#mainMenu").load("<?php echo base_url() . 'index.php/utility/menuController/getMainMenu'; ?>");
        // $("#topmenu").load("<?php echo base_url() . 'index.php/utility/menuController/getTopMenu'; ?>");
    </script>

    <script>
        $("#saveBt").on("click", function(e) {
            $("#saveBt").prop("disabled", true);
            var datastring = $("#frmMain").serialize();
            console.log(datastring);

            $.ajax({
                type: "POST",
                url: "<?= base_url(); ?>index.php/user/UserControl/profileUpdate",
                data: datastring,
                dataType: "json", // Set the data type so jQuery can parse it for you
                success: function(data) {
                    alert('บันทึกข้อมูลเรียบร้อยแล้ว');
                    console.log(data);
                    console.log(data["thai_name"]);
                    $("#text_name").html(data["gf_name"] + " " + data["gl_name"]);
                    $("#text_thainame").html(data["thai_name"] + " " + data["thai_lastname"]);
                    $("#text_thainame2").html(data["thai_name"] + " " + data["thai_lastname"]);
                    $("#text_email").html(data["email"]);
                    $("#text_phone").html(data["phone"]);
                    $("#saveBt").prop("disabled", false);
                }

            });


        });
    </script>


</body>

</html>