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
require 'modal_add_staff_member.php';
require 'modal_edit_staff_member.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Staff Profile </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Staff Profile</a></li>
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
                            <h5 class="card-header">Staff Profile</h5>
                            <div class="card-body">

                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_member">
                                Add New Staff Member</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Nationality</th>
                                                <th>Role</th>
                                                <th>Location</th>
                                                <th>Date Employed</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($staff as $staff_member) {

    $url_delete = base_url('Staff/delete_permission/' . $staff_member->staff_id);
    $image = base_url($staff_member->image);

    echo "

                                                        <tr>
                                                        <td>$staff_member->staff_id</td>
                                                            <td><img src='$image' width='80' height='80'/></td>
                                                            <td>$staff_member->name</td>
                                                            <td>$staff_member->email</td>
                                                            <td>$staff_member->contact</td>
                                                            <td>$staff_member->nationality</td>
                                                            <td>$staff_member->role</td>
                                                            <td>$staff_member->location</td>
                                                         
                                                      
                                                            <td>$staff_member->date_employed</td>
                                                            <td>
                                                           
                                                            <a style='margin-right: 10px;' title='Edit' data-staff_id=$staff_member->staff_id data-name='$staff_member->name' 
                                                            data-email='$staff_member->email' data-contact='$staff_member->contact'
                                                            data-location='$staff_member->location' data-role='$staff_member->role' 
                                                            data-date_employed='$staff_member->date_employed'
                                                             href='' class='link edit_member' data-toggle='modal' data-target='#edit_member' title='Edit'>
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
   staff_id = $(this).data('staff_id');
   form = $('#edit_member_form');
   form.attr('action', form.attr('action') + staff_id);

   // retrieve details
   $('#name').val($(this).data('name'));
   $('#email').val($(this).data('email'));
   $('#contact').val($(this).data('contact'));
   $('#location').val($(this).data('location'));
   $('#role').val($(this).data('role'));
   $('#date_employed').val($(this).data('date_employed'));
});
});
</script>
</body>
</html>