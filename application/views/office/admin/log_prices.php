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
                                    <h2 class="pageheader-title">Logs Prices</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > LogsPrices</a></li>
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
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Straight Pieces Prices</h5>
                            <div class="card-body">
                           
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Range</th>
                                                <th>Price</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>45 - 50</td>
                                                <td>
                                                <?php if(isset($prices_straight->p1)){
                                                    echo $prices_straight->p1;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>51 - 60</td>
                                                <td>   <?php if(isset($prices_straight->p2)){
                                                    echo $prices_straight->p2;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>61 - 70</td>
                                                <td>
                                                <?php if(isset($prices_straight->p3)){
                                                    echo $prices_straight->p3;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>71 - 80</td>
                                                <td>
                                                <?php if(isset($prices_straight->p4)){
                                                    echo $prices_straight->p4;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>81 - 90</td>
                                                <td>
                                                <?php if(isset($prices_straight->p5)){
                                                    echo $prices_straight->p5;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>91 - 100</td>
                                                <td>
                                                <?php if(isset($prices_straight->p6)){
                                                    echo $prices_straight->p6;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>101 - 110</td>
                                                <td>
                                                <?php if(isset($prices_straight->p7)){
                                                    echo $prices_straight->p7;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>111 - 120</td>
                                                <td>
                                                <?php if(isset($prices_straight->p8)){
                                                    echo $prices_straight->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>121 - 130</td>
                                                <td>
                                                <?php if(isset($prices_straight->p8)){
                                                    echo $prices_straight->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>131 - 140</td>
                                                <td>
                                                <?php if(isset($prices_straight->p8)){
                                                    echo $prices_straight->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>141 - 150</td>
                                                <td>
                                                <?php if(isset($prices_straight->p11)){
                                                    echo $prices_straight->p11;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>151 UP</td>
                                                <td>
                                                <?php if(isset($prices_straight->p12)){
                                                    echo $prices_straight->p12;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Bend Pieces Prices</h5>
                            <div class="card-body">
                           
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Range</th>
                                                <th>Price</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>45 - 50</td>
                                                <td>
                                                <?php if(isset($prices_bend->p1)){
                                                    echo $prices_bend->p1;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>51 - 60</td>
                                                <td>   <?php if(isset($prices_bend->p2)){
                                                    echo $prices_bend->p2;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>61 - 70</td>
                                                <td>
                                                <?php if(isset($prices_bend->p3)){
                                                    echo $prices_bend->p3;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>71 - 80</td>
                                                <td>
                                                <?php if(isset($prices_bend->p4)){
                                                    echo $prices_bend->p4;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>81 - 90</td>
                                                <td>
                                                <?php if(isset($prices_bend->p5)){
                                                    echo $prices_bend->p5;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>91 - 100</td>
                                                <td>
                                                <?php if(isset($prices_bend->p6)){
                                                    echo $prices_bend->p6;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>101 - 110</td>
                                                <td>
                                                <?php if(isset($prices_bend->p7)){
                                                    echo $prices_bend->p7;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>111 - 120</td>
                                                <td>
                                                <?php if(isset($prices_bend->p8)){
                                                    echo $prices_bend->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>121 - 130</td>
                                                <td>
                                                <?php if(isset($prices_bend->p8)){
                                                    echo $prices_bend->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>131 - 140</td>
                                                <td>
                                                <?php if(isset($prices_bend->p8)){
                                                    echo $prices_bend->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>141 - 150</td>
                                                <td>
                                                <?php if(isset($prices_bend->p11)){
                                                    echo $prices_bend->p11;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>151 UP</td>
                                                <td>
                                                <?php if(isset($prices_bend->p12)){
                                                    echo $prices_bend->p12;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">4FT Pieces Prices</h5>
                            <div class="card-body">  
                                <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Range</th>
                                                <th>Price</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>45 - 50</td>
                                                <td>
                                                <?php if(isset($prices_feet->p1)){
                                                    echo $prices_feet->p1;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>51 - 60</td>
                                                <td>   <?php if(isset($prices_feet->p2)){
                                                    echo $prices_feet->p2;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>61 - 70</td>
                                                <td>
                                                <?php if(isset($prices_feet->p3)){
                                                    echo $prices_feet->p3;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>71 - 80</td>
                                                <td>
                                                <?php if(isset($prices_feet->p4)){
                                                    echo $prices_feet->p4;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>81 - 90</td>
                                                <td>
                                                <?php if(isset($prices_feet->p5)){
                                                    echo $prices_feet->p5;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>91 - 100</td>
                                                <td>
                                                <?php if(isset($prices_feet->p6)){
                                                    echo $prices_feet->p6;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>101 - 110</td>
                                                <td>
                                                <?php if(isset($prices_feet->p7)){
                                                    echo $prices_feet->p7;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>111 - 120</td>
                                                <td>
                                                <?php if(isset($prices_feet->p8)){
                                                    echo $prices_feet->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>121 - 130</td>
                                                <td>
                                                <?php if(isset($prices_feet->p8)){
                                                    echo $prices_feet->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>131 - 140</td>
                                                <td>
                                                <?php if(isset($prices_feet->p8)){
                                                    echo $prices_feet->p8;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>141 - 150</td>
                                                <td>
                                                <?php if(isset($prices_feet->p11)){
                                                    echo $prices_feet->p11;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>151 UP</td>
                                                <td>
                                                <?php if(isset($prices_feet->p12)){
                                                    echo $prices_feet->p12;} else {echo 'not set'; }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
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
   // $('#table').DataTable();  
});
</script>
</body>
</html>