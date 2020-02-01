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
require 'supplier/modal_add.php';
require 'supplier/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Suppliers Profile </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Suppliers Profile</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'supplier/status.php';
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
                            <h5 class="card-header">Suppliers Profile</h5>
                            <div class="card-body">

                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_supplier">
                                Add New Supplier</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Contact</th>                 
                                                <th>Address</th>
                                                <th>Datetime Added</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($suppliers as $supplier) {

    $url_delete = base_url('Supplier/delete_permission/' . $supplier->supplier_id);
    echo "

                                                        <tr>
                                                            <td>$supplier->name</td>                                     
                                                            <td>$supplier->contact</td>
                                                            <td>$supplier->address</td>
                                                            <td>$supplier->created_at</td>
                                                            <td>
                                                            <a style='margin-right: 10px;' title='Edit' data-supplier_id=$supplier->supplier_id data-name='$supplier->name' 
                                                           data-contact='$supplier->contact' data-address='$supplier->address'
                                                           
                                                             href='' class='link edit_member' data-toggle='modal' data-target='#edit_supplier' title='Edit'>
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
    
$('#table').on('click', '.edit_member', function() {

   // update form action
   supplier_id = $(this).data('supplier_id');
   form = $('#edit_supplier_form');
   form.attr('action', form.attr('action') + supplier_id);

   // retrieve details
   $('#name').val($(this).data('name'));
   $('#contact').val($(this).data('contact'));
   $('#address').val($(this).data('address'));
});
});
</script>
</body>
</html>