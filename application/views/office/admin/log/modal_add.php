<div class="modal fade" id="add_stock" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add New Logs</h4>
                    </div>
                    <form id="view_stock_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Logs/store') ?>">
                        <div class="modal-body">
                        <div class="form-group">
                                <label class="col-md-12">Supplier Rep</label>
                                <div class="col-md-12">
                                    <input type="text" name="supplier_rep"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Select Supplier Company</label>
                                <div class="col-md-12">
                                    <select name="supplier" 
                                           class="form-control form-control-line" required >
                                           <?php 
                                                foreach($suppliers as $supplier) {
                                                    echo '<option> #' . $supplier->supplier_id. " ". $supplier->name.'</option>';
                                                }
                                           ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Straight Pieces</label>
                                <div class="col-md-12">
                                <select name="straight_pieces[]" style="width: 100%" class="js-example-basic-multiple js-example-events"  multiple="multiple">
                                        <option value="45 - 50">45 - 50</option>
                                        <option value="51 - 60">51 - 60</option>
                                        <option value="61 - 70">61 - 70</option>
                                        <option value="71 - 80">71 - 80</option>
                                        <option value="81 - 90">81 - 90</option>
                                        <option value="91 - 100">91 - 100</option>
                                        <option value="101 - 110">101 - 110</option>
                                        <option value="111 UP">111 UP</option>
                                    </select>        
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Bend Pieces</label>
                                <div class="col-md-12">
                                <select name="bend_pieces[]" style="width: 100%" class="js-example-basic-multiple js-example-events2"  multiple="multiple">
                                        <option value="45 - 50">45 - 50</option>
                                        <option value="51 - 60">51 - 60</option>
                                        <option value="61 - 70">61 - 70</option>
                                        <option value="71 - 80">71 - 80</option>
                                        <option value="81 - 90">81 - 90</option>
                                        <option value="91 - 100">91 - 100</option>
                                        <option value="101 - 110">101 - 110</option>
                                        <option value="111 UP">111 UP</option>
                                    </select>        
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">4FT Pieces</label>
                                <div class="col-md-12">
                                <select name="feet_pieces[]" style="width: 100%" class="js-example-basic-multiple js-example-events3" multiple="multiple">
                                        <option value="45 - 50">45 - 50</option>
                                        <option value="51 - 60">51 - 60</option>
                                        <option value="61 - 70">61 - 70</option>
                                        <option value="71 - 80">71 - 80</option>
                                        <option value="81 - 90">81 - 90</option>
                                        <option value="91 - 100">91 - 100</option>
                                        <option value="101 - 110">101 - 110</option>
                                        <option value="111 UP">111 UP</option>
                                    </select>        
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