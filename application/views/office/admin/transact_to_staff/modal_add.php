<div class="modal fade" id="add_transaction" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Make Transaction</h4>
                    </div>
                    <form id="add_transaction_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('StaffTransaction/store/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Purpose</label>
                                <div class="col-md-12">
                                    <input type="text" name="purpose" placeholder='What the money should be used for'
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
                                <label class="col-md-12">Amount Paid</label>
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
                                    <input type="submit" class="btn btn-success" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>