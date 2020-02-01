<div class="modal fade" id="edit_comment" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update Staff Details</h4>
                    </div>
                    <form id="edit_comment_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('Comment/update/'.$foreman_staff_id.'/') ?>">
                        <div class="modal-body">
                        <div class="form-group">
                                <label class="col-md-12">Reason</label>
                                <div class="col-md-12">
                                    <select type="text" id="reason" name="reason"
                                           class="form-control form-control-line">
                                        <option>Absent from work</option>
                                        <option>Late to work</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Comment</label>
                                <div class="col-md-12">
                                    <input type="text" id="comment" name="comment"
                                           class="form-control form-control-line" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Date of Event</label>
                                <div class="col-md-12">
                                    <input type="date" id="date_event" name="date_event" 
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