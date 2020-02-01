<div class="modal fade" id="add_account" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add New Accounting Record</h4>
                    </div>
                    <form id="add_account_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('StaffAccount/store') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Purpose</label>
                                <div class="col-md-12">
                                    <input type="text" name="purpose" placeholder='What the money is used for'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <label class="col-md-12">Mode of Payment</label>
                                <div class="col-md-12">
                                <select name="payment_mode" 
                                           class="form-control form-control-line" required >
                                          <option>Cash</option>
                                          <option>Cheque</option>
                                          <option>Bank Transfer</option>
                                          <option>Mobile Money</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Amount Used</label>
                                <div class="col-md-12">
                                    <input type="number" name="amount"
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-md-12">Detail</label>
                                <div class="col-md-12">
                                    <input type="text" name="detail" placeholder='Enter details of payment'
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