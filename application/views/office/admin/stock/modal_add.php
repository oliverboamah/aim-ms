<div class="modal fade" id="add_stock" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Item to Stock</h4>
                    </div>
                    <form id="view_stock_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Stock/store') ?>">
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
                            <label class="col-md-12">Girth Start</label>
                                <div class="col-md-12">
                                    <input type="number" name="girth_start"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Girth End</label>
                                <div class="col-md-12">
                                    <input type="number" name="girth_end"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Number of Bend</label>
                                <div class="col-md-12">
                                    <input type="number" name="num_bend"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Number of Short Length</label>
                                <div class="col-md-12">
                                    <input type="number" name="num_short_len"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Number of Full Length</label>
                                <div class="col-md-12">
                                    <input type="number" name="num_full_len"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Price of Bend</label>
                                <div class="col-md-12">
                                    <input type="number" name="price_bend"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Price of Short Length</label>
                                <div class="col-md-12">
                                    <input type="number" name="price_short_len"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Price of Full Length</label>
                                <div class="col-md-12">
                                    <input type="number" name="price_full_len"
                                           class="form-control form-control-line" required>
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
                                    <input type="submit" class="btn btn-success" value="OKAY">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>