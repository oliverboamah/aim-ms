<div class="modal fade" id="edit_consumer" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update Buyer Activity Record</h4>
                    </div>
                    <form id="edit_consumer_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('ConsumerActivity/update/') ?>">
                        <div class="modal-body">
                        <div class="form-group">
                                <label class="col-md-12">Select Buyer</label>
                                <div class="col-md-12">
                                <select name="consumer"  id="consumer" 
                                           class="form-control form-control-line" required >
                                           <?php 
                                                foreach($consumers as $consumer) {
                                                    echo '<option> #' . $consumer->consumer_id. " ". $consumer->name.'</option>';
                                                }
                                           ?>
                                    </select>
                                </div>
                            </div>

							<div class="form-group">
								<label class="col-md-12">Bill no</label>
								<div class="col-md-12">
									<input type="text" name="bill_no"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Party name</label>
								<div class="col-md-12">
									<input type="text" name="party_name"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Container no</label>
								<div class="col-md-12">
									<input type="text" name="container_no"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Pieces</label>
								<div class="col-md-12">
									<input type="number" min="0" name="pieces"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">CBM</label>
								<div class="col-md-12">
									<input type="number" step="0.01"  min="0" name="cbm"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Average CFT</label>
								<div class="col-md-12">
									<input type="number" step="0.01"  min="0" name="average_cft"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Price</label>
								<div class="col-md-12">
									<input type="number" step="0.01"  min="0" name="price"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Advance Payment from Buyer</label>
								<div class="col-md-12">
									<input step="0.01" type="number" min="0" name="amount_recieved"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12">Date Recieved</label>
								<div class="col-md-12">
									<input type="date" name="date_sent" id="date_sent"
										   class="form-control form-control-line" required >
								</div>
							</div>
							<div class="form-group">
                                <label class="col-md-12">Mode of Payment</label>
                                <div class="col-md-12">
                                <select name="payment_mode" 
                                id="payment_mode" 
                                           class="form-control form-control-line" required >
                                          <option>Cash</option>
                                          <option>Cheque</option>
                                          <option>Bank Transfer</option>
                                          <option>Mobile Money</option>
                                    </select>
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
