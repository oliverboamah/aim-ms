<div class="modal fade" id="edit_expense" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Update Expense Record</h4>
			</div>
			<form id="edit_expense_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
				  action="<?php echo base_url('OtherExpenses/update/') ?>">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Sender</label>
						<div class="col-md-12">
							<input type="text" name="sender" id="sender"
								   class="form-control form-control-line" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Reciever</label>
						<div class="col-md-12">
							<input type="text" name="reciever" id="reciever"
								   class="form-control form-control-line" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Purpose</label>
						<div class="col-md-12">
							<input type="text" name="purpose" id="purpose"
								   class="form-control form-control-line" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Amount Paid</label>
						<div class="col-md-12">
							<input type="number" name="amount" id="amount"
								   class="form-control form-control-line" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Mode of Payment</label>
						<div class="col-md-12">
							<select name="payment_mode" id="payment_mode"
									class="form-control form-control-line" required>
								<option>Cash</option>
								<option>Cheque</option>
								<option>Bank Transfer</option>
								<option>Mobile Money</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Date Paid</label>
						<div class="col-md-12">
							<input type="date" name="date_transaction" id="date_transaction"
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
