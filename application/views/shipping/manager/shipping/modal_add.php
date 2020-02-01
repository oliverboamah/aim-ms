<div class="modal fade" id="add_shipping" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Add Shipping Activity Record</h4>
                    </div>
                    <form id="add_shipping_form" enctype="multipart/form-data" class="form-horizontal form-material" method="post"
                          action="<?php echo base_url('ShippingActivity/store') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Combined Container</label>
                                <div class="col-md-12">
                                    <input type="text" name="combined_container"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Container no.</label>
                                <div class="col-md-12">
                                <input type="text" name="container_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Seal no.</label>
                                <div class="col-md-12">
                                    <input type="text" name="seal_no"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Weight</label>
                                <div class="col-md-12">
                                    <input type="number" name="weight"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Buyer name</label>
                                <div class="col-md-12">
                                    <input type="text" name="buyer_name"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Number of Pieces</label>
                                <div class="col-md-12">
                                    <input type="number" name="num_pieces"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">CBM</label>
                                <div class="col-md-12">
                                    <input type="number" name="cbm"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                           
                            <div class="form-group">
                            <label class="col-md-12">Buyer CBM</label>
                                <div class="col-md-12">
                                    <input type="number" name="buyer_cbm"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Shipping Fees</label>
                                <div class="col-md-12">
                                    <input type="number" name="shipping_charge"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Delivery Date</label>
                                <div class="col-md-12">
                                    <input type="date" name="delivery_date"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Draft bill no.</label>
                                <div class="col-md-12">
                                    <input type="text" name="draft_bill_no"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Local Charges</label>
                                <div class="col-md-12">
                                    <input type="number" name="local_charge"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Freight</label>
                                <div class="col-md-12">
                                <input type="number" name="freight"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">OBL/PHYTO/CO</label>
                                <div class="col-md-12">
                                    <input type="text" name="obl"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">OBL no.</label>
                                <div class="col-md-12">
                                    <input type="text" name="obl_no"
                                           class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Courier</label>
                                <div class="col-md-12">
                                    <input type="text"  name="courier"
                                           class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-12">Tracking</label>
                                <div class="col-md-12">
                                    <input type="date" name="date_shipping"
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