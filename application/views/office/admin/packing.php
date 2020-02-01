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

?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Clean Cut Packing List </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Clean Cut</a></li>
                                            </ol>
                                        </nav>
                                    </div>
          
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
                                   <h5 class="card-header">Total Pieces</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Pieces in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $total_pieces_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_total_pieces
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_total_pieces
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_total_pieces=$jan_total_pieces
                                    data-feb_total_pieces=$feb_total_pieces
                                    data-mar_total_pieces=$mar_total_pieces
                                    data-apr_total_pieces=$apr_total_pieces
                                    data-may_total_pieces=$may_total_pieces
                                    data-jun_total_pieces=$jun_total_pieces
                                    data-jul_total_pieces=$jul_total_pieces
                                    data-aug_total_pieces=$aug_total_pieces
                                    data-sep_total_pieces=$sep_total_pieces
                                    data-oct_total_pieces=$oct_total_pieces
                                    data-nov_total_pieces=$nov_total_pieces
                                    data-dec_total_pieces=$dec_total_pieces
                                    id='piechart_3d' class='card-body'>
                                    </div>
                                    ";
?>

<h5 class="card-header">Total CBM</h5>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total CBM in <?php echo date('Y') ?> <span class="badge badge-primary">
                                 <?php echo $total_cbm_in_year; ?></span>
                                </span>
                            </ol>
                                <?php

echo "
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                   January
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jan_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   February
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $feb_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   March
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $mar_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                    April
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $apr_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   May
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $may_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-light mt-1'>
                                   June
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $jun_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-secondary mt-1'>
                                   July
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                    $jul_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-primary mt-1'>
                                   August
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $aug_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-danger mt-1'>
                                   September
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $sep_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-success mt-1'>
                                    October
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $oct_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-dark mt-1'>
                                   November
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $nov_total_cbm
                                   </a>
                                   <a href='' class='btn btn-xs btn-outline-info mt-1'>
                                   December
                                   </a>
                                   <a href='' class='btn btn-xs btn-warning mt-1'>
                                   $dec_total_cbm
                                   </a>
                                   ";

echo "
                                   <!-- Pie Chart -->
                                    <div
                                    data-jan_total_cbm=$jan_total_cbm
                                    data-feb_total_cbm=$feb_total_cbm
                                    data-mar_total_cbm=$mar_total_cbm
                                    data-apr_total_cbm=$apr_total_cbm
                                    data-may_total_cbm=$may_total_cbm
                                    data-jun_total_cbm=$jun_total_cbm
                                    data-jul_total_cbm=$jul_total_cbm
                                    data-aug_total_cbm=$aug_total_cbm
                                    data-sep_total_cbm=$sep_total_cbm
                                    data-oct_total_cbm=$oct_total_cbm
                                    data-nov_total_cbm=$nov_total_cbm
                                    data-dec_total_cbm=$dec_total_cbm
                                    id='piechart_3d2' class='card-body'>
                                    </div>
                                    ";
?>

                                    </div>
                                    <div class="tab-pane fade" id="outline-two" role="tabpanel" aria-labelledby="tab-outline-two">
                           <br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Accountant</th>
                                                <th>Foreman</th>
                                                <th>Container no</th>
                                                <th>Seal no</th>
                                                <th>Num of Pieces</th>
                                                <th>Total CBM</th>
                                                <th>Recorded at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
foreach ($packages as $package) {

    $url_view = base_url('OfficeAdmin/packing_item/' . $package->package_id);
    $url_delete = base_url('Accountant/delete_permission/' . $package->package_id);

    echo "
            <tr>
            <td>$package->package_id</td>
            <td>$package->accountant</td>
            <td>$package->foreman</td>
            <td>$package->container_no</td>
            <td>$package->seal_no</td>
            <td>$package->num_pieces</td>
            <td>$package->total_cbm</td>
            <td>$package->created_at</td>
                <td>
                <a href=$url_view class='link' data-toggle='tooltip' title='View'>
                <span class='badge badge-success'>
                <i class='fas fa-eye'></i>
                View</span</a>
             
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
          ['Total Pieces in January', $('#piechart_3d').data('jan_total_pieces')],
          ['Total Pieces in February', $('#piechart_3d').data('feb_total_pieces')],
          ['Total Pieces in March', $('#piechart_3d').data('mar_total_pieces')],
          ['Total Pieces in April', $('#piechart_3d').data('apr_total_pieces')],
          ['Total Pieces in May', $('#piechart_3d').data('may_total_pieces')],
          ['Total Pieces in June', $('#piechart_3d').data('jun_total_pieces')],
          ['Total Pieces in July', $('#piechart_3d').data('jul_total_pieces')],
          ['Total Pieces in August', $('#piechart_3d').data('aug_total_pieces')],
          ['Total Pieces in September', $('#piechart_3d').data('sep_total_pieces')],
          ['Total Pieces in October', $('#piechart_3d').data('oct_total_pieces')],
          ['Total Pieces in November', $('#piechart_3d').data('nov_total_pieces')],
          ['Total Pieces in December', $('#piechart_3d').data('dec_total_pieces')],
        ]);

        var options = {
          title: 'Total Pieces per month in ' + new Date().getFullYear(),
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Task', ""],
          ['Total CBM in January', $('#piechart_3d2').data('jan_total_cbm')],
          ['Total CBM in February', $('#piechart_3d2').data('feb_total_cbm')],
          ['Total CBM in March', $('#piechart_3d2').data('mar_total_cbm')],
          ['Total CBM in April', $('#piechart_3d2').data('apr_total_cbm')],
          ['Total CBM in May', $('#piechart_3d2').data('may_total_cbm')],
          ['Total CBM in June', $('#piechart_3d2').data('jun_total_cbm')],
          ['Total CBM in July', $('#piechart_3d2').data('jul_total_cbm')],
          ['Total CBM in August', $('#piechart_3d2').data('aug_total_cbm')],
          ['Total CBM in September', $('#piechart_3d2').data('sep_total_cbm')],
          ['Total CBM in October', $('#piechart_3d2').data('oct_total_cbm')],
          ['Total CBM in November', $('#piechart_3d2').data('nov_total_cbm')],
          ['Total CBM in December', $('#piechart_3d2').data('dec_total_cbm')],
        ]);

        var options = {
          title: 'Total CBM per month in ' + new Date().getFullYear(),
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

$('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    {
                        extend: 'excel',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Packing List',
                        text: 'Excel',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Packing ListH',
                        text: 'PDF',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Packing List',
                        text: 'Print',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                ]
});


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