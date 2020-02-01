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
require 'modal_add_invoice.php';
require 'modal_edit_invoice.php';
?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Member Profile </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Member Profile</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require 'status_invoice.php';
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
                            <h5 class="card-header">Member Profile</h5>
                            <div class="card-body">

                            <div class="card-body text-center">
                                    <!-- .user-avatar -->
                                    <a href="" class="user-avatar my-3">
                                  <img src="<?php echo base_url($user->image)?>" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                   </a>
                                    <!-- /.user-avatar -->
                                    <h3 class="card-title mb-2 text-truncate">
                                    <a href=""><?php echo $user->name; ?> </a>
                                     </h3>
                                     <h6 class="card-subtitle text-muted mb-3"> 
                                     <?php echo $user->email; ?></h6>
                                     <h6 class="card-subtitle text-muted mb-3"> 
                                     <?php echo 'Gender: '. $user->gender; ?></h6>
                                     <h6 class="card-subtitle text-muted mb-3"> 
                                     <?php echo 'Contact: '. $user->contact; ?></h6>
                                     
                                     <h6 class="card-subtitle text-muted mb-3"> 
                                     <?php echo "Date Appointed: " . $user->date_appointed; ?></h6>

                                     <h6 class="card-subtitle text-muted mb-3"> 
                                     <?php echo "Date Of Exit: " . $user->date_exit; ?></h6>

                                    <p class="skills">
                                        <a href="" class="btn btn-xs btn-outline-secondary mt-1">
                                        <?php echo $user->office; ?> 
                                        </a>
                                        <a href="" class="btn btn-xs btn-outline-secondary mt-1">
                                        <?php echo $user->role; ?> 
                                        </a>
                                        <a href="" class="btn btn-xs btn-outline-success mt-1">
                                        <?php echo $user->region; ?> 
                                        </a>
                                        <a href="" class="btn btn-xs btn-outline-success mt-1">
                                        <?php echo $user->district; ?> 
                                        </a>
                                        <a href="" class="btn btn-xs btn-outline-success mt-1">
                                        <?php echo $user->location; ?> 
                                        </a>
                                        <a href="" class="btn btn-xs btn-outline-primary mt-1">Documents Uploaded</a>
                                       
                                        <a href="" class="btn btn-xs btn-warning circle mt-1">
                                        <?php echo $user->num_documents; ?> 
                                        </a>
                                    </p> 
                                </div>
                                
                            <button href="#" class="btn btn-secondary" data-toggle="modal" data-target="#add_invoice">
                                Add New Document</button><br/><br/>
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>File Type</th>
                                                <th>File Size</th>
                                                <th>Datetime Uploaded</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
foreach ($invoices as $invoice) {

    $url_download = base_url('invoices/download_document/' . $invoice->user_id . '/' . $invoice->document_id);
    $url_delete = base_url('invoices/delete_permission/' . $invoice->user_id. '/' . $invoice->document_id);
    $file_type = substr($invoice->file_ext, 1);

    echo "

            <tr>
                <td>$invoice->name</td>
                <td>$file_type</td>
                <td>$invoice->file_size KB</td>
                <td>$invoice->datetime</td>
                <td>
                <a style='margin-right: 10px;' href='$url_download' class='link' data-toggle='tooltip' title='Download'>
                <span class='badge badge-success'>
                <i class='fas fa-download'></i>
                Download</span</a>
                <a style='margin-right: 10px' title='Edit' data-user_id=$invoice->user_id data-document_id=$invoice->document_id data-name='$invoice->name'  href='' class='link edit_invoice' data-toggle='modal' data-target='#edit_invoice' title='Edit'>
                <span class='badge badge-warning'>
                <i class='far fa-edit'></i>
                Edit</span</a>
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
    
$('#table').on('click', '.edit_invoice', function() {

   // update form action
   user_id = $(this).data('user_id');
   document_id = $(this).data('document_id');
   form = $('#edit_invoice_form');
   form.attr('action', form.attr('action') + user_id + '/' + document_id);

   // retrieve details
   $('#edit_name').val($(this).data('name'));
});
});
</script>
</body>

</html>