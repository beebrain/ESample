<div class="iq-navbar-custom">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <i class="ri-menu-line wrapper-menu"></i>
            <a href="../backend/index.html" class="header-logo">
                <img src="<?php echo base_url() ?>/assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                <h5 class="logo-title ml-3">Lass Carbon</h5>

            </a>
        </div>
        <div class="iq-search-bar device-search">
            <!-- <form action="#" class="searchbox">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" class="text search-input" placeholder="Search here...">
            </form> -->
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                    <li class="nav-item nav-icon dropdown show">
                        <a href="#" class="search-toggle dropdown-toggle btn border add-btn" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span>หน่วยงาน <?php echo $dastadetail->name; ?></span>
                        </a>
                    </li>

                    <?php
                    if ($userdetail[0]->bpt == 1) {
                    ?>
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle btn border add-btn" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                เลือกพื้นที่บริการ
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-3">

                                        <?php
                                        foreach ($dasta as $key => $value) {
                                        ?>
                                            <a class="iq-sub-card" href="<?php echo base_url() ?>index.php/utility/menuController/changedastaid/<?php echo $value->dastaid ?>"><?php echo $value->name ?></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php  }
                    ?>
                    <li class="nav-item nav-icon dropdown caption-content">
                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo base_url() ?>/assets/images/user/1.png" class="img-fluid rounded" alt="user">
                        </a>
                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="card shadow-none m-0">
                                <div class="card-body p-0 text-center">
                                    <div class="media-body profile-detail text-center">
                                        <img src="<?php echo base_url() ?>/assets/images/page-img/profile-bg.jpg" alt="profile-bg" class="rounded-top img-fluid mb-4">
                                        <img src="<?php echo base_url() ?>/assets/images/user/1.png" alt="profile-img" class="rounded profile-img img-fluid avatar-70">
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-1"><?php echo $userdetail[0]->firstname . " " . $userdetail[0]->lastname ?></h5>
                                        <p class="mb-0"><?php echo  $userdetail[0]->email ?></p>
                                        <p class="mb-0"><?php echo  $userdetail[0]->name ?></p>
                                        <div class="d-flex align-items-center justify-content-center mt-3">
                                            <a href="<?php echo base_url() ?>index.php/Login/logout" class="btn border">Sign Out</a>
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