<div class="modal fade" id="add_transport" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Transport Activity Record</h4>
                    </div>
                    <form id="add_transport_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('TransportActivity/store') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Credit</label>
                                <div class="col-md-12">
                                    <input type="number" name="credit"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Credit Date</label>
                                <div class="col-md-12">
                                <input type="date" name="date_credit"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Credit Paid by</label>
                                <div class="col-md-12">
                                    <input type="text" name="credit_paid_by"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance</label>
                                <div class="col-md-12">
                                    <input type="number" name="balance"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Loading Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_loading"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Container Pickup Fee</label>
                                <div class="col-md-12">
                                    <input type="number" name="container_pickup_fee"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Picking Place</label>
                                <div class="col-md-12">
                                    <input type="text" name="picking_place"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Truck No.</label>
                                <div class="col-md-12">
                                    <input type="text" name="truck_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Shipping Line</label>
                                <div class="col-md-12">
                                    <input type="text" name="shipping_line"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Container No.</label>
                                <div class="col-md-12">
                                    <input type="text" name="container_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Seal No.</label>
                                <div class="col-md-12">
                                    <input type="text" name="seal_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container No.</label>
                                <div class="col-md-12">
                                    <input type="text" name="container_no2"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container Seal No.</label>
                                <div class="col-md-12">
                                    <input type="text" name="seal_no2"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Offloading Place</label>
                                <div class="col-md-12">
                                    <input type="text" name="offloading_place"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container Driver</label>
                                <div class="col-md-12">
                                    <input type="text" name="driver_name2"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Driver Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="driver_name"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver No.</label>
                                <div class="col-md-12">
                                    <input type="tel" name="driver_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver L/C No.</label>
                                <div class="col-md-12">
                                    <input type="text"  name="driver_license_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Place of Loading</label>
                                <div class="col-md-12">
                                    <input type="text" name="loading_place"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">TPT Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="tpt_name"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Commission</label>
                                <div class="col-md-12">
                                    <input type="number" name="commission"
                                           class="form-control form-control-line" >
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-12">Total TPT</label>
                                <div class="col-md-12">
                                    <input type="double" name="total_tpt"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Advance</label>
                                <div class="col-md-12">
                                    <input type="number" name="advance"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Advance Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_advance"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Mode of Payment</label>
                                <div class="col-md-12">
                                <select name="payment_mode" id="payment_mode" 
                                           class="form-control form-control-line" required >
                                          <option>Cash</option>
                                          <option>Cheque</option>
                                          <option>Bank Transfer</option>
                                          <option>Mobile Money</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Additional Payment</label>
                                <div class="col-md-12">
                                    <input type="number" name="extra_payment"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">After Loading Expenses</label>
                                <div class="col-md-12">
                                    <input type="number" name="after_loading"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Road Exp/Council Ticket</label>
                                <div class="col-md-12">
                                    <input type="number" name="road_expenses"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_delivery"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery Location</label>
                                <div class="col-md-12">
                                    <input type="text" name="delivery"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance Left</label>
                                <div class="col-md-12">
                                    <input type="number" name="balance_left"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance Left Paid By</label>
                                <div class="col-md-12">
                                    <input type="text" name="balance_left_paid_by"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Total Expenses</label>
                                <div class="col-md-12">
                                    <input type="number" name="total_expenses"
                                           class="form-control form-control-line" >
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