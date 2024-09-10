<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url() ?>backend/index.html" class="header-logo">
            <img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
            <h5 class="logo-title light-logo ml-3">POSDash</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="<?php echo base_url() . "index.php/Userpanel/index" ?>" class="svg-icon">
                        <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4"> Dashboards </span>
                    </a>
                </li>

                <?php
                $icons = [
                    'bx bxs-leaf',
                    'bx bxs-hot',
                    'bx bx-wind',
                    'bx bxs-trash',
                    // Add more icon classes as needed
                ];
                $indexicon = -1;
                foreach ($mainMenu as $row) {
                    $indexicon++;
                ?>
                    <li class=" ">
                        <a href="#Menu<?php echo  $row->menuname ?>" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class='<?php echo $icons[$indexicon] ?>'></i>
                            <span class="ml-4"><?php echo  $row->menuname ?></span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline>
                                <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>

                        <ul id="Menu<?php echo  $row->menuname ?>" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <?php foreach ($row->submenu as $rowsub) {

                            ?>
                                <li class="">
                                    <?php
                                    $pattern = "/http/";

                                    if (preg_match($pattern, $rowsub->menufunction)) {
                                    ?>

                                        <a href="<?php echo  $rowsub->menufunction; ?>">

                                        <?php
                                    } else {

                                        ?>

                                            <a href="<?php echo base_url() . "index.php/" . $rowsub->menufunction; ?>">

                                            <?php
                                        }
                                            ?>

                                            <i class="las la-minus"></i><span><?php echo $rowsub->menuname ?></span>
                                            </a>
                                </li>
                            <?php }
                            ?>

                        </ul>


                    </li>
                <?php

                }
                ?>

            </ul>
        </nav>
    </div>
</div>
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="<?php echo base_url() ?>backend/index.html" class="header-logo">

                    <h5 class="logo-title ml-3">Science-Center</h5>

                </a>
            </div>
            <div class="iq-search-bar device-search">
                <form action="#" class="searchbox">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    <input type="text" class="text search-input" placeholder="Search here...">
                </form>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">



                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo $userdetail[0]->profile_picture  ?>" class="img-fluid rounded" alt="user">
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 text-center">
                                        <div class="media-body profile-detail text-center">
                                            <img src="<?php echo base_url() ?>assets/images/page-img/profile-bg.jpg" alt="profile-bg" class="rounded-top img-fluid mb-4">
                                            <img src="<?php echo $userdetail[0]->profile_picture  ?>" alt="profile-img" class="rounded profile-img img-fluid avatar-70">
                                        </div>
                                        <div class="p-3">
                                            <!-- <h5 class="mb-1"><?php print_r($userdetail) ?></h5> -->
                                            <h5 class="mb-1"><?php echo $userdetail[0]->email ?></h5>
                                            <h5 class="mb-1"><?php echo $userdetail[0]->gf_name . " " . $userdetail[0]->gl_name ?></h5>
                                            <p class="mb-0"><?php echo $userdetail[0]->created_at ?></p>
                                            <div class="d-flex align-items-center justify-content-center mt-3">
                                                <a href="<?php echo base_url() ?>index.php/login/login" class="btn border mr-2">Profile</a>
                                                <a href="<?php echo base_url() ?>index.php/login/logout" class="btn border">Sign Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>