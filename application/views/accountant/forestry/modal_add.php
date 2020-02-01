<div class="modal fade" id="add_forestry" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Forestry Activity Record</h4>
                    </div>
                    <form id="add_forestry_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('ForestryActivity/store') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Permit Area</label>
                                <div class="col-md-12">
                                    <input type="text" name="permit_area"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Date of Issue</label>
                                <div class="col-md-12">
                                <input type="date" name="date_issue"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Date of Expire</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_expire"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Convergence</label>
                                <div class="col-md-12">
                                    <input type="text" name="convergence"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                          
                            <div class="form-group">
                            <label class="col-md-12">Cost of Convergence</label>
                                <div class="col-md-12">
                                    <input type="number" name="cost_convergence"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Cost of Permit</label>
                                <div class="col-md-12">
                                    <input type="number" name="cost_permit"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Amount Recieved</label>
                                <div class="col-md-12">
                                    <input type="number" name="amount_recieved"
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