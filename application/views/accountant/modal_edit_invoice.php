<div class="modal fade" id="edit_invoice" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Invoice</h4>
                    </div>
                    <form id="edit_invoice_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('invoices/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Name of File</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_name" name="name" placeholder='Eg: 3k)m K3se3 Budget 1441'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-md-12">Upload Document</label>
                                <div class="col-md-12">
                                    <input type="file" name="file"
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