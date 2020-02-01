<div class="modal fade" id="add_stock" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Transport Activity Record</h4>
                    </div>
                    <form id="edit_stock_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('TransportActivity/store') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Truck No</label>
                                <div class="col-md-12">
                                    <input type="text" name="truck_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver's name</label>
                                <div class="col-md-12">
                                <input type="text" name="driver_name"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver's Contact</label>
                                <div class="col-md-12">
                                    <input type="tel" name="driver_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver's License No</label>
                                <div class="col-md-12">
                                    <input type="text" name="driver_license_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">1st Container No</label>
                                <div class="col-md-12">
                                    <input type="text" name="container_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container No</label>
                                <div class="col-md-12">
                                    <input type="text" name="container_no2"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Shipping Line</label>
                                <div class="col-md-12">
                                    <input type="text" name="shipping_line"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Offloading place</label>
                                <div class="col-md-12">
                                    <input type="text" name="offloading_place"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Picking Place</label>
                                <div class="col-md-12">
                                    <input type="text" name="picking_place"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Loading Place</label>
                                <div class="col-md-12">
                                    <input type="text" name="loading_place"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Total TPT</label>
                                <div class="col-md-12">
                                    <input type="number" name="total_tpt"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Advance</label>
                                <div class="col-md-12">
                                    <input type="number" name="advance"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Mode of Payment</label>
                                <div class="col-md-12">
                                <select name="payment_mode" 
                                           class="form-control form-control-line" required >
                                          <option>Cash</option>
                                          <option>Cheque</option>
                                          <option>Bank Transfer</option>
                                          <option>Mobile Money</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance</label>
                                <div class="col-md-12">
                                    <input type="number" name="balance"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance paid by</label>
                                <div class="col-md-12">
                                    <input type="text" name="balance_paid_by"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery</label>
                                <div class="col-md-12">
                                    <input type="text"  name="delivery"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Road Expenses</label>
                                <div class="col-md-12">
                                    <input type="number" name="road_expenses"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Council Ticket</label>
                                <div class="col-md-12">
                                    <input type="text" name="council_ticket"
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