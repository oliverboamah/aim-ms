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
    require 'package2/modal_add.php';
    require 'package2/modal_edit.php';
	?>
	<div class="dashboard-wrapper" style="position: relative;">
		<div class="container-fluid dashboard-content">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="page-header" id="top">
								<h2 class="pageheader-title">Clean Cut Sizes </h2>

								<div class="page-breadcrumb">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard >
                                            Clean Cut Sizes</a></li>
										</ol>
									</nav>
								</div>
								<?php
								require 'packing/status.php';
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
                            <h5 class="card-header">Clean Cut Sizes</h5>
                            <div class="card-body">

											<br/>
											<button href="#" style="float:right" class="btn btn-secondary"
													data-toggle="modal" data-target="#add_packing">
												<i class="fa fa-plus-circle" "></i> Add New Packing List Item
											</button>
											<br/><br/>
											<!-- Export Data -->

											<div class="table-responsive">
												<table id="table" class="table table-striped table-bordered">
													<thead>
													<tr>
														<th>#</th>
														<th>Accountant</th>

														<th>Container no</th>
														<th>Seal no</th>
														<th>Truck no</th>
														<th>Driver name</th>
														<th>Driver License no</th>
														<th>Drive Phone</th>
                                                        <th>Loading Place</th>
														<th>Date</th>
														<th>Recorded at</th>
														<th>Action</th>
													</tr>
													</thead>
													<tbody>
													<?php
													foreach ($packages as $package) {

														$url_view = base_url('Accountant/package2_item/' . $package->package_id);
														$url_delete = base_url('Package2/delete_permission/' . $package->package_id);

														echo "
            <tr>
            <td>$package->package_id</td>
            <td>$package->accountant</td>
           
            <td>$package->container_no</td>
            <td>$package->seal_no</td>
             <td>$package->truck_no</td>
              <td>$package->driver_name</td>
               <td>$package->driver_license_no</td>
               <td>$package->driver_phone</td>
               <td>$package->loading_place</td>
            <td>$package->date</td>
            <td>$package->created_at</td>
                <td>
                <a href=$url_view class='link' data-toggle='tooltip' title='View'>
                <span class='badge badge-success'>
                <i class='fas fa-eye'></i>
                View</span</a>
                 <a data-package_id=$package->package_id 
                 data-accountant='$package->accountant' data-container_no='$package->container_no' 
                  data-seal_no='$package->seal_no' data-truck_no='$package->truck_no' 
                   data-driver_name='$package->driver_name' data-driver_license_no='$package->driver_license_no' 
                   data-driver_phone='$package->driver_phone' data-date='$package->date' 
                   data-loading_place='$package->loading_place' 
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

                    // update form action
                    package_id = $(this).data('package_id');
                    form = $('#edit_package_form');
                    form.attr('action', form.attr('action') + package_id);

                    // retrieve details
                    $('#accountant').val($(this).data('accountant'));
                    $('#container_no').val($(this).data('container_no'));
                    $('#seal_no').val($(this).data('seal_no'));
                    $('#truck_no').val($(this).data('truck_no'));
                    $('#driver_name').val($(this).data('driver_name'));
                    $('#driver_license_no').val($(this).data('driver_license_no'));
                    $('#driver_phone').val($(this).data('driver_phone'));
                    $('#loading_place').val($(this).data('loading_place'));
                    $('#date').val($(this).data('date'));
               
                });

            });
		</script>

</body>
</html>
