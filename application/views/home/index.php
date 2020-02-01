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
                <h3>Login</h3>
                <span class="splash-description">Please enter your account information</span>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('login/find');?>">
                    <div class="form-group">
                        Email
                        <input class="form-control form-control-lg" name="email" type="email" placeholder="E.g: sharuk_khan@yahoo.com" autocomplete="on" required>
                    </div>
                    <div class="form-group">
                        Password
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        Role
                        <select class="form-control form-control-lg" name="role">
                            <option>Manager</option>
                            <option>Foreman</option>
                            <option>Accountant</option>
                            <option>Transport</option>
                            <option>Shipping</option>
                            <option>Forestry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Location
                        <select class="form-control form-control-lg" name="location">
                            <option>Main Office</option>
                            <?php 
                                                foreach($sawmills as $sawmill) {
                                                    echo '<option>' . $sawmill->name.'</option>';
                                                }
                                           ?>
                        </select>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0">
                <div class="card-footer-item card-footer-item-bordered">
                    Are you a buyer? <a href="<?php echo base_url('Home/buyer_login') ?>" class="text-secondary">Login here</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>