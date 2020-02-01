<div class="modal fade" id="add_consumer" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add New Buyer</h4>
                    </div>
                    <form id="add_consumer_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Consumer/store/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Company Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder='Eg: Aboabo Constructions'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <label class="col-md-12">Contact</label>
                                <div class="col-md-12">
                                    <input type="tel" name="contact" placeholder='Eg: 0243 112 001'
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
                            <div class="form-group">
                                <label class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" name="email"
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="text" name="password"
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