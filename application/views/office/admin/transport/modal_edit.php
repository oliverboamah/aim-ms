<div class="modal fade" id="edit_transport" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update Transport Activity Record</h4>
                    </div>
                    <form id="edit_transport_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('TransportActivity/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Credit</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_credit" name="credit"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Credit Date</label>
                                <div class="col-md-12">
                                <input type="date" id="edit_date_credit" name="date_credit"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Credit Paid by</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_credit_paid_by" name="credit_paid_by"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_balance" name="balance"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Loading Date</label>
                                <div class="col-md-12">
                                    <input type="date" id="edit_date_loading" name="date_loading"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Container Pickup Fee</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_container_pickup_fee" name="container_pickup_fee"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Picking Place</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_picking_place" name="picking_place"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Truck No.</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_truck_no" name="truck_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Shipping Line</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_shipping_line" name="shipping_line"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Container No.</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_container_no" name="container_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Seal No.</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_seal_no" name="seal_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container No.</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_container_no2" name="container_no2"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container Seal No.</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_seal_no2" name="seal_no2"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Offloading Place</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_offloading_place" name="offloading_place"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">2nd Container Driver</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_driver_name2" name="driver_name2"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Driver Name</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_driver_name" name="driver_name"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver No.</label>
                                <div class="col-md-12">
                                    <input type="tel" id="edit_driver_no" name="driver_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Driver L/C No.</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_driver_license_no" name="driver_license_no"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Place of Loading</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_loading_place" name="loading_place"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">TPT Name</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_tpt_name" name="tpt_name"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Commission</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_commission" name="commission"
                                           class="form-control form-control-line" >
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-12">Total TPT</label>
                                <div class="col-md-12">
                                    <input type="double" id="edit_total_tpt" name="total_tpt"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Advance</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_advance" name="advance"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Advance Date</label>
                                <div class="col-md-12">
                                    <input type="date" id="edit_date_advance" name="date_advance"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Mode of Payment</label>
                                <div class="col-md-12">
                                <select name="payment_mode" id="edit_payment_mode" 
                                           class="form-control form-control-line" required>
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
                                    <input type="number" id="edit_extra_payment" name="extra_payment"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">After Loading Expenses</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_after_loading" name="after_loading"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Road Exp/Council Ticket</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_road_expenses" name="road_expenses"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery Date</label>
                                <div class="col-md-12">
                                    <input type="date" id="edit_date_delivery" name="date_delivery"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery Location</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_delivery" name="delivery"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance Left</label>
                                <div class="col-md-12">
                                    <input type="number" id="edit_balance_left" name="balance_left"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Balance Left Paid By</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_balance_left_paid_by" name="balance_left_paid_by"
                                           class="form-control form-control-line" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Total Expenses</label>
                                <div class="col-md-12">
                                    <input type="text" id="edit_total_expenses" name="total_expenses"
                                           class="form-control form-control-line" >
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