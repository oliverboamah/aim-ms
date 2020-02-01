<!doctype html>
<html lang="en">
 
<?php
    include ('header.php');
?>

<body>
    <form class="splash-container" method="POST" action="<?php echo base_url('user/store');?>">
        <div class="card">
            <div class="card-header text-center">
                <?php 
                   include ('status_signup.php');
                ?>
              
              <a href="<?php echo base_url() ?>">
                <img width='140' height='80' class="logo-img" src="<?php echo base_url('asset/dashboard/images/logo.png');?>" alt="logo">
                </a>
                <span class="splash-description" style="margin-top: 5px"><b>Registration Form</b></span>
                <span class="splash-description" style="margin-top: -5px">Please enter your account information</span>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required placeholder="Email" autocomplete="on">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" type="password" required placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="confirm_password" type="password" required placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <span class="form-control">By creating an account, you agree to the <a href="#">terms and conditions</a></span>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
              
            </div>
            <div class="card-footer bg-white">
                <p>Already a member? <a href="<?php echo base_url('user/login') ?>" class="text-secondary">Login Here</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>