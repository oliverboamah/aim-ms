<div class="modal fade" id="edit_salary" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Update Salary Record</h4>
			</div>
			<form id="edit_account_form" enctype="multipart/form-data" class="form-horizontal form-material"
				  method="post"
				  action="<?php echo base_url('Salary/update/') ?>">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Mode of Payment</label>
						<div class="col-md-12">
							<select id="payment_mode" name="payment_mode"
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
							<input type="number" id="amount" name="amount"

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
							<select name="staff" id="staff"
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
							<input type="date" name="date_paid" id="date_paid"
								   class="form-control form-control-line" required>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="form-group ">
						<div class="col-sm-12 ">
							<input type="submit" class="btn btn-success" value="UPDATE">
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
