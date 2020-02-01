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
require 'consumer_activity/modal_add.php';
require 'consumer_activity/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Buyers Activity </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Buyers Activity</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'consumer_activity/status.php';
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
                            <h5 class="card-header">Buyers Activity</h5>
                            <div class="card-body">

                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Amount Recieved in <?php echo date('Y') ?> <span class="badge badge-primary">
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


                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_consumer">
                                Add New Buyer Activity Record</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Accountant</th>
                                                <th>Buyer</th>
												<th>Bill No</th>
												<th>Party name</th>
												<th>Container No</th>
												<th>Pieces</th>
												<th>CBM</th>
												<th>Average CFT</th>
												<th>Price</th>
												<th>Total Container Cost</th>
                                                <th>Advance Payment</th>
												<th>Date Recieved</th>
												<th>Payment mode</th>
                                                <th>Prev balance</th>   
                                                <th>Current balance</th>   

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($consumers_activity as $record) {

    $url_delete = base_url('ConsumerActivity/delete_permission/' . $record->consumer_activity_id);
    echo "

                                                        <tr>
                                                            <td>$record->consumer_activity_id</td> 
                                                            <td>$record->accountant</td> 
                                                            <td>$record->buyer</td>                                     
                                                           	<td>$record->bill_no</td>
                                                           	<td>$record->party_name</td>
                                                           	<td>$record->container_no</td>
                                                           	<td>$record->pieces</td>
                                                           	<td>$record->cbm</td>
                                                           	<td>$record->average_cft</td>
                                                           	<td>$record->price</td>
                                                           	<td>$record->amount_sent</td>
                                                            <td>$record->amount_recieved</td>
                                                            <td>$record->date_sent</td>
                                                            <td>$record->payment_mode</td>
                                                            <td>$record->prev_balance</td>
                                                            <td>$record->current_balance</td>
                                                          
                                                            <td>
                                                            <a style='margin-right: 10px;' title='Edit' data-consumer_activity_id=$record->consumer_activity_id
                                                            data-amount_recieved='$record->amount_recieved'
                                                           data-amount_sent='$record->amount_sent' 
                                                           data-payment_mode='$record->payment_mode' 
                                                           data-date_sent='$record->date_sent'
                                                             href='' class='link edit_consumer' data-toggle='modal' data-target='#edit_consumer' title='Edit'>
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

    $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    {
                        extend: 'excel',
                        title: 'AIM - Management System',
                        messageTop: 'Buyers Activity',
                        text: 'Excel',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'AIM - Management System',
                        messageTop: 'Buyers Activity',
                        text: 'PDF',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        title: 'AIM - Management System',
                        messageTop: 'Buyers Activity',
                        text: 'Print',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                ]
});

    
$('#table').on('click', '.edit_consumer', function() {

   // update form action
   consumer_activity_id = $(this).data('consumer_activity_id');
   form = $('#edit_consumer_form');
   form.attr('action', form.attr('action') + consumer_activity_id);

   // retrieve details

   $('#amount_recieved').val($(this).data('amount_recieved'));
   $('#amount_sent').val($(this).data('amount_sent'));
   $('#payment_mode').val($(this).data('payment_mode'));
   $('#date_sent').val($(this).data('date_sent'));
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
          ['Total Amount Recieved in January', $('#piechart_3d').data('jan_total_amount')],
          ['Total Amount Recieved in February', $('#piechart_3d').data('feb_total_amount')],
          ['Total Amount Recieved in March', $('#piechart_3d').data('mar_total_amount')],
          ['Total Amount Recieved in April', $('#piechart_3d').data('apr_total_amount')],
          ['Total Amount Recieved in May', $('#piechart_3d').data('may_total_amount')],
          ['Total Amount Recieved in June', $('#piechart_3d').data('jun_total_amount')],
          ['Total Amount Recieved in July', $('#piechart_3d').data('jul_total_amount')],
          ['Total Amount Recieved in August', $('#piechart_3d').data('aug_total_amount')],
          ['Total Amount Recieved in September', $('#piechart_3d').data('sep_total_amount')],
          ['Total Amount Recieved in October', $('#piechart_3d').data('oct_total_amount')],
          ['Total Amount Recieved in November', $('#piechart_3d').data('nov_total_amount')],
          ['Total Amount Recieved in December', $('#piechart_3d').data('dec_total_amount')],
        ]);

        var options = {
          title: 'Total Amount Received per month in ' + new Date().getFullYear(),
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
