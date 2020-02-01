<?php

$success_package_store = $this->session->userdata('success_package_store');
$failure_package_store = $this->session->userdata('failure_package_store');

$success_package_update = $this->session->userdata('success_package_update');
$failure_package_update = $this->session->userdata('failure_package_update');

$success_package_delete = $this->session->userdata('success_package_delete');
$failure_package_delete = $this->session->userdata('failure_package_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_input = $this->session->userdata('err_input');
$err_all_values_empty = $this->session->userdata('err_all_values_empty');


if (isset($success_package_store) && ($success_package_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been added successfully
    </div>
    ";
} else if (isset($failure_package_store) && $failure_package_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong>The record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_package_update) && ($success_package_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been updated succesffully
    </div>
    ";
} else if (isset($failure_package_update) && $failure_package_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_package_delete) && ($success_package_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_package_delete) && $failure_package_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The record could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($err_all_values_empty) && $err_all_values_empty == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> No value entered for any of the packing pieces
    </div>
    ";
} else if (isset($err_input)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong>  $err_input
    </div>
    ";
} 
// clear session
$array = array('success_package_store', 'failure_package_store',
                'success_package_update', 'failure_package_update',
                'success_package_delete', 'failure_package_delete',
                'err_input', 'err_all_values_empty',);

$this->session->unset_userdata($array);
