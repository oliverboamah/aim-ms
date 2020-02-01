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
	require 'salary/modal_add.php';
	require 'salary/modal_edit.php';
	?>
	<div class="dashboard-wrapper" style="position: relative;">
		<div class="container-fluid dashboard-content">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="page-header" id="top">
								<h2 class="pageheader-title">Salaries paid to Staff</h2>

								<div class="page-breadcrumb">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Record
													accounts of salaries paid to staff</a></li>
										</ol>
									</nav>
								</div>
								<?php
								require 'salary/status.php';
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
								<h5 class="card-header">Salaries</h5>
								<div class="card-body">

                                <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Only Salary Paid in Ghana Cedis Total<span class="badge badge-primary">
                                 <?php echo $total_salary_paid_cedis; ?></span>
                                </span>
									</ol>
                                    <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Only Salary Paid in Indian Rupees Total<span class="badge badge-primary">
                                 <?php echo $total_salary_paid_rupees; ?></span>
                                </span>
									</ol>
								

									<a href="<?php echo base_url("Accountant/salary_to_staff") ?>">
										<button style="float: right" class="btn btn-secondary">
											<i class="fa fa-plus-circle"></i> Record Salary
										</button>
									</a><br/><br/>

									<div class="table-responsive">
										<table id="table" class="table table-striped table-bordered">
											<thead>
											<tr>
												<th>#</th>
												<th>Sender</th>
												<th>Reciever</th>
												<th>Payment mode</th>
												<th>Amount Paid</th>
												<th>Currency</th>
												<th>Date Paid</th>
												<th>Recorded at</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											<?php
											foreach ($salaries as $salary) {

												$url_view = base_url('Accountant/staff_accounts/' . $salary->salary_id);
												$url_delete = base_url('Salary/delete_permission/' . $salary->salary_id);

												echo "
            <tr>
               
                <td>$salary->salary_id</td>
            
                <td>$salary->sender_name</td>
                <td>$salary->reciever_name</td>
                <td>$salary->payment_mode</td>
                <td>$salary->amount</td>
                <td>$salary->currency</td>
                <td>$salary->date_paid</td>
                <td>$salary->created_at</td>
                <td>
              
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

		<?php
		include 'dashboard_footer.php';
		?>
		<script type="text/javascript">
            $(document).ready(function () {

                $('#table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'colvis',
                        {
                            extend: 'excel',
                            title: 'AIM - Management System',
                            messageTop: 'Salary Records',
                            text: 'Excel',
                            exportOptions: {
                                columns: 'th:not(:last-child)'
                            }
                        },
                        {
                            extend: 'pdf',
                            title: 'AIM - Management System',
                            messageTop: 'Salary Records',
                            text: 'PDF',
                            exportOptions: {
                                columns: 'th:not(:last-child)'
                            }
                        },
                        {
                            extend: 'print',
                            title: 'AIM - Management System',
                            messageTop: 'Salary Records',
                            text: 'Print',
                            exportOptions: {
                                columns: 'th:not(:last-child)'
                            }
                        },
                    ]
                });


                $('#table').on('click', '.edit_account', function () {

                    // update form action
                    account_id = $(this).data('account_id');
                    form = $('#edit_account_form');
                    form.attr('action', form.attr('action') + account_id);

                    // retrieve date_sents
                    $('#purpose').val($(this).data('purpose'));
                    $('#payment_mode').val($(this).data('payment_mode'));
                    $('#amount_paid').val($(this).data('amount_paid'));
                    $('#date_sent').val($(this).data('date_sent'));
                });

                $('#pdf').on('click', function () {
                    $('#table').tableExport({
                        type: 'pdf', fileName: 'report',
                        displayTableName: true, tableName: 'REPORT'
                    });
                });

                $('#excel').on('click', function () {
                    $('#table').tableExport({type: 'excel', fileName: 'report',});
                });

                $('#doc').on('click', function () {
                    $('#table').tableExport({type: 'doc', fileName: 'report',});
                });
            });
		</script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', ""],
                    ['Total Amount Recorded in January', $('#piechart_3d').data('jan_total_amount')],
                    ['Total Amount Recorded in February', $('#piechart_3d').data('feb_total_amount')],
                    ['Total Amount Recorded in March', $('#piechart_3d').data('mar_total_amount')],
                    ['Total Amount Recorded in April', $('#piechart_3d').data('apr_total_amount')],
                    ['Total Amount Recorded in May', $('#piechart_3d').data('may_total_amount')],
                    ['Total Amount Recorded in June', $('#piechart_3d').data('jun_total_amount')],
                    ['Total Amount Recorded in July', $('#piechart_3d').data('jul_total_amount')],
                    ['Total Amount Recorded in August', $('#piechart_3d').data('aug_total_amount')],
                    ['Total Amount Recorded in September', $('#piechart_3d').data('sep_total_amount')],
                    ['Total Amount Recorded in October', $('#piechart_3d').data('oct_total_amount')],
                    ['Total Amount Recorded in November', $('#piechart_3d').data('nov_total_amount')],
                    ['Total Amount Recorded in December', $('#piechart_3d').data('dec_total_amount')],
                ]);

                var options = {
                    title: 'Money recorded per month in ' + new Date().getFullYear(),
                    is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }

            $(window).resize(function () {
                drawChart();
            });
		</script>
</body>
</html>
