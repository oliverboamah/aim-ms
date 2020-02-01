<?php

$user_id = $this->session->userdata('user_id');
$err_password_mismatch = $this->session->userdata('err_password_mismatch');
$success_register = $this->session->userdata('success_register');
$failure_register = $this->session->userdata('failure_register');

$user_id = $this->session->userdata('user_id');
$email = $this->session->userdata('email');
$success_login = $this->session->userdata('success_login');
$failure_login = $this->session->userdata('failure_login');

if (isset($err_password_mismatch) && ($err_password_mismatch == true)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong>Passwords do not match
    </div>
    ";
} else if (isset($success_register) && $success_register == true) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> Account created successfully
    </div>
    ";
} else if (isset($failure_register) && $failure_register == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The email you chose has already been used by an existing account
    </div>
    ";
} else if (isset($success_login) && $success_login == true && isset($user_id) && isset($email)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Welcome back $email!</strong>, It's great to see you again
    </div>
    ";
} else if (isset($failure_login) && $failure_login == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> Invalid Email or Password
    </div>
    ";
}

// clear session
$array = array('err_password_mismatch', 'success_register', 'failure_register', 'success_login', 'failure_login');

$this->session->unset_userdata($array);
