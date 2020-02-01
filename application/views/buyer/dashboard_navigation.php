<?php

include 'check_staff_login.php';

$name = $this->session->userdata('name');
$image = ($this->session->userdata('image'));
?>
<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?php echo base_url('BuyerDashboard/') ?>">
                AIM - MS
                </a>
                <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                    <span>
                    <img src="<?php echo $image; ?>" alt="" class="user-avatar-md rounded-circle">
                    </span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url($image); ?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $name ?></h5>
                                </div>
                                <a class="dropdown-item" href="<?php echo base_url('BuyerDashboard/logout') ?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
</div>