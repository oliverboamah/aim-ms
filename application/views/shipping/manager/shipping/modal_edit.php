<div class="modal fade" id="edit_shipping" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Update Shipping Activity Record</h4>
                    </div>
                    <form id="edit_shipping_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('ShippingActivity/update/') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Combined Container</label>
                                <div class="col-md-12">
                                    <input type="text" name="combined_container" id="edit_combined_container"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Container no.</label>
                                <div class="col-md-12">
                                <input type="text" name="container_no" id="edit_container_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Seal no.</label>
                                <div class="col-md-12">
                                    <input type="text" name="seal_no" id="edit_seal_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Weight</label>
                                <div class="col-md-12">
                                    <input type="number" name="weight" id="edit_weight"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Buyer name</label>
                                <div class="col-md-12">
                                    <input type="text" name="buyer_name" id="edit_buyer_name"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Number of Pieces</label>
                                <div class="col-md-12">
                                    <input type="number" name="num_pieces" id="edit_num_pieces"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">CBM</label>
                                <div class="col-md-12">
                                    <input type="number" name="cbm" id="edit_cbm"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Buyer CBM</label>
                                <div class="col-md-12">
                                    <input type="number" name="buyer_cbm" id="edit_buyer_cbm"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Shipping Fees</label>
                                <div class="col-md-12">
                                    <input type="number" name="shipping_charge" id="edit_shipping_charge"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="delivery_date" id="edit_delivery_date"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Draft bill no.</label>
                                <div class="col-md-12">
                                    <input type="text" name="draft_bill_no" id="edit_draft_bill_no"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Local Charges</label>
                                <div class="col-md-12">
                                    <input type="number" name="local_charge" id="edit_local_charge"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Freight</label>
                                <div class="col-md-12">
                                <input type="number" name="freight" id="edit_freight"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">OBL/PHYTO/CO</label>
                                <div class="col-md-12">
                                    <input type="text" name="obl" id="edit_obl"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">OBL no.</label>
                                <div class="col-md-12">
                                    <input type="text" name="obl_no" id="edit_obl_no"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Courier</label>
                                <div class="col-md-12">
                                    <input type="text"  name="courier" id="edit_courier"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Tracking</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_shipping" id="edit_date_shipping"
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