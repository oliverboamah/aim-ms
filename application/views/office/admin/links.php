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
require 'modal_add_link.php';
require 'modal_edit_link.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Links </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Links</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'status_link.php';
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
                            <h5 class="card-header">Links</h5>
                            <div class="card-body">

                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_link">
                                Add Cool Name For WebPage Link</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Cool Name</th>
                                                <th>Original Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($links as $link) {

    $url_delete = base_url('links/delete_permission/' . $link->link_id);

    echo "
                                                        <tr>
                                                            <td>$link->custom</td>
                                                            <td>$link->original</td>
                                                            <td><a data-link_id=$link->link_id data-custom='$link->custom' data-original='$link->original' href='' class='link edit_link' data-toggle='modal' data-target='#edit_link' title='Edit'><i class='fa fa-fw fa-edit btn-primary'></i></a>  
                                                            <a href=$url_delete class='link' data-toggle='tooltip' title='Delete'><i class='mdi mdi-delete btn-danger'></i></a>                    
                                                            </td>

                                                        </tr>
                                                    ";
}
?>


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

$('#table').on('click', '.edit_link', function() {

   // update form action 
   link_id = $(this).data('link_id');
   form = $('#edit_link_form');
   form.attr('action', form.attr('action') + link_id);

   // retrieve details
   $('#edit_original').val($(this).data('original'));
   $('#edit_custom').val($(this).data('custom'));
});
});
</script>
</body>

</html>