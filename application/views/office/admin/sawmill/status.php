<?php

$success_sawmill_store = $this->session->userdata('success_sawmill_store');
$failure_sawmill_store = $this->session->userdata('failure_sawmill_store');

$success_sawmill_update = $this->session->userdata('success_sawmill_update');
$failure_sawmill_update = $this->session->userdata('failure_sawmill_update');

$success_sawmill_delete = $this->session->userdata('success_sawmill_delete');
$failure_sawmill_delete = $this->session->userdata('failure_sawmill_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_sawmill_exists = $this->session->userdata('err_sawmill_exists');

$success_sawmill_price_store = $this->session->userdata('success_sawmill_price_store');
$failure_sawmill_price_store = $this->session->userdata('failure_sawmill_price_store');
$success_sawmill_price_update = $this->session->userdata('success_sawmill_price_update');
$failure_sawmill_price_update = $this->session->userdata('failure_sawmill_price_update');

if (isset($success_sawmill_store) && ($success_sawmill_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The sawmill has been added successfully
    </div>
    ";
} else if (isset($failure_sawmill_store) && $failure_sawmill_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The sawmill could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_sawmill_update) && ($success_sawmill_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The sawmill has been updated succesffully
    </div>
    ";
} else if (isset($failure_sawmill_update) && $failure_sawmill_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The sawmill could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_sawmill_delete) && ($success_sawmill_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The sawmill has been deleted succesffully
    </div>
    ";
} else if (isset($failure_sawmill_delete) && $failure_sawmill_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The sawmill could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> $failure_upload_file
    </div>
    ";
} else if (isset($err_sawmill_exists)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The name you entered for the sawmill already exists, please use a different name
    </div>
    ";
} else if (isset($success_sawmill_price_store) && ($success_sawmill_price_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The sawmill's prices has been added succesffully
    </div>
    ";
} else if (isset($failure_sawmill_price_store) && $failure_sawmill_price_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The sawmill's prices could not be added, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($success_sawmill_price_update) && ($success_sawmill_price_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The sawmill's prices has been updated succesffully
    </div>
    ";
} else if (isset($failure_sawmill_price_update) && $failure_sawmill_price_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The sawmill's prices could not be updated, this may be a Server issue, Please try again later
    </div>
    ";
}
// clear session
$array = array('success_sawmill_store', 'failure_sawmill_store',
                'success_sawmill_update', 'failure_sawmill_update',
                'success_sawmill_delete', 'failure_sawmill_delete',
                'failure_upload_file', 'err_sawmill_exists',
                'success_sawmill_price_store', 'failure_sawmill_price_store',
                'success_sawmill_price_update', 'failure_sawmill_price_update',
            );

$this->session->unset_userdata($array);
