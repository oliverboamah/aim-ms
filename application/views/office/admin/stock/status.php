<?php

$success_stock_store = $this->session->userdata('success_stock_store');
$failure_stock_store = $this->session->userdata('failure_stock_store');

$success_stock_update = $this->session->userdata('success_stock_update');
$failure_stock_update = $this->session->userdata('failure_stock_update');

$success_stock_delete = $this->session->userdata('success_stock_delete');
$failure_stock_delete = $this->session->userdata('failure_stock_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');


if (isset($success_stock_store) && ($success_stock_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The stock item has been added successfully
    </div>
    ";
} else if (isset($failure_stock_store) && $failure_stock_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The stock item could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_stock_update) && ($success_stock_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The stock item has been updated succesffully
    </div>
    ";
} else if (isset($failure_stock_update) && $failure_stock_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The stock item could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_stock_delete) && ($success_stock_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The stock item has been deleted succesffully
    </div>
    ";
} else if (isset($failure_stock_delete) && $failure_stock_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The stock item could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> $failure_upload_file
    </div>
    ";
} 
// clear session
$array = array('success_stock_store', 'failure_stock_store',
                'success_stock_update', 'failure_stock_update',
                'success_stock_delete', 'failure_stock_delete',
                'failure_upload_file');

$this->session->unset_userdata($array);
