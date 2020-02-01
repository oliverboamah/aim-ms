<?php

$success_record_store = $this->session->userdata('success_record_store');
$failure_record_store = $this->session->userdata('failure_record_store');

$success_record_update = $this->session->userdata('success_record_update');
$failure_record_update = $this->session->userdata('failure_record_update');

$success_record_delete = $this->session->userdata('success_record_delete');
$failure_record_delete = $this->session->userdata('failure_record_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');
$err_not_enough_funds = $this->session->userdata('err_not_enough_funds');

if (isset($success_record_store) && ($success_record_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been added successfully
    </div>
    ";
} else if (isset($failure_record_store) && $failure_record_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_record_update) && ($success_record_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been updated succesffully
    </div>
    ";
} else if (isset($failure_record_update) && $failure_record_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_record_delete) && ($success_record_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_record_delete) && $failure_record_delete == true) {
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
} else if (isset($err_not_enough_funds) && $err_not_enough_funds == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> Not Enough funds to perform this operation
    </div>
    ";
}
// clear session
$array = array('success_record_store', 'failure_record_store',
                'success_record_update', 'failure_record_update',
                'success_record_delete', 'failure_record_delete',
                'err_not_enough_funds');

$this->session->unset_userdata($array);
