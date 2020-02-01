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
require 'transport_activity/modal_add.php';
require 'transport_activity/modal_view.php';
require 'transport_activity/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Transport Activity </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-record"><a href="#" class="breadcrumb-link">Dashboard > Transport Activity</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'transport_activity/status.php';
?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Transport Activity</h5>
                            <div class="card-body">
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Expenses in <?php echo date('Y') ?> <span class="badge badge-primary">
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
<br/><br/>

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
                                                <th>RecordID</th>
                                                <th>Transport Manager</th>
                                                <th>Truck no.</th>
                                                <th>Driver name</th>
                                              
                                                <th>Loaded at</th>
                                                <th>Offloaded at</th>
                                                <th>Total Expenses</th>
                                                <th>Recorded at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($activity as $record) {

    $url_delete = base_url('TransportActivity/delete_permission/' . $record->transport_activity_id);

    echo "
                                                        <tr>
                                                            <td>$record->transport_activity_id</td>
                                                            <td>$record->name</td>
                                                            <td>$record->truck_no</td>
                                                            <td>$record->driver_name</td>
                                                          
                                                            <td>$record->loading_place</td>
                                                            <td>$record->offloading_place</td>
                                                            <td>$record->total_expenses</td>
                                                            <td>$record->created_at</td>
                                                            <td>
                                                            <a   href='' style='margin-right: 10px;' class='link view_stock' data-toggle='modal' data-target='#view_stock' title='View'
                                                            data-truck_no='$record->truck_no' data-driver_name='$record->driver_name' 
                                                            data-driver_no='$record->driver_no' data-driver_license_no='$record->driver_license_no'
                                                            data-container_no='$record->container_no' data-container_no2='$record->container_no2' 
                                                            data-shipping_line='$record->shipping_line' data-offloading_place='$record->offloading_place' 
                                                            data-picking_place='$record->picking_place'
                                                            data-loading_place='$record->loading_place' data-total_tpt='$record->total_tpt' 
                                                            data-advance='$record->advance' data-balance='$record->balance'
                                                            data-payment_mode='$record->payment_mode' data-delivery='$record->delivery' 
                                                            data-balance_paid_by='$record->balance_paid_by'
                                                            data-road_expenses='$record->road_expenses'
                                                            data-council_ticket='$record->council_ticket'
                                                            data-total_expenses='$record->total_expenses'>
                                                            <span class='badge badge-success'>
                                                            <i class='fas fa-eye'></i>
                                                            View</span></a>
                                                           
                                                             </td>
                                                        </tr>
                                                    ";
}
?>
</tbody>
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
    
    $('#pdf').on('click',function(){
        $('#table').tableExport({type:'pdf', fileName: 'report', 
        displayTableName: true, tableName: 'OCTAPARK BOOKINGS REPORT'});
    });
   
    $('#excel').on('click',function(){
        $('#table').tableExport({type:'excel', fileName: 'report', });
    });

    $('#doc').on('click',function(){
        $('#table').tableExport({type:'doc', fileName: 'report', });
    });

    $('#table').on('click', '.view_stock', function() {

        // update form action
        transport_activity_id = $(this).data('transport_activity_id');
        form = $('#view_stock_form');
        form.attr('action', form.attr('action') + transport_activity_id);

        // retrieve details
        $('#truck_no').val($(this).data('truck_no'));
        $('#driver_name').val($(this).data('driver_name'));
        $('#driver_no').val($(this).data('driver_no'));
        $('#driver_license_no').val($(this).data('driver_license_no'));
        $('#container_no').val( $(this).data('container_no'));
        $('#container_no2').val($(this).data('container_no2'));
        $('#shipping_line').val($(this).data('shipping_line'));
        $('#offloading_place').val($(this).data('offloading_place'));
        $('#picking_place').val($(this).data('picking_place'));
        $('#loading_place').val($(this).data('loading_place'));
        $('#total_tpt').val($(this).data('total_tpt'));
        $('#advance').val($(this).data('advance'));
        $('#balance').val($(this).data('balance'));
        $('#payment_mode').val($(this).data('payment_mode'));
        $('#delivery').val($(this).data('delivery'));
        $('#balance_paid_by').val($(this).data('balance_paid_by'));
        $('#road_expenses').val($(this).data('road_expenses'));
        $('#council_ticket').val($(this).data('council_ticket'));
        $('#total_expenses').val($(this).data('total_expenses'));
    });

    $('#table').on('click', '.edit_stock_link', function() {

        // update form action
        transport_activity_id = $(this).data('transport_activity_id');
        form = $('#edit_stock_form');
        form.attr('action', form.attr('action') + transport_activity_id);

        // retrieve details
        $('#edit_truck_no').val($(this).data('truck_no'));
        $('#edit_driver_name').val( $(this).data('driver_name'));
        $('#edit_driver_no').val($(this).data('driver_no'));
        $('#edit_driver_license_no').val( $(this).data('driver_license_no'));
        $('#edit_container_no').val($(this).data('container_no'));
        $('#edit_container_no2').val($(this).data('container_no2'));
        $('#edit_shipping_line').val( $(this).data('shipping_line'));
        $('#edit_offloading_place').val($(this).data('offloading_place'));
        $('#edit_picking_place').val($(this).data('picking_place'));
        $('#edit_loading_place').val( $(this).data('loading_place'));
        $('#edit_total_tpt').val($(this).data('total_tpt'));
        $('#edit_advance').val($(this).data('advance'));
        $('#edit_balance').val($(this).data('balance'));
        $('#edit_payment_mode').val($(this).data('payment_mode'));
        $('#edit_delivery').val( $(this).data('delivery'));
        $('#edit_balance_paid_by').val($(this).data('balance_paid_by'));
        $('#edit_road_expenses').val($(this).data('road_expenses'));
        $('#edit_council_ticket').val($(this).data('council_ticket'));
        $('#edit_total_expenses').val( $(this).data('total_expenses'));
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
          ['Total Expenses in January', $('#piechart_3d').data('jan_total_amount')],
          ['Total Expenses in February', $('#piechart_3d').data('feb_total_amount')],
          ['Total Expenses in March', $('#piechart_3d').data('mar_total_amount')],
          ['Total Expenses in April', $('#piechart_3d').data('apr_total_amount')],
          ['Total Expenses in May', $('#piechart_3d').data('may_total_amount')],
          ['Total Expenses in June', $('#piechart_3d').data('jun_total_amount')],
          ['Total Expenses in July', $('#piechart_3d').data('jul_total_amount')],
          ['Total Expenses in August', $('#piechart_3d').data('aug_total_amount')],
          ['Total Expenses in September', $('#piechart_3d').data('sep_total_amount')],
          ['Total Expenses in October', $('#piechart_3d').data('oct_total_amount')],
          ['Total Expenses in November', $('#piechart_3d').data('nov_total_amount')],
          ['Total Expenses in December', $('#piechart_3d').data('dec_total_amount')],
        ]);

        var options = {
          title: 'Expenses recorded per month in ' + new Date().getFullYear(),
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