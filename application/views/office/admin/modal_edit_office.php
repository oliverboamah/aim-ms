<div class="modal fade" id="edit_office" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Edit Office</h4>
                    </div>
                    <form id="edit_office_form" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('offices/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Name of Office</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_name" name="edit_name" placeholder='Eg: Ministry of Health'
                                           class="form-control form-control-line" required ></div>
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