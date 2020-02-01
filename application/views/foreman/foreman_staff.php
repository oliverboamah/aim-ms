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
require 'staff/modal_add.php';
require 'staff/modal_edit.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Foreman Staff</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Foreman Staff</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'status_staff.php';
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
                            <h5 class="card-header">Foreman Staff</h5>
                            <div class="card-body">

                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_staff">
                                Add New Staff Member</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>StaffID</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($staff as $member) {

    $url_view = base_url('foreman/comment/' . $member->foreman_staff_id);
    $url_delete = base_url('ForemanStaff/delete_permission/' . $member->foreman_staff_id);

    echo "

                                                        <tr>
                                                           
                                                            <td>$member->foreman_staff_id</td>
                                                            <td>$member->name</td>
                                                            <td>$member->contact</td>
                                                        
                                                            <td>
                                                            <a style='margin-right: 10px;' href='$url_view' class='link' data-toggle='tooltip' title='View'>
                                                            <span class='badge badge-success'>
                                                            <i class='fas fa-eye'></i>
                                                            Comments</span></a>
                                                            <a style='margin-right: 10px;' title='Edit' 
                                                            data-foreman_staff_id=$member->foreman_staff_id 
                                                            data-name='$member->name' 
                                                            data-contact='$member->contact'
                                                            href='' class='link edit_staff' data-toggle='modal' data-target='#edit_staff' title='Edit'>
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
    
$('#table').on('click', '.edit_staff', function() {

   // update form action
   foreman_staff_id = $(this).data('foreman_staff_id');
   form = $('#edit_staff_form');
   form.attr('action', form.attr('action') + foreman_staff_id);

   // retrieve details
   $('#name').val($(this).data('name'));
   $('#contact').val($(this).data('contact'));
});
});
</script>
</body>
</html>