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
require 'forestry/modal_add.php';
require 'forestry/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Forestry Activity </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-record"><a href="#" class="breadcrumb-link">Dashboard > Forestry Activity</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'forestry/status.php';
?>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Forestry Activity</h5>
                            <div class="card-body">

                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount Issued in <?php echo date('Y') ?> <span class="badge badge-primary">
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
                                                <th>ID</th>
                                                <th>Forestry Manager</th>
                                                <th>Permit Area</th>
                                                <th>Issue Date</th>
                                                <th>Expiry Date</th>
                                                <th>Convergence</th>
                                                <th>Convergence Cost</th>
                                                <th>Permit Cost</th>
                                                <th>Amount Issued</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($activity as $record) {

    $url_delete = base_url('ForestryActivity/delete_permission/' . $record->forestry_activity_id);

    echo "
                                                        <tr>
                                                            <td>$record->forestry_activity_id</td>
                                                            <td>$record->name</td>
                                                            <td>$record->permit_area</td>
                                                            <td>$record->date_issue</td>
                                                            <td>$record->date_expire</td>
                                                            <td>$record->convergence</td>
                                                            <td>$record->cost_convergence</td>
                                                            <td>$record->cost_permit</td>
                                                            <td>$record->amount_recieved</td>
                                                            <td>
                                                            <a style='margin-right: 10px;' title='Edit'
                                                             href='' class='link edit_forestry_link' data-toggle='modal' data-target='#edit_forestry' title='Edit'
                                                            data-forestry_activity_id='$record->forestry_activity_id' data-permit_area='$record->permit_area'
                                                            data-date_issue='$record->date_issue' data-date_expire='$record->date_expire'
                                                            data-convergence='$record->convergence' data-cost_convergence='$record->cost_convergence'
                                                            data-cost_permit='$record->cost_permit' data-amount_recieved='$record->amount_recieved'>
                                                            <span class='badge badge-warning'>
                                                            <i class='fas fa-edit'></i>
                                                            Edit</span></a>
                                                            <a href=$url_delete class='link' data-toggle='tooltip' title='Delete'>
                                                            <span class='badge badge-danger'>
                                                            <i class='fas fa-trash-alt'></i>
                                                            Delete</span</a>
                                                             </td>
                                                        </tr>
                                                    ";
}
?>
</tbody><tfoot>
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

    $('#table').DataTable();

    $('#table').on('click', '.edit_forestry_link', function() {

        // update form action
        forestry_activity_id = $(this).data('forestry_activity_id');
        form = $('#edit_forestry_form');
        form.attr('action', form.attr('action') + forestry_activity_id);

        // retrieve details
        $('#permit_area').val($(this).data('permit_area'));
        $('#date_issue').val($(this).data('date_issue'));
        $('#date_expire').val($(this).data('date_expire'));
        $('#convergence').val( $(this).data('convergence'));
        $('#cost_convergence').val($(this).data('cost_convergence'));
        $('#cost_permit').val($(this).data('cost_permit'));
        $('#amount_recieved').val($(this).data('amount_recieved'));
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Amount Issued in January', $('#piechart_3d').data('jan_total_amount')],
          ['Total Amount Issued in February', $('#piechart_3d').data('feb_total_amount')],
          ['Total Amount Issued in March', $('#piechart_3d').data('mar_total_amount')],
          ['Total Amount Issued in April', $('#piechart_3d').data('apr_total_amount')],
          ['Total Amount Issued in May', $('#piechart_3d').data('may_total_amount')],
          ['Total Amount Issued in June', $('#piechart_3d').data('jun_total_amount')],
          ['Total Amount Issued in July', $('#piechart_3d').data('jul_total_amount')],
          ['Total Amount Issued in August', $('#piechart_3d').data('aug_total_amount')],
          ['Total Amount Issued in September', $('#piechart_3d').data('sep_total_amount')],
          ['Total Amount Issued in October', $('#piechart_3d').data('oct_total_amount')],
          ['Total Amount Issued in November', $('#piechart_3d').data('nov_total_amount')],
          ['Total Amount Issued in December', $('#piechart_3d').data('dec_total_amount')],
        ]);

        var options = {
          title: 'Money recorded per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
      $(window).resize(function(){
        drawChart();
        });
</script>
</body>
</html>