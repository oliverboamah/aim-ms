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
                                    <h2 class="pageheader-title">Clean Cut Packing List Item </h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-record"><a href="#" class="breadcrumb-link">Dashboard > Packing List Item</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php

?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Clean Cut Packing List Item</h5>
                            <div class="card-body">
                            
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total Pieces  <span class="badge badge-dark">
                                 <?php echo $total_pieces; ?></span>
                            </ol>  
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-primary"></span>
                                 Total CBM  <span class="badge badge-dark">
                                 <?php echo $total_cbm; ?></span>
                                </span>
                             
                            </ol> 
                            <ol class="breadcrumb">
                                <span class="breadcrumb-item">
                                <span class="badge-dot badge-secondary"></span>
                                 CBT  <span class="badge badge-dark">
                                 <?php echo ($total_cbm * 35.315) / $total_pieces; ?></span>
                                </span>
                             
                            </ol> 
<br/><br/>


                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Length</th>
                                                <th>Girth</th>
                                                <th>CBM Net</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
foreach ($package_items as $record) {

    $url_delete = base_url('TransportActivity/delete_permission/' . $record->package_item_id);

    echo "
                                                        <tr>
                                                            <td>$record->package_item_id</td>
                                                            <td>$record->length</td>
                                                            <td>$record->girth</td>
                                                            <td>$record->cbm_net</td>
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

    $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    {
                        extend: 'excel',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Packing List Item',
                        text: 'Excel',
                    },
                    {
                        extend: 'pdf',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Packing List Item',
                        text: 'PDF',
                    },
                    {
                        extend: 'print',
                        title: 'AIM - Management System',
                        messageTop: 'Clean Cut Packing List Item',
                        text: 'Print',
                    },
                ]
});

});
</script>
</body>
</html>