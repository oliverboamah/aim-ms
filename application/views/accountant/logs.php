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
                                    <h2 class="pageheader-title">Logs </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Logs</a></li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card">
                    <div class="tab-outline" >
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="tab-outline-one" data-toggle="tab" href="#outline-one" role="tab" aria-controls="home" aria-selected="true">Summary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-outline-two" data-toggle="tab" href="#outline-two" role="tab" aria-controls="profile" aria-selected="false">List</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2" style="padding: 12px">
                                    <div class="tab-pane fade active show" id="outline-one" role="tabpanel" aria-labelledby="tab-outline-one">
                                   <h5 class="card-header">All Pieces</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $total_amount_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_total_amount
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_total_amount
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_total_amount=$jan_total_amount
                                    data-feb_total_amount=$feb_total_amount
                                    data-mar_total_amount=$mar_total_amount
                                    data-apr_total_amount=$apr_total_amount
                                    data-may_total_amount=$may_total_amount
                                    data-jun_total_amount=$jun_total_amount
                                    data-jul_total_amount=$jul_total_amount
                                    data-aug_total_amount=$aug_total_amount
                                    data-sep_total_amount=$sep_total_amount
                                    data-oct_total_amount=$oct_total_amount
                                    data-nov_total_amount=$nov_total_amount
                                    data-dec_total_amount=$dec_total_amount
                                    id='piechart_3d' class='card-body'>
                                    </div>
                                    ";
?>

<h5 class="card-header">Straight Pieces</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $amount_straight_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_amount_straight
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_amount_straight
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_amount_straight=$jan_amount_straight
                                    data-feb_amount_straight=$feb_amount_straight
                                    data-mar_amount_straight=$mar_amount_straight
                                    data-apr_amount_straight=$apr_amount_straight
                                    data-may_amount_straight=$may_amount_straight
                                    data-jun_amount_straight=$jun_amount_straight
                                    data-jul_amount_straight=$jul_amount_straight
                                    data-aug_amount_straight=$aug_amount_straight
                                    data-sep_amount_straight=$sep_amount_straight
                                    data-oct_amount_straight=$oct_amount_straight
                                    data-nov_amount_straight=$nov_amount_straight
                                    data-dec_amount_straight=$dec_amount_straight
                                    id='piechart_3d2' class='card-body'>
                                    </div>
                                    ";
?>

<h5 class="card-header">Bend Pieces</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $amount_bend_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_amount_bend
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_amount_bend
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_amount_bend=$jan_amount_bend
                                    data-feb_amount_bend=$feb_amount_bend
                                    data-mar_amount_bend=$mar_amount_bend
                                    data-apr_amount_bend=$apr_amount_bend
                                    data-may_amount_bend=$may_amount_bend
                                    data-jun_amount_bend=$jun_amount_bend
                                    data-jul_amount_bend=$jul_amount_bend
                                    data-aug_amount_bend=$aug_amount_bend
                                    data-sep_amount_bend=$sep_amount_bend
                                    data-oct_amount_bend=$oct_amount_bend
                                    data-nov_amount_bend=$nov_amount_bend
                                    data-dec_amount_bend=$dec_amount_bend
                                    id='piechart_3d3' class='card-body'>
                                    </div>
                                    ";
?>

<h5 class="card-header">4FT Pieces</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $amount_feet_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_amount_feet
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_amount_feet
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_amount_feet=$jan_amount_feet
                                    data-feb_amount_feet=$feb_amount_feet
                                    data-mar_amount_feet=$mar_amount_feet
                                    data-apr_amount_feet=$apr_amount_feet
                                    data-may_amount_feet=$may_amount_feet
                                    data-jun_amount_feet=$jun_amount_feet
                                    data-jul_amount_feet=$jul_amount_feet
                                    data-aug_amount_feet=$aug_amount_feet
                                    data-sep_amount_feet=$sep_amount_feet
                                    data-oct_amount_feet=$oct_amount_feet
                                    data-nov_amount_feet=$nov_amount_feet
                                    data-dec_amount_feet=$dec_amount_feet
                                    id='piechart_3d4' class='card-body'>
                                    </div>
                                    ";
?>
                                    </div>
                                    <div class="tab-pane fade" id="outline-two" role="tabpanel" aria-labelledby="tab-outline-two">
                                
                           <br/>
                        
                                    <!-- Export Data -->
                                    <div class="dropdown ml-auto show" style="float: right;">
                             <span id="dropdownMenuLink" href="#" class="badge badge-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Export Data</span><br/><br/>
                               
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-160px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a id="pdf" class="dropdown-item" href="#">PDF</a>
                                                <a id="excel" class="dropdown-item" href="#">Excel</a>
                                                <a id="doc" class="dropdown-item" href="#">Doc</a>
                                </div>
                            </div>

                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th>SN</th>
                                                <th>Supplier Rep</th>
                                                <th>Supplier </th>
                                                <th>Total Logs</th>
                                                <th>Straight Amount</th>
                                                <th>Bend Amount</th>
                                                <th>4FT Amount</th>
                                                <th>Total Amount</th>
                                                <th>Date of Stock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
foreach ($log_info as $record) {

    $url_view = base_url('OfficeAdmin/logs_item/' . $record->log_info_id);
    $url_delete = base_url('Logs/delete_permission/' . $record->log_info_id);

    echo "
            <tr>
            <td>$record->log_info_id</td>
            <td>$record->supplier_rep</td>
            <td>$record->supplier</td>
            <td>$record->total_logs</td>
            <td>$record->amount_straight</td>
            <td>$record->amount_bend</td>
            <td>$record->amount_feet</td>
            <td>$record->total_amount</td>
            <td>$record->date_of_stock</td>
                <td>
                <a href=$url_view class='link' data-toggle='tooltip' title='View'>
                <span class='badge badge-success'>
                <i class='fas fa-eye'></i>
                View</span</a>
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
                </div>
            </div>

<?php
include 'dashboard_footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Amount in January', $('#piechart_3d').data('jan_total_amount')],
          ['Total Amount in February', $('#piechart_3d').data('feb_total_amount')],
          ['Total Amount in March', $('#piechart_3d').data('mar_total_amount')],
          ['Total Amount in April', $('#piechart_3d').data('apr_total_amount')],
          ['Total Amount in May', $('#piechart_3d').data('may_total_amount')],
          ['Total Amount in June', $('#piechart_3d').data('jun_total_amount')],
          ['Total Amount in July', $('#piechart_3d').data('jul_total_amount')],
          ['Total Amount in August', $('#piechart_3d').data('aug_total_amount')],
          ['Total Amount in September', $('#piechart_3d').data('sep_total_amount')],
          ['Total Amount in October', $('#piechart_3d').data('oct_total_amount')],
          ['Total Amount in November', $('#piechart_3d').data('nov_total_amount')],
          ['Total Amount in December', $('#piechart_3d').data('dec_total_amount')],
        ]);

        var options = {
          title: 'Amount recorded per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Amount in January', $('#piechart_3d2').data('jan_amount_straight')],
          ['Total Amount in February', $('#piechart_3d2').data('feb_amount_straight')],
          ['Total Amount in March', $('#piechart_3d2').data('mar_amount_straight')],
          ['Total Amount in April', $('#piechart_3d2').data('apr_amount_straight')],
          ['Total Amount in May', $('#piechart_3d2').data('may_amount_straight')],
          ['Total Amount in June', $('#piechart_3d2').data('jun_amount_straight')],
          ['Total Amount in July', $('#piechart_3d2').data('jul_amount_straight')],
          ['Total Amount in August', $('#piechart_3d2').data('aug_amount_straight')],
          ['Total Amount in September', $('#piechart_3d2').data('sep_amount_straight')],
          ['Total Amount in October', $('#piechart_3d2').data('oct_amount_straight')],
          ['Total Amount in November', $('#piechart_3d2').data('nov_amount_straight')],
          ['Total Amount in December', $('#piechart_3d2').data('dec_amount_straight')],
        ]);

        var options = {
          title: 'Amount recorded per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }

      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Amount in January', $('#piechart_3d3').data('jan_amount_bend')],
          ['Total Amount in February', $('#piechart_3d3').data('feb_amount_bend')],
          ['Total Amount in March', $('#piechart_3d').data('mar_amount_bend')],
          ['Total Amount in April', $('#piechart_3d3').data('apr_amount_bend')],
          ['Total Amount in May', $('#piechart_3d3').data('may_amount_bend')],
          ['Total Amount in June', $('#piechart_3d3').data('jun_amount_bend')],
          ['Total Amount in July', $('#piechart_3d3').data('jul_amount_bend')],
          ['Total Amount in August', $('#piechart_3d3').data('aug_amount_bend')],
          ['Total Amount in September', $('#piechart_3d3').data('sep_amount_bend')],
          ['Total Amount in October', $('#piechart_3d3').data('oct_amount_bend')],
          ['Total Amount in November', $('#piechart_3d3').data('nov_amount_bend')],
          ['Total Amount in December', $('#piechart_3d3').data('dec_amount_bend')],
        ]);

        var options = {
          title: 'Amount recorded per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
        chart.draw(data, options);
      }

      function drawChart4() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Amount in January', $('#piechart_3d4').data('jan_amount_feet')],
          ['Total Amount in February', $('#piechart_3d4').data('feb_amount_feet')],
          ['Total Amount in March', $('#piechart_3d4').data('mar_amount_feet')],
          ['Total Amount in April', $('#piechart_3d4').data('apr_amount_feet')],
          ['Total Amount in May', $('#piechart_3d4').data('may_amount_feet')],
          ['Total Amount in June', $('#piechart_3d4').data('jun_amount_feet')],
          ['Total Amount in July', $('#piechart_3d4').data('jul_amount_feet')],
          ['Total Amount in August', $('#piechart_3d4').data('aug_amount_feet')],
          ['Total Amount in September', $('#piechart_3d4').data('sep_amount_feet')],
          ['Total Amount in October', $('#piechart_3d4').data('oct_amount_feet')],
          ['Total Amount in November', $('#piechart_3d4').data('nov_amount_feet')],
          ['Total Amount in December', $('#piechart_3d4').data('dec_amount_feet')],
        ]);

        var options = {
          title: 'Amount recorded per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d4'));
        chart.draw(data, options);
      }

      $(window).resize(function(){
        drawChart();
        drawChart2();
        drawChart3();
        drawChart4();
      });


</script>
<script type="text/javascript">
$(document).ready( function() {

    var $eventLog = $(".js-event-log");
    var $eventSelect = $(".js-example-events");
    var $eventSelect2 = $(".js-example-events2");
    var $eventSelect3 = $(".js-example-events3");

    selection($eventSelect);
    selection($eventSelect2);
    selection($eventSelect3);

 function selection($eventSelect){

    $.fn.select2.defaults.set("width", "100%");
    $eventSelect.on("select2:open", function (e) { log("select2:open", e); });
    $eventSelect.on("select2:close", function (e) { log("select2:close", e); });
    $eventSelect.on("change", function (e) { log("change"); });

    $eventSelect.on("select2:select", function (e) {
	    log("select2:select", e);
    $eventSelect.append('<option value="'+e.params.data.text+'">' +e.params.data.text + '</option>');
    });
    $eventSelect.on("select2:unselect", function (e) {
	    log("select2:unselect", e);
 	    e.params.data.element.remove();
    });

    $eventSelect.select2({
    templateResult: formatResultData,
    tags: true}
    );
 }

function log (name, evt) {
  if (!evt) {
    var args = "{}";
  } else {
    var args = JSON.stringify(evt.params, function (key, value) {
      if (value && value.nodeName) return "[DOM node]";
      if (value instanceof $.Event) return "[$.Event]";
      return value;
    });
  }
  var $e = $("<li>" + name + " -> " + args + "</li>");
  $eventLog.append($e);
  $e.animate({ opacity: 1 }, 50000, 'linear', function () {
    $e.animate({ opacity: 0 }, 2000, 'linear', function () {
      $e.remove();
    });
  });
}

function formatResultData (data) {
  if (!data.id) return data.text;
  if (data.element.selected) return
  return data.text;
};

    $('#table').DataTable();

    $('#table').on('click', '.view_stock', function() {

        // update form action
        stock_id = $(this).data('stock_id');
        form = $('#view_stock_form');
        form.attr('action', form.attr('action') + stock_id);

        // retrieve details
        $('#supplier_name').val('Supplier`s company name: ' + " " + $(this).data('supplier_name'));
        $('#supplier_rep').val('Supplier`s rep:' +  " " + $(this).data('supplier_rep'));
        $('#supplier_contact').val('Supplier`s contact:' + " " + $(this).data('supplier_contact'));
        $('#supplier_address').val('Supplier`s address:' + " " + $(this).data('supplier_address'));
        $('#staff_name').val('Staff Member InCharge name: ' + " " + $(this).data('staff_name'));
        $('#staff_department').val('Staff Member InCharge department: ' + " " + $(this).data('staff_department'));
        $('#girth_range').val('Girth Range: ' + " " + $(this).data('girth_range'));
        $('#num_pieces').val('Total Number of Pieces: ' + " " + $(this).data('num_pieces'));
        $('#num_bend').val('Number of Bend: ' + " " + $(this).data('num_bend'));
        $('#num_short_len').val('Number of Short Length: ' + " " + $(this).data('num_short_len'));
        $('#num_full_len').val('Number of Full Length: ' + " " + $(this).data('num_full_len'));
        $('#price_bend').val('Price of Bend: ' + " " + $(this).data('price_bend'));
        $('#price_short_len').val('Price of Short Length: ' + " " + $(this).data('price_short_len'));
        $('#price_full_len').val('Price of Full Length: ' + " " + $(this).data('price_full_len'));
        $('#total_amount').val('Total Amount: ' + " " + $(this).data('total_amount'));
        $('#date_of_stock').val('Date of Stock: ' + " " + $(this).data('date_of_stock'));
    });

    $('#table').on('click', '.edit_stock_link', function() {

        // update form action
        stock_id = $(this).data('stock_id');
        form = $('#edit_stock_form');
        form.attr('action', form.attr('action') + stock_id);

        // retrieve details
        $('#edit_supplier').val($(this).data('supplier'));
        $('#edit_supplier_rep').val($(this).data('supplier_rep'));
        $('#edit_supplier_contact').val($(this).data('supplier_contact'));
        $('#edit_supplier_address').val($(this).data('supplier_address'));
        $('#edit_staff_name').val( $(this).data('staff_name'));
        $('#edit_staff_department').val($(this).data('staff_department'));
        $('#edit_girth_start').val($(this).data('girth_start'));
        $('#edit_girth_end').val($(this).data('girth_end'));
        $('#edit_num_pieces').val($(this).data('num_pieces'));
        $('#edit_num_bend').val($(this).data('num_bend'));
        $('#edit_num_short_len').val($(this).data('num_short_len'));
        $('#edit_num_full_len').val($(this).data('num_full_len'));
        $('#edit_price_bend').val($(this).data('price_bend'));
        $('#edit_price_short_len').val( $(this).data('price_short_len'));
        $('#edit_price_full_len').val($(this).data('price_full_len'));
        $('#edit_total_amount').val($(this).data('total_amount'));
        $('#edit_date_of_stock').val($(this).data('date_of_stock'));
    });

    $('#pdf').on('click',function(){
        $('#table').tableExport({type:'pdf', fileName: 'report', 
        displayTableName: true, tableName: 'REPORT'});
    });
   
    $('#excel').on('click',function(){
        $('#table').tableExport({type:'excel', fileName: 'report', });
    });

    $('#doc').on('click',function(){
        $('#table').tableExport({type:'doc', fileName: 'report', });
    });
});
</script>

</body>
</html>