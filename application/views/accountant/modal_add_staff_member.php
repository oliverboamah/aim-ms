<div class="modal fade" id="add_member" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Staff Member</h4>
                    </div>
                    <form id="book_parking_space_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Staff/store/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder='Eg: Yeboah Murdoch'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" name="email" placeholder='Eg: yeboah@yahoo.com'
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
                            <div class="form-group">
                                <label class="col-md-12">Contact</label>
                                <div class="col-md-12">
                                    <input type="tel" name="contact" placeholder='Eg: 0243 112 334'
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                         

                            <div class="form-group">
                                <label class="col-md-12">Role</label>
                                <div class="col-md-12">
                                <select class="form-control form-control-lg" name="role">
                                <option>Manager</option>
                            <option>Foreman</option>
                            <option>Accountant</option>
                            <option>Transport</option>
                            <option>Shipping</option>
                            <option>Forestry</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Location</label>
                                <div class="col-md-12">
                                <select class="form-control form-control-lg" name="location">
                                    <option>Main Office</option>
                                    <option>Bechem Sawmill</option>
                                    <option>Dormaa Sawmill</option>
                                    <option>ETC Sawmill</option>
                                </select>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12">Date Of Employment</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_employed"
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