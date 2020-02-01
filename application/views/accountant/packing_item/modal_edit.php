<div class="modal fade" id="edit_package" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update List Item</h4>
                    </div>
                    <form id="edit_package_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Package2Item/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                            <label class="col-md-12">Width</label>
                                <div class="col-md-12">
                                        <input min="0" type="number" name="width" id="width" 
                                           class="form-control form-control-line" required >
                               
                                </div>
                            </div>
                         
                            <div class="form-group">
                            <label class="col-md-12">Thickness</label>
                                <div class="col-md-12">
                                        <input min="0" type="number" name="thickness" id="thickness" 
                                           class="form-control form-control-line" required >
                               
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label class="col-md-12">Length</label>
                                <div class="col-md-12">
                                        <input min="0" type="number" name="length" id="length" 
                                           class="form-control form-control-line" required >
                               
                                </div>
                            </div>
                          
                            <div class="form-group">
                            <label class="col-md-12">Number of Pieces</label>
                                <div class="col-md-12">
                                        <input min="0" type="number" name="num_pieces" id="num_pieces" 
                                           class="form-control form-control-line" required >
                               
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Price</label>
                                <div class="col-md-12">
                                        <input min="0" type="number" name="price" id="price" 
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