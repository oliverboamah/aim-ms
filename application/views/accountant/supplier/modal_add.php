<div class="modal fade" id="add_supplier" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add New Supplier</h4>
                    </div>
                    <form id="add_supplier_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Supplier/store/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Company Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder='Eg: Forestry Commission'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <label class="col-md-12">Contact</label>
                                <div class="col-md-12">
                                    <input type="tel" name="contact" placeholder='Eg: 0243 112 334'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Address</label>
                                <div class="col-md-12">
                                    <input type="address" name="address" placeholder='Eg: Fiapre - Sunyani'
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