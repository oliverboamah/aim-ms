<?php

$success_buyer_store = $this->session->userdata('success_buyer_store');
$failure_buyer_store = $this->session->userdata('failure_buyer_store');

$success_buyer_update = $this->session->userdata('success_buyer_update');
$failure_buyer_update = $this->session->userdata('failure_buyer_update');

$success_buyer_delete = $this->session->userdata('success_buyer_delete');
$failure_buyer_delete = $this->session->userdata('failure_buyer_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_buyer_exists = $this->session->userdata('err_buyer_exists');

if (isset($success_buyer_store) && ($success_buyer_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The buyer has been added successfully
    </div>
    ";
} else if (isset($failure_buyer_store) && $failure_buyer_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The buyer could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_buyer_update) && ($success_buyer_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The buyer's profile has been updated succesffully
    </div>
    ";
} else if (isset($failure_buyer_update) && $failure_buyer_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The buyer could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_buyer_delete) && ($success_buyer_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The buyer has been deleted succesffully
    </div>
    ";
} else if (isset($failure_buyer_delete) && $failure_buyer_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The buyer could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> $failure_upload_file
    </div>
    ";
} else if (isset($err_buyer_exists)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The company name you entered for the buyer already exists, please use a different name
    </div>
    ";
}
// clear session
$array = array('success_buyer_store', 'failure_buyer_store',
                'success_buyer_update', 'failure_buyer_update',
                'success_buyer_delete', 'failure_buyer_delete',
                'failure_upload_file', 'err_buyer_exists');

$this->session->unset_userdata($array);
