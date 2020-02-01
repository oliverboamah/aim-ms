<div class="modal fade" id="add_packing" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Add Record</h4>
			</div>
			<form id="packing_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
				  action="<?php echo base_url('Package2/store') ?>">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Container No</label>
						<div class="col-md-12">
							<input type="text" name="container_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Seal No</label>
						<div class="col-md-12">
							<input type="text" name="seal_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Truck No</label>
						<div class="col-md-12">
							<input type="text" name="truck_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Driver's name</label>
						<div class="col-md-12">
							<input type="text" name="driver_name"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Driver License No</label>
						<div class="col-md-12">
							<input type="text" name="driver_license_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Driver Contact</label>
						<div class="col-md-12">
							<input type="tel" name="driver_phone"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Loading Place</label>
						<div class="col-md-12">
							<input type="text" name="loading_place"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Date</label>
						<div class="col-md-12">
							<input type="date" name="date"
								   class="form-control form-control-line" required >
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
