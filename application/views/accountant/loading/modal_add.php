<div class="modal fade" id="add_consumer" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add New Buyer</h4>
                    </div>
                    <form id="add_consumer_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('consumer/store/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Container No</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder='Enter container no.'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <label class="col-md-12">Seal No</label>
                                <div class="col-md-12">
                                    <input type="text" name="contact" placeholder='Enter seal no'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Type of Material</label>
                                <div class="col-md-12">
                                    <input type="text" name="contact" placeholder='Enter seal no'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Seal No</label>
                                <div class="col-md-12">
                                    <input type="text" name="contact" placeholder='Enter seal no'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Address</label>
                                <div class="col-md-12">
                                    <input type="address" name="address" placeholder='Eg: East Legon - Accra'
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