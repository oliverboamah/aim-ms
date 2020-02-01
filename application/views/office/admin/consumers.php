<!doctype html>
<html lang="en">

<?php
require 'dashboard_header.php';
?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

       <?php
require 'dashboard_navigation.php';
require 'dashboard_sidebar.php';
?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
     
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Buyers Section </h2>
                                    <p class="pageheader-text"></p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Select section</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-columns">
                                  
                                    <a href="<?php echo base_url('OfficeAdmin/consumers_profile') ?>">
                                    <div class="card bg-secondary text-white text-center p-3">
                                        <blockquote class="blockquote mb-0">
                                            <p>Buyers Profile</p>
                                        </blockquote>
                                        <i>[Manage buyers profile]</i>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('OfficeAdmin/consumers_activity') ?>">
                                    <div class="card bg-primary text-white text-center p-3">
                                    <blockquote class="blockquote mb-0">
                                            <p>Buyers Activity</p>
                                        </blockquote>
                                        <i>[View buyers activity]</i>
                                    </div>
                                    </a>

                                </div>
                            </div>

                        </div>
         
    
                     

                    </div>
                  
                </div>
            </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
  <?php
include 'dashboard_footer.php';
?>
</body>

</html>