<div class="modal fade" id="edit_forestry" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update Forestry Activity Record</h4>
                    </div>
                    <form id="edit_forestry_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('ForestryActivity/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Permit Area</label>
                                <div class="col-md-12">
                                    <input type="text" name="permit_area" id="permit_area"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Date of Issue</label>
                                <div class="col-md-12">
                                <input type="date" name="date_issue" id="date_issue"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Date of Expire</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_expire" id="date_expire"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Convergence</label>
                                <div class="col-md-12">
                                    <input type="text" name="convergence" id="convergence"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                          
                            <div class="form-group">
                            <label class="col-md-12">Cost of Convergence</label>
                                <div class="col-md-12">
                                    <input type="number" name="cost_convergence" id="cost_convergence"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Cost of Permit</label>
                                <div class="col-md-12">
                                    <input type="number" name="cost_permit" id="cost_permit"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Amount Recieved</label>
                                <div class="col-md-12">
                                    <input type="number" name="amount_recieved" id="amount_recieved"
                                           class="form-control form-control-line" required>
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