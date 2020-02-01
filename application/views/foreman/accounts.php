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
require 'account/modal_add.php';
require 'account/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Accounts Per Money Recieved</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Record how the money was used</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'account/status.php';
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
                            <h5 class="card-header">Accounts</h5>
                            <div class="card-body">

                                <!-- Pie Chart -->
                                <?php 
                                           $current_amount_in_possession = $total_amount_recieved + $balance;
                                           $amount_remaining = $current_amount_in_possession - $total_amount_used;
                                           $current_amount_in_possession = $total_amount_recieved + $balance;
                                           echo "
                                           <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                           Current Amount Recieved
                                           </a>
                                           <a href='' class='btn btn-xs btn-warning mt-1'>
                                            $total_amount_recieved
                                           </a>
                                           <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                           Balance from Previous Transaction
                                           </a>
                                           <a href='' class='btn btn-xs btn-warning mt-1'>
                                            $balance
                                           </a>
                                          
                                           <br/>
                                           <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                           Current Amount in Possession
                                           </a>
                                           <a href='' class='btn btn-xs btn-warning mt-1'>
                                           $current_amount_in_possession
                                           </a>
                                           <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                           Amount Used
                                           </a>
                                           <a href='' class='btn btn-xs btn-warning mt-1'>
                                           $total_amount_used
                                           </a>
                                           <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                           Amount Remaining
                                           </a>
                                           <a href='' class='btn btn-xs btn-warning mt-1'>
                                           $amount_remaining
                                           </a>
                                    ";
                                   echo "
                                    <div data-amount_used=$total_amount_used 
                                     data-amount_remaining=$amount_remaining
                                    id='piechart_3d' class='card-body'>
                                   
                                    </div>
                                    ";
                                ?>
                                
                                <?php
                                    if($accountable) {
                                        echo "
                                            <button href='#' class='btn btn-secondary' data-toggle='modal' data-target='#add_account'>
                                                Add New Record</button>
                                            <br/><br/>
                                        ";    
                                    } else {
                                        echo "<h5>You cannot add a new record for this transaction</h5>";
                                    }
                                ?>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>AccountID</th>
                                                <th>Amount</th>
                                                <th>Payment mode</th>
                                                <th>Purpose</th>
                                                <th>Detail</th>
                                                <th>Recorded at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
foreach ($accounts as $record) {

    echo "
            <tr>
                <td>$record->staff_account_id</td>
                <td>$record->amount</td>
                <td>$record->payment_mode</td>
                <td>$record->purpose</td>
                <td>$record->detail</td>
                <td>$record->created_at</td>

        ";

        // allow editing & deleting of record within 24 hrs of creation
        $current_datetime = date('Y-m-d H:i:s');
        $current_datetime = strtotime($current_datetime);
        $creation_datetime = strtotime($record->created_at);
        $hours = ($current_datetime - $creation_datetime) / ( 3600 );

        if($accountable && $hours <= 24) {

            $url_delete = base_url('StaffAccount/delete_permission/' . $record->staff_account_id);

            echo "
            <td>
            <a style='margin-right: 10px;' title='Edit' data-staff_account_id=$record->staff_account_id 
            data-purpose='$record->purpose' 
            data-payment_mode='$record->payment_mode' data-amount='$record->amount'
            data-detail='$record->detail'
          
            href='' class='link edit_account' data-toggle='modal' data-target='#edit_account' title='Edit'>
            <span class='badge badge-warning'>
            <i class='fas fa-edit'></i>
            Edit</span></a>
            <a href=$url_delete class='link' data-toggle='tooltip' title='Delete'>
            <span class='badge badge-danger'>
            <i class='fas fa-trash-alt'></i>
            Delete</span</a>
            </td>
            ";
        }

    echo "</tr>";
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

$('#table').on('click', '.edit_account', function() {

   // update form action
   staff_account_id = $(this).data('staff_account_id');
   form = $('#edit_account_form');
   form.attr('action', form.attr('action') + staff_account_id);

   // retrieve details
   $('#purpose').val($(this).data('purpose'));
   $('#payment_mode').val($(this).data('payment_mode'));
   $('#amount').val($(this).data('amount'));
   $('#detail').val($(this).data('detail'));
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
          ['Amount Remaining', $('#piechart_3d').data('amount_remaining')],
          ['Amount Used', $('#piechart_3d').data('amount_used')],
        ]);

        var options = {
          title: '',
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