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
require 'accounting/modal_add.php';
require 'accounting/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Staff Accounts For Money Recieved</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">See how the money was used</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'transact_to_staff/status.php';
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
                            <h5 class="card-header">Staff Accounts</h5>
                            <div class="card-body text-center">

                                <a href="" class="user-avatar my-3">
                                 <img src="<?php echo base_url($user->image)?>" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                </a>
                                <!-- /.user-avatar -->
                                <h3 class="card-title mb-2 text-truncate">
                                <a href=""><?php echo $user->name; ?> </a>
                                </h3>
                                <h6 class="card-subtitle text-muted mb-3"> 
                                <?php echo $user->role; ?></h6>
                                <h6 class="card-subtitle text-muted mb-3"> 
                                <?php echo $user->location; ?></h6>

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
                                                <th>AccountID</th>
                                                <th>Amount</th>
                                                <th>Payment mode</th>
                                                <th>Purpose</th>
                                                <th>Detail</th>
                                                <th>Recorded at</th>
                                             
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
   $('#balance').val($(this).data('deparbalancetment'));
   $('#detail').val($(this).data('detail'));
});

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