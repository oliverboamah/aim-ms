<!doctype html>
<html lang="en">

<?php
require 'dashboard_header.php';
?>

<body>
    <div class="dashboard-main-wrapper">

       <?php
require 'dashboard_navigation.php';
require 'dashboard_sidebar.php';
require 'stock/modal_add.php';
require 'stock/modal_view.php';
require 'stock/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Stock </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Stock</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'stock/status.php';
?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Stock</h5>
                            <div class="card-body">

                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_stock">
                                Add New Item to Stock</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>StockID</th>
                                                <th>Staff InCharge</th>
                                                <th>Suppling Company</th>
                                                <th>Girth Range</th>
                                                <th>Number Of Pieces</th>
                                                <th>Total Amount</th>
                                                <th>Date of Stock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($stock as $item) {

    $url_view = base_url('OfficeAdmin/item/' . $item->stock_id);
    $url_delete = base_url('Stock/delete_permission/' . $item->stock_id);

    $girth_range = $item->girth_start . ' - ' . $item->girth_end;
    $num_pieces = $item->num_bend + $item->num_short_len + $item->num_full_len;
    echo "

                                                        <tr>
                                           
                                                            <td>$item->stock_id</td>
                                                            <td>$item->staff_name</td>
                                                            <td>$item->supplier_name</td>
                                                            <td>$girth_range</td>
                                                            <td>$num_pieces</td>
                                                            <td>$item->amount</td>
                                                            <td>$item->date_of_stock</td>
                                                       
                                                            <td>
                                                            <a   href='' style='margin-right: 10px;' class='link view_stock' data-toggle='modal' data-target='#view_stock' title='View'
                                                            data-supplier_name='$item->supplier_name' data-supplier_rep='$item->supplier_rep' 
                                                            data-supplier_contact='$item->supplier_contact' data-supplier_address='$item->supplier_address'
                                                            data-staff_name='$item->staff_name' data-staff_department='$item->staff_department' 
                                                            data-girth_range='$girth_range' data-num_pieces='$num_pieces' 
                                                            data-num_bend='$item->num_bend'
                                                            data-num_short_len='$item->num_short_len' data-num_full_len='$item->num_full_len' 
                                                            data-price_bend='$item->price_bend' data-price_short_len='$item->price_short_len'
                                                            data-price_full_len='$item->price_full_len' data-total_amount='$item->amount' 
                                                            data-date_of_stock='$item->date_of_stock'>
                                                            <span class='badge badge-success'>
                                                            <i class='fas fa-eye'></i>
                                                            View</span></a>
                                                            <a style='margin-right: 10px;' title='Edit' 
                                                             href='' class='link edit_stock_link' data-toggle='modal' data-target='#edit_stock' title='Edit'
                                                             data-stock_id='$item->stock_id'
                                                             data-supplier='#$item->supplier_id $item->supplier_name' data-supplier_rep='$item->supplier_rep' 
                                                             data-supplier_contact='$item->supplier_contact' data-supplier_address='$item->supplier_address'
                                                             data-staff_name='$item->staff_name' data-staff_department='$item->staff_department' 
                                                             data-girth_start='$item->girth_start' data-girth_end='$item->girth_end' 
                                                             data-num_pieces='$num_pieces' data-num_bend='$item->num_bend'
                                                             data-num_short_len='$item->num_short_len' data-num_full_len='$item->num_full_len' 
                                                             data-price_bend='$item->price_bend' data-price_short_len='$item->price_short_len'
                                                             data-price_full_len='$item->price_full_len' data-total_amount='$item->amount' 
                                                             data-date_of_stock='$item->date_of_stock'>
                                                            <span class='badge badge-warning'>
                                                            <i class='fas fa-edit'></i>
                                                            Edit</span></a>
                                                            <a href=$url_delete class='link' data-toggle='tooltip' title='Delete'>
                                                            <span class='badge badge-danger'>
                                                            <i class='fas fa-trash-alt'></i>
                                                            Delete</span</a>
                                                             </td>
                                                        </tr>
                                                    ";
}
?>
</tbody>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>

<?php
    include 'dashboard_footer.php';
?>
<script type="text/javascript">
$(document).ready( function() {

    $('#table').DataTable();
    
    $('#table').on('click', '.view_stock', function() {

        // update form action
        stock_id = $(this).data('stock_id');
        form = $('#view_stock_form');
        form.attr('action', form.attr('action') + stock_id);

        // retrieve details
        $('#supplier_name').val('Supplier`s company name: ' + " " + $(this).data('supplier_name'));
        $('#supplier_rep').val('Supplier`s rep:' +  " " + $(this).data('supplier_rep'));
        $('#supplier_contact').val('Supplier`s contact:' + " " + $(this).data('supplier_contact'));
        $('#supplier_address').val('Supplier`s address:' + " " + $(this).data('supplier_address'));
        $('#staff_name').val('Staff Member InCharge name: ' + " " + $(this).data('staff_name'));
        $('#staff_department').val('Staff Member InCharge department: ' + " " + $(this).data('staff_department'));
        $('#girth_range').val('Girth Range: ' + " " + $(this).data('girth_range'));
        $('#num_pieces').val('Total Number of Pieces: ' + " " + $(this).data('num_pieces'));
        $('#num_bend').val('Number of Bend: ' + " " + $(this).data('num_bend'));
        $('#num_short_len').val('Number of Short Length: ' + " " + $(this).data('num_short_len'));
        $('#num_full_len').val('Number of Full Length: ' + " " + $(this).data('num_full_len'));
        $('#price_bend').val('Price of Bend: ' + " " + $(this).data('price_bend'));
        $('#price_short_len').val('Price of Short Length: ' + " " + $(this).data('price_short_len'));
        $('#price_full_len').val('Price of Full Length: ' + " " + $(this).data('price_full_len'));
        $('#total_amount').val('Total Amount: ' + " " + $(this).data('total_amount'));
        $('#date_of_stock').val('Date of Stock: ' + " " + $(this).data('date_of_stock'));
    });

    $('#table').on('click', '.edit_stock_link', function() {

        // update form action
        stock_id = $(this).data('stock_id');
        form = $('#edit_stock_form');
        form.attr('action', form.attr('action') + stock_id);

        // retrieve details
        $('#edit_supplier').val($(this).data('supplier'));
        $('#edit_supplier_rep').val($(this).data('supplier_rep'));
        $('#edit_supplier_contact').val($(this).data('supplier_contact'));
        $('#edit_supplier_address').val($(this).data('supplier_address'));
        $('#edit_staff_name').val( $(this).data('staff_name'));
        $('#edit_staff_department').val($(this).data('staff_department'));
        $('#edit_girth_start').val($(this).data('girth_start'));
        $('#edit_girth_end').val($(this).data('girth_end'));
        $('#edit_num_pieces').val($(this).data('num_pieces'));
        $('#edit_num_bend').val($(this).data('num_bend'));
        $('#edit_num_short_len').val($(this).data('num_short_len'));
        $('#edit_num_full_len').val($(this).data('num_full_len'));
        $('#edit_price_bend').val($(this).data('price_bend'));
        $('#edit_price_short_len').val( $(this).data('price_short_len'));
        $('#edit_price_full_len').val($(this).data('price_full_len'));
        $('#edit_total_amount').val($(this).data('total_amount'));
        $('#edit_date_of_stock').val($(this).data('date_of_stock'));
    });
});
</script>
</body>
</html>