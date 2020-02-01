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
                                    <h2 class="pageheader-title">Comments</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Comments</a></li>
                                            </ol>
                                        </nav>
                                    </div>
   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Comments</h5>
                            <div class="card-body">

                            <div class="card-body text-center">
                               
                                    <!-- /.user-avatar -->
                                    <h3 class="card-title mb-2 text-truncate">
                                    <a href=""><?php echo $user->name; ?> </a>
                                     </h3>
                                     <h6 class="card-subtitle text-muted mb-3"> 
                                     <?php echo $user->contact; ?></h6>

                                </div>
                        <br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Reason</th>
                                                <th>Comment</th>
                                                <th>Date of Event</th>
                                                <th>Recorded at</th>
                                         
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($comments as $comment) {

    echo "

                                                        <tr>
                                                           
                                                            <td>$comment->comment_id</td>
                                                            <td>$comment->reason</td>
                                                            <td>$comment->comment</td>
                                                            <td>$comment->date_event</td>
                                                            <td>$comment->created_at</td>
                                                   
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
    
$('#table').on('click', '.edit_comment', function() {

   // update form action
   comment_id = $(this).data('comment_id');
   form = $('#edit_comment_form');
   form.attr('action', form.attr('action') + comment_id);

   // retrieve details
   $('#reason').val($(this).data('reason'));
   $('#comment').val($(this).data('comment'));
   $('#date_event').val($(this).data('date_event'));
});
});
</script>
</body>
</html>