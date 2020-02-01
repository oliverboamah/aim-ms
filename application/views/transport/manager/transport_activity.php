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
require 'transport/modal_add.php';
require 'transport/modal_edit.php';
require 'transport/modal_view.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Transport </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Transport</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'transport/status.php';
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
                                   <h5 class="card-header">Total Expenses</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Expenses in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $total_expenses_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_total_expenses
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_total_expenses
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_total_expenses=$jan_total_expenses
                                    data-feb_total_expenses=$feb_total_expenses
                                    data-mar_total_expenses=$mar_total_expenses
                                    data-apr_total_expenses=$apr_total_expenses
                                    data-may_total_expenses=$may_total_expenses
                                    data-jun_total_expenses=$jun_total_expenses
                                    data-jul_total_expenses=$jul_total_expenses
                                    data-aug_total_expenses=$aug_total_expenses
                                    data-sep_total_expenses=$sep_total_expenses
                                    data-oct_total_expenses=$oct_total_expenses
                                    data-nov_total_expenses=$nov_total_expenses
                                    data-dec_total_expenses=$dec_total_expenses
                                    id='piechart_3d' class='card-body'>
                                    </div>
                                    ";
?>
                                    </div>
                                    <div class="tab-pane fade" id="outline-two" role="tabpanel" aria-labelledby="tab-outline-two">

                           <br/>
                           <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_transport">
                                Add New transport Record</button><br/><br/>
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
                                                <th>Sr. no</th>
                                                <th>Incharge</th>
                                                <th>Truck No.</th>
                                                <th>Credit</th>
                                                <th>Driver Name</th>
                                                <th>Loading Date</th>
                                                <th>Delivery</th>
                                                <th>Delivery Date</th>
                                                <th>Total Expenses</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($activity as $record) {

    $url_delete = base_url('transportActivity/delete_permission/' . $record->transport_id);

    echo "
                                                        <tr>
                                                            <td>$record->transport_id</td>
                                                            <td>$record->name</td>
                                                            <td>$record->truck_no</td>
                                                            <td>$record->credit</td>
                                                            <td>$record->driver_name</td>
                                                   
                                                            <td>$record->date_loading</td>
                                                            <td>$record->delivery</td>
                                                            <td>$record->date_delivery</td>
                                                            <td>$record->total_expenses</td>
                                                       
                                                            <td>
                                                            <a href='' style='margin-right: 10px;' class='link view_transport' data-toggle='modal' data-target='#view_transport' title='View'
                                                            data-transport_id='$record->transport_id' 
                                                            data-credit='$record->credit'
                                                            data-date_credit='$record->date_credit' 
                                                            data-credit_paid_by='$record->credit_paid_by' data-balance='$record->balance'
                                                            data-date_loading='$record->date_loading' data-container_pickup_fee='$record->container_pickup_fee' 
                                                            data-picking_place='$record->picking_place' 
                                                            data-truck_no='$record->truck_no'
                                                            data-shipping_line='$record->shipping_line'
                                                            data-container_no='$record->container_no' data-seal_no='$record->seal_no' 
                                                            data-seal_no2='$record->seal_no2' data-container_no2='$record->container_no2'
                                                            data-offloading_place='$record->offloading_place'
                                                            data-driver_name2='$record->driver_name2'
                                                            data-in_charge='$record->name'

                                                            data-driver_name='$record->driver_name'
                                                            data-driver_no='$record->driver_no'
                                                            data-in_charge='$record->name'

                                                            data-driver_license_no='$record->driver_license_no'
                                                            data-loading_place='$record->loading_place'
                                                            data-tpt_name='$record->tpt_name'

                                                            data-commission='$record->commission'
                                                            data-total_tpt='$record->total_tpt'
                                                            data-advance='$record->advance'
                                                            data-date_advance='$record->date_advance'
                                                            
                                                            data-payment_mode='$record->payment_mode'
                                                            data-extra_payment='$record->extra_payment'
                                                            data-after_loading='$record->after_loading'

                                                            data-road_expenses='$record->road_expenses'
                                                            data-date_delivery='$record->date_delivery'
                                                            data-delivery='$record->delivery'

                                                            data-balance_left='$record->balance_left'
                                                            data-balance_left_paid_by='$record->balance_left_paid_by'
                                                            data-total_expenses='$record->total_expenses'>
                                                            <span class='badge badge-success'>
                                                            <i class='fas fa-eye'></i>
                                                            View</span></a>
                                                            <a style='margin-right: 10px;' title='Edit' 
                                                             href='' class='link edit_transport_link' data-toggle='modal' data-target='#edit_transport' title='Edit'
                                                             data-transport_id='$record->transport_id' 
                                                             data-credit='$record->credit'
                                                             data-date_credit='$record->date_credit' 
                                                             data-credit_paid_by='$record->credit_paid_by' data-balance='$record->balance'
                                                             data-date_loading='$record->date_loading' data-container_pickup_fee='$record->container_pickup_fee' 
                                                             data-picking_place='$record->picking_place' 
                                                             data-truck_no='$record->truck_no'
                                                             data-shipping_line='$record->shipping_line'
                                                             data-container_no='$record->container_no' data-seal_no='$record->seal_no' 
                                                             data-seal_no2='$record->seal_no2' data-container_no2='$record->container_no2'
                                                             data-offloading_place='$record->offloading_place'
                                                             data-driver_name2='$record->driver_name2'
                                                             data-in_charge='$record->name'
 
                                                             data-driver_name='$record->driver_name'
                                                             data-driver_no='$record->driver_no'
                                                             data-in_charge='$record->name'
 
                                                             data-driver_license_no='$record->driver_license_no'
                                                             data-loading_place='$record->loading_place'
                                                             data-tpt_name='$record->tpt_name'
 
                                                             data-commission='$record->commission'
                                                             data-total_tpt='$record->total_tpt'
                                                             data-advance='$record->advance'
                                                             data-date_advance='$record->date_advance'
                                                             
                                                             data-payment_mode='$record->payment_mode'
                                                             data-extra_payment='$record->extra_payment'
                                                             data-after_loading='$record->after_loading'
 
                                                             data-road_expenses='$record->road_expenses'
                                                             data-date_delivery='$record->date_delivery'
                                                             data-delivery='$record->delivery'
 
                                                             data-balance_left='$record->balance_left'
                                                             data-balance_left_paid_by='$record->balance_left_paid_by'
                                                             data-total_expenses='$record->total_expenses'>
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


      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Expenses in January', $('#piechart_3d').data('jan_total_expenses')],
          ['Total Expenses in February', $('#piechart_3d').data('feb_total_expenses')],
          ['Total Expenses in March', $('#piechart_3d').data('mar_total_expenses')],
          ['Total Expenses in April', $('#piechart_3d').data('apr_total_expenses')],
          ['Total Expenses in May', $('#piechart_3d').data('may_total_expenses')],
          ['Total Expenses in June', $('#piechart_3d').data('jun_total_expenses')],
          ['Total Expenses in July', $('#piechart_3d').data('jul_total_expenses')],
          ['Total Expenses in August', $('#piechart_3d').data('aug_total_expenses')],
          ['Total Expenses in September', $('#piechart_3d').data('sep_total_expenses')],
          ['Total Expenses in October', $('#piechart_3d').data('oct_total_expenses')],
          ['Total Expenses in November', $('#piechart_3d').data('nov_total_expenses')],
          ['Total Expenses in December', $('#piechart_3d').data('dec_total_expenses')],
        ]);

        var options = {
          title: 'Total Expenses per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      $(window).resize(function(){
        drawChart();
      });
</script>

<script type="text/javascript">
$(document).ready( function() {

    $('#table').DataTable();

    $('#table').on('click', '.view_transport', function() {

        // update form action
        transport_id = $(this).data('transport_id');
        form = $('#view_transport_form');
        form.attr('action', form.attr('action') + transport_id);

        // retrieve details
        $('#in_charge').val($(this).data('in_charge'));
        $('#credit').val($(this).data('credit'));
        $('#date_credit').val($(this).data('date_credit'));
        $('#credit_paid_by').val($(this).data('credit_paid_by'));
        $('#balance').val( $(this).data('balance'));
        $('#date_loading').val( $(this).data('date_loading'));
        $('#container_pickup_fee').val($(this).data('container_pickup_fee'));
        $('#picking_place').val( $(this).data('picking_place'));
        $('#truck_no').val($(this).data('truck_no'));
        $('#shipping_line').val($(this).data('shipping_line'));
        $('#container_no').val($(this).data('container_no'));
        $('#seal_no').val($(this).data('seal_no'));
        $('#seal_no2').val( $(this).data('seal_no2'));
        $('#container_no2').val( $(this).data('container_no2'));
        $('#offloading_place').val($(this).data('offloading_place'));
        $('#driver_name').val($(this).data('driver_name'));
        $('#driver_name2').val( $(this).data('driver_name2'));
        $('#driver_no').val($(this).data('driver_no'));
        $('#driver_license_no').val($(this).data('driver_license_no'));

        $('#loading_place').val( $(this).data('loading_place'));
        $('#tpt_name').val( $(this).data('tpt_name'));
        $('#commission').val($(this).data('commission'));
        $('#total_tpt').val($(this).data('total_tpt'));
        $('#advance').val( $(this).data('advance'));
        $('#date_advance').val( $(this).data('date_advance'));
        $('#payment_mode').val($(this).data('payment_mode'));


        $('#extra_payment').val($(this).data('extra_payment'));
        $('#after_loading').val( $(this).data('after_loading'));
        $('#road_expenses').val( $(this).data('road_expenses'));
        $('#date_delivery').val($(this).data('date_delivery'));
        $('#delivery').val($(this).data('delivery'));
        $('#balance_left').val( $(this).data('balance_left'));
        $('#balance_left_paid_by').val($(this).data('balance_left_paid_by'));
        $('#total_expenses').val($(this).data('total_expenses'));
    });

    $('#table').on('click', '.edit_transport_link', function() {

        // update form action
        transport_id = $(this).data('transport_id');
        form = $('#edit_transport_form');
        form.attr('action', form.attr('action') + transport_id);

        // retrieve details
        $('#edit_credit').val($(this).data('credit'));
        $('#edit_date_credit').val($(this).data('date_credit'));
        $('#edit_credit_paid_by').val($(this).data('credit_paid_by'));
        $('#edit_balance').val( $(this).data('balance'));
        $('#edit_date_loading').val( $(this).data('date_loading'));
        $('#edit_picking_place').val( $(this).data('picking_place'));
        $('#edit_container_pickup_fee').val($(this).data('container_pickup_fee'));
        $('#edit_picking_place').val( $(this).data('picking_place'));
        $('#edit_truck_no').val($(this).data('truck_no'));
        $('#edit_shipping_line').val($(this).data('shipping_line'));
        $('#edit_container_no').val($(this).data('container_no'));
        $('#edit_seal_no').val($(this).data('seal_no'));
        $('#edit_seal_no2').val( $(this).data('seal_no2'));
        $('#edit_container_no2').val( $(this).data('container_no2'));
        $('#edit_offloading_place').val($(this).data('offloading_place'));
        $('#edit_driver_name').val($(this).data('driver_name'));
        $('#edit_driver_name2').val( $(this).data('driver_name2'));
        $('#edit_driver_no').val($(this).data('driver_no'));

        $('#edit_driver_license_no').val($(this).data('driver_license_no'));
        $('#edit_loading_place').val( $(this).data('loading_place'));
        $('#edit_tpt_name').val( $(this).data('tpt_name'));
        $('#edit_commission').val($(this).data('commission'));
        $('#edit_total_tpt').val($(this).data('total_tpt'));
        $('#edit_advance').val( $(this).data('advance'));
     $('#edit_date_advance').val( $(this).data('date_advance'));
        $('#edit_payment_mode').val($(this).data('payment_mode'));


        $('#edit_extra_payment').val($(this).data('extra_payment'));
        $('#edit_after_loading').val( $(this).data('after_loading'));
        $('#edit_road_expenses').val( $(this).data('road_expenses'));
        $('#edit_date_delivery').val($(this).data('date_delivery'));
        $('#edit_delivery').val($(this).data('delivery'));
        $('#edit_balance_left').val( $(this).data('balance_left'));
        $('#edit_balance_left_paid_by').val($(this).data('balance_left_paid_by'));
        $('#edit_total_expenses').val($(this).data('total_expenses'));
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