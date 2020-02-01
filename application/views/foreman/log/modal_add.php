<div class="modal fade" id="add_stock" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add New Logs</h4>
                    </div>
                    <form id="view_stock_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('LogsForeman/store') ?>">
                        <div class="modal-body">
                        <div class="form-group">
                                <label class="col-md-12">Supplier Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="supplier_name"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Supplier Contact</label>
                                <div class="col-md-12">
                                    <input type="tel" name="supplier_contact"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                         
                            <div class="form-group">
                                <label class="col-md-12">Straight Pieces</label>
                                <div class="col-md-12">
                                <input type="text" name="straight_pieces"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Bend Pieces</label>
                                <div class="col-md-12">
                                <input type="text" name="bend_pieces"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">4FT Pieces</label>
                                <div class="col-md-12">
                                <input type="text" name="feet_pieces"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Date of Stock</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_of_stock"
                                           class="form-control form-control-line" required>
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