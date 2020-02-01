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

                         <br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>StaffID</th>
                                                <th>Foreman(Supervisor)</th>
                                                <th>Location</th>
                                                <th>Name of Worker</th>
                                                <th>Contact</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($staff as $member) {

    $url_view = base_url('OfficeAdmin/comment/' . $member->foreman_staff_id);


    echo "

                                                        <tr>
                                                           
                                                            <td>$member->foreman_staff_id</td>
                                                            <td>$member->foreman</td>
                                                            <td>$member->location</td>
                                                            <td>$member->name</td>
                                                            <td>$member->contact</td>
                                                        
                                                            <td>
                                                            <a style='margin-right: 10px;' href='$url_view' class='link' data-toggle='tooltip' title='View'>
                                                            <span class='badge badge-success'>
                                                            <i class='fas fa-eye'></i>
                                                            Comments</span></a>
                                                    
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