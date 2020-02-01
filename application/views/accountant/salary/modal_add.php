<div class="modal fade" id="add_salary" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Add New Salary Record</h4>
			</div>
			<form id="add_salary_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
				  action="<?php echo base_url('Salary/store/') ?>">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Mode of Payment</label>
						<div class="col-md-12">
							<select name="payment_mode"
									class="form-control form-control-line" required>
								<option>Cash</option>
								<option>Cheque</option>
								<option>Bank Transfer</option>
								<option>Mobile Money</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Amount Paid</label>
						<div class="col-md-12">
							<input type="number" name="amount"
								   class="form-control form-control-line" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Currency</label>
						<div class="col-md-12">
							<select name="currency"
									class="form-control form-control-line" required>
								<option>Ghana Cedis</option>
								<option>Indian Rupees</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Payment made by</label>
						<div class="col-md-12">
							<select name="staff"
									class="form-control form-control-line" required>
								<?php
								foreach ($office_managers as $office_manager) {
									echo '<option> #' . $office_manager->staff_id . " " . $office_manager->name . '</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Date Paid</label>
						<div class="col-md-12">
							<input type="date" name="date_paid"
								   class="form-control form-control-line" required>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="form-group ">
						<div class="col-sm-12 ">
							<input type="submit" class="btn btn-success" value="ADD">
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
