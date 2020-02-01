<?php

$success_loading_store = $this->session->userdata('success_loading_store');
$failure_loading_store = $this->session->userdata('failure_loading_store');

$success_loading_update = $this->session->userdata('success_loading_update');
$failure_loading_update = $this->session->userdata('failure_loading_update');

$success_loading_delete = $this->session->userdata('success_loading_delete');
$failure_loading_delete = $this->session->userdata('failure_loading_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_loading_exists = $this->session->userdata('err_loading_exists');

if (isset($success_loading_store) && ($success_loading_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The loading has been added successfully
    </div>
    ";
} else if (isset($failure_loading_store) && $failure_loading_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The loading could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_loading_update) && ($success_loading_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The loading's profile has been updated succesffully
    </div>
    ";
} else if (isset($failure_loading_update) && $failure_loading_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The loading could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_loading_delete) && ($success_loading_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The loading has been deleted succesffully
    </div>
    ";
} else if (isset($failure_loading_delete) && $failure_loading_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The loading could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> $failure_upload_file
    </div>
    ";
} else if (isset($err_loading_exists)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The company name you entered for the loading already exists, please use a different name
    </div>
    ";
}
// clear session
$array = array('success_loading_store', 'failure_loading_store',
                'success_loading_update', 'failure_loading_update',
                'success_loading_delete', 'failure_loading_delete',
                'failure_upload_file', 'err_loading_exists');

$this->session->unset_userdata($array);
