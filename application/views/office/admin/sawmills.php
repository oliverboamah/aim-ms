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
require 'sawmill/modal_add.php';
require 'sawmill/modal_edit.php';

require 'sawmill/straight.php';
require 'sawmill/bend.php';
require 'sawmill/feet.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Sawmills </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Sawmills</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'sawmill/status.php';
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
                            <h5 class="card-header">Sawmills</h5>
                            <div class="card-body">

                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_supplier">
                                Add New Sawmill</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Foreman</th>
                                                <th>Created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($sawmills as $sawmill) {

    $url_view = base_url('OfficeAdmin/log_prices/' . $sawmill->sawmill_id);
    $url_delete = base_url('Sawmill/delete_permission/' . $sawmill->sawmill_id);
    echo "
                                                        <tr>
                                                            <td>$sawmill->sawmill_id</td>     
                                                            <td>$sawmill->name</td>                                     
                                                            <td>$sawmill->foreman</td>
                                                            <td>$sawmill->created_at</td>
                                                            <td>
                                                            <a href=$url_view class='link' data-toggle='tooltip' title='View'>
                                                                <span class='badge badge-success'>
                                                                <i class='fas fa-eye'></i>
                                                                View</span</a>
                                                            <a style='margin-right: 10px;' title='Set'  
                                                            data-sawmill_id='$sawmill->sawmill_id'
                                                             href='' class='link straight' data-toggle='modal' data-target='#straight' title='Set'>
                                                            <span class='badge badge-info'>
                                                            <i class='fas fa-cog'></i>
                                                            Straight</span></a>
                                                            <a style='margin-right: 10px;' title='Set'  
                                                            data-sawmill_id='$sawmill->sawmill_id'
                                                             href='' class='link bend' data-toggle='modal' data-target='#bend' title='Set'>
                                                            <span class='badge badge-primary'>
                                                            <i class='fas fa-cog'></i>
                                                            Bend</span></a>
                                                            <a style='margin-right: 10px;' title='Set'  
                                                            data-sawmill_id='$sawmill->sawmill_id'
                                                             href='' class='link feet' data-toggle='modal' data-target='#feet' title='Set'>
                                                            <span class='badge badge-dark'>
                                                            <i class='fas fa-cog'></i>
                                                            4Feet</span></a>
                                                            <a style='margin-right: 10px;' title='Edit'  
                                                            data-sawmill_id='$sawmill->sawmill_id'
                                                            data-name='$sawmill->name'
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
   sawmill_id = $(this).data('sawmill_id');
   form = $('#edit_supplier_form');
   form.attr('action', form.attr('action') + sawmill_id);

   // retrieve details
   $('#name').val($(this).data('name'));
});

$('#table').on('click', '.straight', function() {
sawmill_id = $(this).data('sawmill_id');
form = $('#straight_form');
form.attr('action', form.attr('action') + sawmill_id);
});

$('#table').on('click', '.bend', function() {
sawmill_id = $(this).data('sawmill_id');
form = $('#bend_form');
form.attr('action', form.attr('action') + sawmill_id);
});

$('#table').on('click', '.feet', function() {
sawmill_id = $(this).data('sawmill_id');
form = $('#feet_form');
form.attr('action', form.attr('action') + sawmill_id);
});


});
</script>
</body>
</html>