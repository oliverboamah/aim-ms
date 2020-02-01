<div class="modal fade" id="edit_account" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update Accounting Record</h4>
                    </div>
                    <form id="edit_account_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('accounting/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Purpose</label>
                                <div class="col-md-12">
                                    <input type="text" id="purpose" name="purpose" placeholder='What the money is used for'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <label class="col-md-12">Mode of Payment</label>
                                <div class="col-md-12">
                                <select id="payment_mode" name="payment_mode"
                                           class="form-control form-control-line" required >
                                          <option>Cash</option>
                                          <option>Cheque</option>
                                          <option>Bank Transfer</option>
                                          <option>Mobile Money</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Amount</label>
                                <div class="col-md-12">
                                    <input type="number" id="amount_paid" name="amount_paid" 
                                          
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="col-md-12">Detail</label>
                                <div class="col-md-12">
                                    <input type="text" id="detail" name="detail" 
                                            placeholder='Enter details of payment'
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