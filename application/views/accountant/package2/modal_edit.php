<div class="modal fade" id="edit_package" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Update Record</h4>
			</div>
			<form id="edit_package_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
				  action="<?php echo base_url('Package2/update/') ?>">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-12">Container No</label>
						<div class="col-md-12">
							<input type="text" id="container_no" name="container_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Seal No</label>
						<div class="col-md-12">
							<input type="text" id="seal_no" name="seal_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Truck No</label>
						<div class="col-md-12">
							<input type="text" id="truck_no" name="truck_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Driver's name</label>
						<div class="col-md-12">
							<input type="text" id="driver_name" name="driver_name"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Driver License No</label>
						<div class="col-md-12">
							<input type="text" id="driver_license_no" name="driver_license_no"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Driver Contact</label>
						<div class="col-md-12">
							<input type="tel" id="driver_phone" name="driver_phone"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Loading Place</label>
						<div class="col-md-12">
							<input type="text" id="loading_place" name="loading_place"
								   class="form-control form-control-line" required >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Date</label>
						<div class="col-md-12">
							<input type="date" name="date" id="date"
								   class="form-control form-control-line" required >
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
