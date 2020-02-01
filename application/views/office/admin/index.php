<!doctype html>
<html lang="en">

<?php
require 'dashboard_header.php';
?>
<body>
    <div class="dashboard-main-wrapper">

       <?php
require 'dashboard_navigation.php';
require 'dashboard_sidebar.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content" >
            <?php
require 'status.php';
?>
                <div class="row"  style="margin-bottom: 60px">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Dashboard </h2>
                                    <p class="pageheader-text"></p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-columns">
                                    <a href="<?php echo base_url('OfficeAdmin/staff') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/members.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Staff</h3>
                                            <p class="card-text">Manage aims workers</p>

                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/accounts_section') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/accounts.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Accounting</h3>
                                            <p class="card-text">Manage accounts</p>

                                        </div>
                                    </div>
                                    </a>

                                    <a href="<?php echo base_url('OfficeAdmin/salary') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/salary.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Salary</h3>
                                            <p class="card-text">View salary records</p>

                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/logs') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/stock.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Logs</h3>
                                            <p class="card-text">Manage logs</p>

                                        </div>
                                    </div>
                                    </a>

                                    <a href="<?php echo base_url('OfficeAdmin/consumers') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/buyer.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Buyers</h3>
                                            <p class="card-text">Manage buyers</p>

                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/sawmills') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/sawmill.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Sawmill</h3>
                                            <p class="card-text">Manage sawmill</p>

                                        </div>
                                    </div>
                                    </a>

                                </div>
                            </div>

                        <div class="row" style="margin-left: 0px">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-columns">

                                <a href="<?php echo base_url('OfficeAdmin/transport_activity') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/loading.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Transport</h3>
                                            <p class="card-text">Transport activities</p>

                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/forestry_activity') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/forestry.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Forestry</h3>
                                            <p class="card-text">Forestry activities</p>
                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/packing_list_section') ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/packing.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Packing</h3>
                                            <p class="card-text">View packing records</p>

                                        </div>
                                    </div>
                                    </a>


                                </div>
                                <div class="card-columns">

 <a href="<?php echo base_url('OfficeAdmin/shipping_activity') ?>">
     <div class="card" style=" padding: 10px 10px 10px 10px; ">
         <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/shipping.png'); ?>" alt="Card image cap">
         <div class="card-body">
             <h3 class="card-title">Shipping</h3>
             <p class="card-text">Shipping activities</p>
         </div>
     </div>
     </a>
     <a href="<?php echo base_url('OfficeAdmin/foreman_staff'); ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/foreman_staff.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Foremen Staff</h3>
                                            <p class="card-text">View staff, comments</p>

                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/faq'); ?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px; ">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/faq-icon.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">FAQs</h3>
                                            <p class="card-text">Check out FAQs</p>

                                        </div>
                                    </div>
                                    </a>
 </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
  <?php
include 'dashboard_footer.php';
?>
</body>

</html>
