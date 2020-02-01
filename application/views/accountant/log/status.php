<?php

$success_log_store = $this->session->userdata('success_log_store');
$failure_log_store = $this->session->userdata('failure_log_store');

$success_log_update = $this->session->userdata('success_log_update');
$failure_log_update = $this->session->userdata('failure_log_update');

$success_log_delete = $this->session->userdata('success_log_delete');
$failure_log_delete = $this->session->userdata('failure_log_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');


if (isset($success_log_store) && ($success_log_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been added successfully
    </div>
    ";
} else if (isset($failure_log_store) && $failure_log_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_log_update) && ($success_log_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been updated succesffully
    </div>
    ";
} else if (isset($failure_log_update) && $failure_log_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_log_delete) && ($success_log_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_log_delete) && $failure_log_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The record could not be deleted, this may be a Server issue, Please try again later
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
$array = array('success_log_store', 'failure_log_store',
                'success_log_update', 'failure_log_update',
                'success_log_delete', 'failure_log_delete',
                'failure_upload_file');

$this->session->unset_userdata($array);
