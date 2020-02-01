<div class="modal fade" id="add_packing" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Packing List</h4>
                    </div>
                    <form id="packing_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Package/store') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                            <label class="col-md-12">Container No</label>
                                <div class="col-md-12">
                                        <input type="text" name="container_no" placeholder='Enter container no.'
                                           class="form-control form-control-line" required >
                               
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Seal No</label>
                                <div class="col-md-12">
                                        <input type="text" name="seal_no" placeholder='Enter seal no.'
                                           class="form-control form-control-line" required >
                                  
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Select Foreman</label>
                                <div class="col-md-12">
                                    <select name="foreman" 
                                           class="form-control form-control-line" required >
                                           <?php 
                                                foreach($foremen as $foreman) {
                                                    echo '<option> #' . $foreman->staff_id. " ". $foreman->name.'</option>';
                                                }
                                           ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Fill in pieces values</label>
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">230</span></div>
                                        <input type="text" min="0" class="form-control" name="p1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">220</span></div>
                                        <input type="text" min="0" class="form-control" name="p2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">215</span></div>
                                        <input type="text" min="0" class="form-control" name="p3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">210</span></div>
                                        <input type="text" min="0" class="form-control" name="p4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">200</span></div>
                                        <input type="text" min="0" class="form-control" name="p5">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">190</span></div>
                                        <input type="text" min="0" class="form-control" name="p6">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">185</span></div>
                                        <input type="text" min="0" class="form-control" name="p7">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">180</span></div>
                                        <input type="text" min="0" class="form-control" name="p8">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">170</span></div>
                                        <input type="text" min="0" class="form-control" name="p9">
                                    </div>
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