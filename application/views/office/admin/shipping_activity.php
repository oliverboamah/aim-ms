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

require 'shipping/modal_view.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Shipping </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Shipping</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'shipping/status.php';
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
                                   <h5 class="card-header">Total Shipping Charges</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Shipping Charges in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $shipping_charges_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_shipping_charges
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_shipping_charges
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_shipping_charges=$jan_shipping_charges
                                    data-feb_shipping_charges=$feb_shipping_charges
                                    data-mar_shipping_charges=$mar_shipping_charges
                                    data-apr_shipping_charges=$apr_shipping_charges
                                    data-may_shipping_charges=$may_shipping_charges
                                    data-jun_shipping_charges=$jun_shipping_charges
                                    data-jul_shipping_charges=$jul_shipping_charges
                                    data-aug_shipping_charges=$aug_shipping_charges
                                    data-sep_shipping_charges=$sep_shipping_charges
                                    data-oct_shipping_charges=$oct_shipping_charges
                                    data-nov_shipping_charges=$nov_shipping_charges
                                    data-dec_shipping_charges=$dec_shipping_charges
                                    id='piechart_3d' class='card-body'>
                                    </div>
                                    ";
?>

<h5 class="card-header">Total Number of Pieces </h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Number of Pieces in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $num_pieces_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_num_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_num_pieces
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_num_pieces=$jan_num_pieces
                                    data-feb_num_pieces=$feb_num_pieces
                                    data-mar_num_pieces=$mar_num_pieces
                                    data-apr_num_pieces=$apr_num_pieces
                                    data-may_num_pieces=$may_num_pieces
                                    data-jun_num_pieces=$jun_num_pieces
                                    data-jul_num_pieces=$jul_num_pieces
                                    data-aug_num_pieces=$aug_num_pieces
                                    data-sep_num_pieces=$sep_num_pieces
                                    data-oct_num_pieces=$oct_num_pieces
                                    data-nov_num_pieces=$nov_num_pieces
                                    data-dec_num_pieces=$dec_num_pieces
                                    id='piechart_3d2' class='card-body'>
                                    </div>
                                    ";
?>

                                    </div>
                                    <div class="tab-pane fade" id="outline-two" role="tabpanel" aria-labelledby="tab-outline-two">

                           <br/>
                          <br/>


                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr. no</th>
                                                <th>Incharge</th>
                                                <th>Buyer</th>
                                                <th>Num of Pieces</th>
                                                <th>Shipping Fees</th>
                                                <th>Local Fees</th>
                                                <th>Freight</th>
                                                <th>Tracking</th>
												<th>Recorded at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($activity as $record) {

    $url_delete = base_url('ShippingActivity/delete_permission/' . $record->shipping_id);

    echo "
                                                        <tr>
                                                            <td>$record->shipping_id</td>
                                                            <td>$record->name</td>
                                                            <td>$record->buyer_name</td>
                                                            <td>$record->num_pieces</td>
                                                            <td>$record->shipping_charge</td>
                                                            <td>$record->local_charge</td>
                                                            <td>$record->freight</td>
                                                            <td>$record->date_shipping</td>
                                                            <td>$record->created_at</td>
                                                            <td>
                                                            <a href='' style='margin-right: 10px;' class='link view_shipping' data-toggle='modal' data-target='#view_shipping' title='View'
                                                            data-shipping_id='$record->shipping_id' 
                                                            data-created_at='$record->created_at' 
                                                            data-combined_container='$record->combined_container' data-buyer_name='$record->buyer_name' 
                                                            data-buyer_name='$record->buyer_name' 
                                                            data-seal_no='$record->seal_no' data-weight='$record->weight'
                                                            data-container_no='$record->container_no' data-buyer_cbm='$record->buyer_cbm' 
                                                            data-num_pieces='$record->num_pieces' 
                                                            data-cbm='$record->cbm'
                                                            data-shipping_charge='$record->shipping_charge'
                                                            data-delivery_date='$record->delivery_date' data-draft_bill_no='$record->draft_bill_no' 
                                                            data-local_charge='$record->local_charge' data-freight='$record->freight'
                                                            data-obl='$record->obl' data-obl_no='$record->obl_no'
                                                            data-courier='$record->courier'
                                                            data-in_charge='$record->name'
                                                            data-date_shipping='$record->date_shipping'>
                                                            <span class='badge badge-success'>
                                                            <i class='fas fa-eye'></i>
                                                            View</span></a>
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
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Shipping Charges in January', $('#piechart_3d').data('jan_shipping_charges')],
          ['Total Shipping Charges in February', $('#piechart_3d').data('feb_shipping_charges')],
          ['Total Shipping Charges in March', $('#piechart_3d').data('mar_shipping_charges')],
          ['Total Shipping Charges in April', $('#piechart_3d').data('apr_shipping_charges')],
          ['Total Shipping Charges in May', $('#piechart_3d').data('may_shipping_charges')],
          ['Total Shipping Charges in June', $('#piechart_3d').data('jun_shipping_charges')],
          ['Total Shipping Charges in July', $('#piechart_3d').data('jul_shipping_charges')],
          ['Total Shipping Charges in August', $('#piechart_3d').data('aug_shipping_charges')],
          ['Total Shipping Charges in September', $('#piechart_3d').data('sep_shipping_charges')],
          ['Total Shipping Charges in October', $('#piechart_3d').data('oct_shipping_charges')],
          ['Total Shipping Charges in November', $('#piechart_3d').data('nov_shipping_charges')],
          ['Total Shipping Charges in December', $('#piechart_3d').data('dec_shipping_charges')],
        ]);

        var options = {
          title: 'Total Shipping Charges per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total Number of Pieces in January', $('#piechart_3d2').data('jan_num_pieces')],
          ['Total Number of Pieces in February', $('#piechart_3d2').data('feb_num_pieces')],
          ['Total Number of Pieces in March', $('#piechart_3d2').data('mar_num_pieces')],
          ['Total Number of Pieces in April', $('#piechart_3d2').data('apr_num_pieces')],
          ['Total Number of Pieces in May', $('#piechart_3d2').data('may_num_pieces')],
          ['Total Number of Pieces in June', $('#piechart_3d2').data('jun_num_pieces')],
          ['Total Number of Pieces in July', $('#piechart_3d2').data('jul_num_pieces')],
          ['Total Number of Pieces in August', $('#piechart_3d2').data('aug_num_pieces')],
          ['Total Number of Pieces in September', $('#piechart_3d2').data('sep_num_pieces')],
          ['Total Number of Pieces in October', $('#piechart_3d2').data('oct_num_pieces')],
          ['Total Number of Pieces in November', $('#piechart_3d2').data('nov_num_pieces')],
          ['Total Number of Pieces in December', $('#piechart_3d2').data('dec_num_pieces')],
        ]);

        var options = {
          title: 'Total Number of Pieces per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }

      $(window).resize(function(){
        drawChart();
        drawChart2();
      });
</script>

<script type="text/javascript">
$(document).ready( function() {

    $('#table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'colvis',
            {
                extend: 'excel',
                title: 'AIM - Management System',
                messageTop: 'Shipping Activity',
                text: 'Excel',
                exportOptions: {
                    columns: 'th:not(:last-child)'
                }
            },
            {
                extend: 'pdf',
                title: 'AIM - Management System',
                messageTop: 'Shipping Activity',
                text: 'PDF',
                exportOptions: {
                    columns: 'th:not(:last-child)'
                }
            },
            {
                extend: 'print',
                title: 'AIM - Management System',
                messageTop: 'Shipping Activity',
                text: 'Print',
                exportOptions: {
                    columns: 'th:not(:last-child)'
                }
            },
        ]
    });


    $('#table').on('click', '.view_shipping', function() {

        // update form action
        shipping_id = $(this).data('shipping_id');
        form = $('#view_shipping_form');
        form.attr('action', form.attr('action') + shipping_id);

        // retrieve details
        $('#in_charge').val($(this).data('in_charge'));
        $('#created_at').val($(this).data('created_at'));
        $('#combined_container').val($(this).data('combined_container'));
        $('#container_no').val($(this).data('container_no'));
        $('#seal_no').val($(this).data('seal_no'));
        $('#weight').val( $(this).data('weight'));
        $('#buyer_name').val( $(this).data('buyer_name'));
        $('#num_pieces').val( $(this).data('num_pieces'));
        $('#buyer_cbm').val($(this).data('buyer_cbm'));
        $('#cbm').val( $(this).data('cbm'));
        $('#shipping_charge').val($(this).data('shipping_charge'));
        $('#delivery_date').val($(this).data('delivery_date'));
        $('#draft_bill_no').val($(this).data('draft_bill_no'));
        $('#local_charge').val( $(this).data('local_charge'));
        $('#freight').val( $(this).data('freight'));
        $('#obl').val($(this).data('obl'));
        $('#obl_no').val($(this).data('obl_no'));
        $('#courier').val( $(this).data('courier'));
        $('#date_shipping').val($(this).data('date_shipping'));
    });

    $('#table').on('click', '.edit_shipping_link', function() {

        // update form action
        shipping_id = $(this).data('shipping_id');
        form = $('#edit_shipping_form');
        form.attr('action', form.attr('action') + shipping_id);

        // retrieve details
         // retrieve details
        $('#edit_combined_container').val($(this).data('combined_container'));
        $('#edit_num_pieces').val( $(this).data('num_pieces'));
        $('#edit_container_no').val($(this).data('container_no'));
        $('#edit_seal_no').val($(this).data('seal_no'));
        $('#edit_weight').val($(this).data('weight'));
        $('#edit_buyer_name').val($(this).data('buyer_name'));
        $('#edit_buyer_cbm').val($(this).data('buyer_cbm'));
        $('#edit_cbm').val($(this).data('cbm'));
        $('#edit_shipping_charge').val($(this).data('shipping_charge'));
        $('#edit_delivery_date').val($(this).data('delivery_date'));
        $('#edit_draft_bill_no').val($(this).data('draft_bill_no'));
        $('#edit_local_charge').val($(this).data('local_charge'));
        $('#edit_freight').val($(this).data('freight'));
        $('#edit_obl').val($(this).data('obl'));
        $('#edit_obl_no').val($(this).data('obl_no'));
        $('#edit_courier').val($(this).data('courier'));
        $('#edit_date_shipping').val($(this).data('date_shipping'));
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
