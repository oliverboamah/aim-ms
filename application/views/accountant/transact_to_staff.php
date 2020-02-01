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
require 'transact_to_staff/modal_add.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Record Money Sent to Staff Member</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Record funds allocated to a staff member</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'transact_to_staff/status.php';
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
                            <h5 class="card-header">List of Staff Members</h5>
                            <div class="card-body">

                           
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                            
                                                <th>Contact</th>
                                                <th>Department</th>
                                                <th>Role</th>
                                             
                                                <th>Date Employed</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($staff as $staff_member) {

    $url_delete = base_url('staff/delete_permission/' . $staff_member->staff_id);
    $image = base_url($staff_member->image);

    if( !($staff_member->location == 'Main Office' 
        && $staff_member->role == 'Administrator') ){


            echo "
            <tr>
            <td>$staff_member->staff_id</td>
                <td><img src='$image' width='80' height='80'/></td>
                <td>$staff_member->name</td>
            
                <td>$staff_member->contact</td>
                <td>$staff_member->location</td>
                <td>$staff_member->role</td>
             
                <td>$staff_member->date_employed</td>
                <td>
               
                <a style='margin-right: 10px;' title='Edit' data-staff_id=$staff_member->staff_id data-name='$staff_member->name' 
                data-email='$staff_member->email' data-contact='$staff_member->contact'
                data-location='$staff_member->location' data-role='$staff_member->role'
                data-date_employed='$staff_member->date_employed'
                 href='' class='link add_transaction' data-toggle='modal' data-target='#add_transaction' title='Send money'>
                <span class='badge badge-success'>
                <i class='fas fa-money-bill-alt'></i>
                Record money</span></a>
              
                 </td>

            </tr>
        ";
    }
  
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
    
    $('#table').on('click', '.add_transaction', function() {

        // update form action
        staff_id = $(this).data('staff_id');
        form = $('#add_transaction_form');
        form.attr('action', form.attr('action') + staff_id);
    });
});
</script>
</body>
</html>