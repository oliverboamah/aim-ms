<!doctype html>
<html lang="en">

<?php
require 'dashboard_header.php';
?>

<body>
    <div class="dashboard-main-wrapper">
       <?php
       require ('dashboard_navigation.php');
       require ('dashboard_sidebar.php');
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Profile</h2>

                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard > Profile</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <?php
require ('status_profile.php');
?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Profile</h5>
                            <div class="card-body">
                            <div class="tab-outline">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-outline-one" data-toggle="tab" href="#outline-one" role="tab" aria-controls="home" aria-selected="false">Profile Picture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-outline-two" data-toggle="tab" href="#outline-two" role="tab" aria-controls="profile" aria-selected="false">Change Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade" id="outline-one" role="tabpanel" aria-labelledby="tab-outline-one">
                                    <form action="<?php echo base_url('user/upload_photo') ?>" enctype="multipart/form-data" method="POST">
                                            <div class="form-group">
                                            <label for="customFile">Upload Photo</label>
                                                <input required type="file" name="file" class="form-control" id="customFile">
                                            </div>
                                            <div class="form-group">
                                            <br/>
                                                <input type="submit" class="btn btn-secondary" value="Save"/>
                                            </div>
                                    </form>
                                    </div>
                                    <div class="tab-pane fade active show" id="outline-two" role="tabpanel" aria-labelledby="tab-outline-two">
                                    <form action="<?php echo base_url('user/update') ?>" method="POST">
                                            <div class="form-group">
                                                <label for="inputPassword">Current Password</label>
                                                <input required type="password" name="current_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">New Password</label>
                                                <input required type="password" name="new_password"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Confirm New Password</label>
                                                <input required type="password" name="confirm_new_password"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <br/>
                                                <input type="submit" class="btn btn-secondary" value="Change Password"/>
                                            </div>
                                    </form>
                                    </div>
                                </div>
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
</body>

</html>