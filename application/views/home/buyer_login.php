<!doctype html>
<html lang="en">
 
<?php
    include ('header.php');
?>

<body>
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center">
            <?php 
               include ('status.php');
            ?>
                <a href="<?php echo base_url() ?>">
                <h3 class="navbar-brand">AIM - MS</h3>
                </a>
                <h3>Buyer Login</h3>
                <span class="splash-description">Please enter your account information</span>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('Buyerlogin/find');?>">
                    <div class="form-group">
                        Email
                        <input class="form-control form-control-lg" name="email" type="email" placeholder="E.g: sharuk_khan@yahoo.com" autocomplete="on" required>
                    </div>
                    <div class="form-group">
                        Password
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0">
              
            </div>
        </div>
    </div>
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>