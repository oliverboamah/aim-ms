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
                                    <h2 class="pageheader-title">Document Preview </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Member Profile > Document Preview</a></li>
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
                            <h5 class="card-header">Document Preview</h5>
                            <div class="card-body">

                            <div class="card-body text-center">
                                
                            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src=<?php echo base_url('uploads/documents/20190425014747.docx') ?>" width='800px' height='623px' frameborder='0'>
This is an embedded 
<a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by 
<a target='_blank' href='http://office.com/webapps'>Office Online</a>.
</iframe>
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