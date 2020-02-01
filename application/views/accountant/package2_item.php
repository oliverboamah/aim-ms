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
    require 'packing_item/modal_add.php';
require 'packing_item/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Packing List Item </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-record"><a href="#" class="breadcrumb-link">Dashboard > Packing List Item</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'packing_item/status.php';
?>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Packing List Item</h5>
                            <div class="card-body">

                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total CFT  <span class="badge badge-dark">
                                 <?php echo $total_cft ?></span>
                            </ol>
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total CBM  <span class="badge badge-dark">
                                 <?php echo $total_cbm; ?></span>
                                </span>

                            </ol>
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Pieces  <span class="badge badge-dark">
                                 <?php echo $total_pieces; ?></span>
                                </span>

                            </ol>
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Price  <span class="badge badge-dark">
                                 <?php echo $total_price; ?></span>
                                </span>

                            </ol>
                            <button href="#" style="float:right" class="btn btn-secondary"
													data-toggle="modal" data-target="#add_packing">
												<i class="fa fa-plus-circle"></i> Add New  List Item
											</button>
<br/><br/>

                                <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
													<thead>
													<tr>
														<th>#</th>
														<th>Width</th>
														<th>Thickness</th>
														<th>Length</th>
														<th>Number of Pieces</th>
														<th>Price</th>
														<th>CFT</th>
														<th>CBM</th>
                                                        <th>Total Price</th>
		
														<th>Recorded at</th>
														<th>Action</th>
													</tr>
													</thead>
													<tbody>
													<?php
foreach ($packages as $package) {

    $url_view = base_url('Accountant/package2_item/' . $package->package_item_id);
    $url_delete = base_url('Package2Item/delete_permission/' . $package->package_item_id);

    echo "
            <tr>
            <td>$package->package_item_id</td>
            <td>$package->width</td>

            <td>$package->thickness</td>
            <td>$package->length</td>
             <td>$package->num_pieces</td>
              <td>$package->price</td>
               <td>$package->cft</td>
               <td>$package->cbm</td>
               <td>$package->total_price</td>
            <td>$package->created_at</td>
                <td>
              
                 <a data-package_item_id=$package->package_item_id
                 data-width='$package->width' data-thickness='$package->thickness'
                  data-length='$package->length' data-num_pieces='$package->num_pieces'
                   data-price='$package->price' data-cft='$package->cft'
                   data-cbm='$package->cbm' data-total_price='$package->total_price'
                   data-created_at='$package->created_at'
                 href='' class='link edit_package' data-toggle='modal' data-target='#edit_package' title='Edit'>
                      <span class='badge badge-warning'>
                       <i class='fas fa-edit'></i>Edit</span></a>
                <a href=$url_delete class='link' data-toggle='tooltip' title='Delete'>
                <span class='badge badge-danger'>
                <i class='fas fa-eye'></i>
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


            <?php
include 'dashboard_footer.php';
?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
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


            $(window).resize(function () {
                drawChart();
                drawChart2();
            });


		</script>
		<script type="text/javascript">
            $(document).ready(function () {


                $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    {
                        extend: 'excel',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Sizes',
                        text: 'Excel',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Sizes',
                        text: 'PDF',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Sizes',
                        text: 'Print',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                ]
});


    $('#table').on('click', '.edit_package', function () {

        
                    form = $('#edit_package_form');
                    package_item_id = $(this).data('package_item_id');
                    form.attr('action', form.attr('action') + package_item_id);
                

                    // retrieve details
                    $('#width').val($(this).data('width'));
                    $('#thickness').val($(this).data('thickness'));
                    $('#length').val($(this).data('length'));
                    $('#num_pieces').val($(this).data('num_pieces'));
                    $('#price').val($(this).data('price'));

                });

            });
		</script>
</body>
</html>