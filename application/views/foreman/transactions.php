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
// require 'accounting/modal_add.php';
// require 'accounting/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Monies Recieved</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Check out records of monies recieved</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
//require 'transact_to_staff/status.php';
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
                            <h5 class="card-header">Monies Recieved</h5>
                            <div class="card-body">

                                <!-- Pie Chart -->
                                <?php 
                                   echo "
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
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>TransactionID</th>
                                                <th>Sender</th>
                                                <th>Payment mode</th>
                                                <th>Amount Recieved</th>
                                                <th>Previous Balance</th>
                                                <th>Current Balance</th>
                                           
                                             
                                                <th>Recorded at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
foreach ($transactions as $transaction) {

    $url_view = base_url('Foreman/accounts/' . $transaction->staff_transaction_id);
    $current_balance = $transaction->amount + $transaction->balance;

            echo "
            <tr>
               
                <td>$transaction->staff_transaction_id</td>
            
                <td>$transaction->sender</td>
                <td>$transaction->payment_mode</td>
                <td>$transaction->amount</td>
                <td>$transaction->balance</td>
                <td>$current_balance</td>
              
                <td>$transaction->detail</td>
                <td>$transaction->created_at</td>
                <td>
                <a style='margin-right: 10px;' href='$url_view' class='link' data-toggle='tooltip' title='View'>
                <span class='badge badge-warning'>
                <i class='fas fa-balance-scale'></i>
                Manage</span></a>
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
    
$('#table').on('click', '.edit_account', function() {

   // update form action
   account_id = $(this).data('account_id');
   form = $('#edit_account_form');
   form.attr('action', form.attr('action') + account_id);

   // retrieve details
   $('#purpose').val($(this).data('purpose'));
   $('#payment_mode').val($(this).data('payment_mode'));
   $('#amount_paid').val($(this).data('amount_paid'));

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
          ['Amount Recieved in January', $('#piechart_3d').data('jan_total_amount')],
          ['Amount Recieved in February', $('#piechart_3d').data('feb_total_amount')],
          ['Amount Recieved in March', $('#piechart_3d').data('mar_total_amount')],
          ['Amount Recieved in April', $('#piechart_3d').data('apr_total_amount')],
          ['Amount Recieved in May', $('#piechart_3d').data('may_total_amount')],
          ['Amount Recieved in June', $('#piechart_3d').data('jun_total_amount')],
          ['Amount Recieved in July', $('#piechart_3d').data('jul_total_amount')],
          ['Amount Recieved in August', $('#piechart_3d').data('aug_total_amount')],
          ['Amount Recieved in September', $('#piechart_3d').data('sep_total_amount')],
          ['Amount Recieved in October', $('#piechart_3d').data('oct_total_amount')],
          ['Amount Recieved in November', $('#piechart_3d').data('nov_total_amount')],
          ['Amount Recieved in December', $('#piechart_3d').data('dec_total_amount')],
        ]);

        var options = {
          title: 'Monies recieved per month in ' + new Date().getFullYear(),
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