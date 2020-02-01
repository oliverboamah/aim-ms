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
                                    <h2 class="pageheader-title">Frequently Asked Questions </h2>
                                    <p class="pageheader-text"></p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">FAQs</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 ">
                               <!-- Accordion -->
                               <div id="accordion3">
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingCompany">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#company" aria-expanded="false" aria-controls="company">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total company cost ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="company" class="collapse" aria-labelledby="headingCompany" data-parent="#accordion3">
                                            <div class="card-body">
                                            <b>[transport + shipping + forestry + home expenses + other expenses]</b><br/> <br/>
                                            <span><b>Company cost total: </b></span> <?php echo $total_company_expenses ?><br/>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingEight">
                                            <h5 class="mb-0">
                                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                 <span class="fas fa-angle-down mr-3"></span>How much funds recorded from buyers ?
                                             </button>       </h5>
                                        </div>
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion3">
                                            <div class="card-body">
                                                <span><b>Recieved funds total: </b></span> <?php echo $recieved_funds_total ?><br/>
                                                <span><b>Balance funds total: </b></span> <?php echo $balance_funds_total ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/consumers_activity'); ?>" class="btn btn-secondary">View Details</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingShipping">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#shipping" aria-expanded="false" aria-controls="shipping">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total shipping expenses ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="shipping" class="collapse" aria-labelledby="headingShipping" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Shipping expenses total: </b></span> <?php echo $total_shipping_expenses ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/shipping_activity'); ?>" class="btn btn-secondary">
                                                View Details
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingOtherExpenses">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#otherExpenses" aria-expanded="false" aria-controls="otherExpenses">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total other expenses ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="otherExpenses" class="collapse" aria-labelledby="headingOtherExpenses" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Other expenses total: </b></span> <?php echo $total_other_expenses ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/other_expenses'); ?>" class="btn btn-secondary">
                                                View Details
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingNine">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total number of staff workers ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Staff workers total: </b></span> <?php echo $total_staff_ghanaian + $total_staff_indian ?><br/>
                                            <span><b>Ghanaian Staff workers total: </b></span> <?php echo $total_staff_ghanaian ?> <br/>
                                            <span><b>Indian Staff workers total: </b></span> <?php echo $total_staff_indian ?>
                                            <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/staff'); ?>" class="btn btn-secondary">
                                                View Details
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingSalary">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#salary" aria-expanded="false" aria-controls="salary">
                                  <span class="fas fa-angle-down mr-3"></span>How much salary has been paid ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="salary" class="collapse" aria-labelledby="headingSalary" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Only Salaries paid in Cedis total: </b></span> <?php echo $total_salary_paid_cedis ?> <br/>
                                            <span><b>Only Salaries paid in Rupees total: </b></span> <?php echo $total_salary_paid_rupees ?> <br/><br/>
                                                 
                                                <a href="<?php echo base_url('OfficeAdmin/salary'); ?>" class="btn btn-secondary">View Details</a> 
                                           
                                            </div>
                                        </div>
                                    </div>
                             
                                </div>
                                <!-- Accordion -->
 </div>
 <div class="col-md-6 ">
                               <!-- Accordion -->
                               <div id="accordion3">
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingLogs">
                                            <h5 class="mb-0">
                                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#logs" aria-expanded="false" aria-controls="logs">
                                                 <span class="fas fa-angle-down mr-3"></span>How many Logs has been loaded ?
                                             </button></h5>
                                        </div>
                                        <div id="logs" class="collapse" aria-labelledby="headingLogs" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>All Logs total: </b></span> <?php echo $total_logs ?><br/>
                                            <span><b>Straight Logs total: </b></span> <?php echo $total_straight ?> <br/>
                                            <span><b>Bend Logs total: </b></span> <?php echo $total_bend ?><br/>
                                            <span><b>4Feet Logs total: </b></span> <?php echo $total_feet ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/logs'); ?>" class="btn btn-secondary">View Details</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingTransport">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#transport" aria-expanded="false" aria-controls="transport">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total transport expenses ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="transport" class="collapse" aria-labelledby="headingTransport" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Transport expenses total: </b></span> <?php echo $total_transport_expenses ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/transport_activity'); ?>" class="btn btn-secondary">View Details</a> 
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingForestry">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#forestry" aria-expanded="false" aria-controls="forestry">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total forestry expenses ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="forestry" class="collapse" aria-labelledby="headingForestry" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Forestry expenses total: </b></span> <?php echo $total_forestry_expenses ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/forestry_activity'); ?>" class="btn btn-secondary">View Details</a> 
                                            </div>
                                            </div>
                                        </div>
                                    
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingHomeExpenses">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#homeExpenses" aria-expanded="false" aria-controls="homeExpenses">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total home expenses ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="homeExpenses" class="collapse" aria-labelledby="headingHomeExpenses" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Home expenses total: </b></span> <?php echo $total_home_expenses ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/home_expenses'); ?>" class="btn btn-secondary">View Details</a> 
                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header" id="headingPermits">
                                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#permits" aria-expanded="false" aria-controls="permits">
                                  <span class="fas fa-angle-down mr-3"></span>What is the total no. of permits obtained ?
                                             </button>
                                                       </h5>
                                        </div>
                                        <div id="permits" class="collapse" aria-labelledby="headingPermits" data-parent="#accordion3">
                                            <div class="card-body">
                                            <span><b>Number of permits total: </b></span> <?php echo $total_permit ?> <br/><br/>
                                                <a href="<?php echo base_url('OfficeAdmin/forestry_activity'); ?>" class="btn btn-secondary">View Details</a> 
                                           
                                            </div>
                                        </div>
                                    </div>
                             
                             
                                <!-- Accordion -->
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
