<?php

require 'check_user_login.php';

$err_password_mismatch = $this->session->userdata('err_password_mismatch');
$err_wrong_current_password = $this->session->userdata('err_wrong_current_password');

$success_password_update = $this->session->userdata('success_password_update');
$failure_password_update = $this->session->userdata('failure_password_update');

$success_upload_file = $this->session->userdata('success_upload_file');
$failure_upload_file = $this->session->userdata('failure_upload_file');

if (isset($err_password_mismatch) && $err_password_mismatch == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> New Passwords do not match
    </div>
    ";
} else if (isset($err_wrong_current_password) && $err_wrong_current_password == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> Invalid Current Password
    </div>
    ";
} else if (isset($success_password_update) && $success_password_update == true) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> Password has been updated successfully
    </div>
    ";
} else if (isset($failure_password_update) && $failure_password_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> Could not update Password, This may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($success_upload_file) && $success_upload_file == true) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> Profile Photo has been updated successfully
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> $failure_upload_file
    </div>
    ";
}

// clear session
$array = array('err_password_mismatch', 'err_wrong_current_password',
    'success_password_update', 'failure_password_update',
    'success_upload_file', 'failure_upload_file');

$this->session->unset_userdata($array);
