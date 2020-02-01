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
require 'log/modal_add.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Logs Item</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Logs > Logs Item</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'log/status.php';
?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Straight Pieces</h5>
                            <div class="card-body">
                            <h5 style="float: left">Total Logs: <span class="text-muted">
                            <?php echo $log_info->num_straight; ?></span></h5>
                            <h5 style="float: right">Total Sum: <span class="text-muted">
                            <?php echo $log_info->amount_straight; ?></span></h5>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Range</th>
                                                <th>Logs</th>
                                                <th>Price</th>
                                                <th>Sum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php

    foreach ($log_straight_info as $record) {
        echo "
            <tr>
            <td>$record->log_straight_id</td>
            <td>$record->range</td>
            <td>$record->num_logs</td>
            <td>$record->price</td>
            <td>$record->amount</td>
            </tr>
    ";
    }
?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Bend Pieces</h5>
                            <div class="card-body">
                            <h5 style="float: left">Total Logs: <span class="text-muted">
                            <?php echo $log_info->num_bend; ?></span></h5>
                            <h5 style="float: right">Total Sum: <span class="text-muted">
                            <?php echo $log_info->amount_bend; ?></span></h5>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Range</th>
                                                <th>Logs</th>
                                                <th>Price</th>
                                                <th>Sum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php

    foreach ($log_bend_info as $record) {
        echo "
            <tr>
            <td>$record->log_bend_id</td>
            <td>$record->range</td>
            <td>$record->num_logs</td>
            <td>$record->price</td>
            <td>$record->amount</td>
            </tr>
    ";
    }
?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">4FT Pieces</h5>
                            <div class="card-body">
                            <h5 style="float: left">Total Logs: <span class="text-muted">
                            <?php echo $log_info->num_feet; ?></span></h5>
                            <h5 style="float: right">Total Sum: <span class="text-muted">
                            <?php echo $log_info->amount_feet; ?></span></h5>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Range</th>
                                                <th>Logs</th>
                                                <th>Price</th>
                                                <th>Sum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php

    foreach ($log_feet_info as $record) {
        echo "
            <tr>
            <td>$record->log_feet_id</td>
            <td>$record->range</td>
            <td>$record->num_logs</td>
            <td>$record->price</td>
            <td>$record->amount</td>
            </tr>
    ";
    }
?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
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
<script type="text/javascript">
$(document).ready( function() {
   // $('#table').DataTable();  
});
</script>
</body>
</html>