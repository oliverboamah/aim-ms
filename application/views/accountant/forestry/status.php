<?php

$success_forestry_store = $this->session->userdata('success_forestry_store');
$failure_forestry_store = $this->session->userdata('failure_forestry_store');

$success_forestry_update = $this->session->userdata('success_forestry_update');
$failure_forestry_update = $this->session->userdata('failure_forestry_update');

$success_forestry_delete = $this->session->userdata('success_forestry_delete');
$failure_forestry_delete = $this->session->userdata('failure_forestry_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');


if (isset($success_forestry_store) && ($success_forestry_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The foresty activity record has been added successfully
    </div>
    ";
} else if (isset($failure_forestry_store) && $failure_forestry_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The foresty activity record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_forestry_update) && ($success_forestry_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The foresty activity record has been updated succesffully
    </div>
    ";
} else if (isset($failure_forestry_update) && $failure_forestry_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The foresty activity record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_forestry_delete) && ($success_forestry_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The foresty activity record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_forestry_delete) && $failure_forestry_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The foresty activity record could not be deleted, this may be a Server issue, Please try again later
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
$array = array('success_forestry_store', 'failure_forestry_store',
                'success_forestry_update', 'failure_forestry_update',
                'success_forestry_delete', 'failure_forestry_delete',
                'failure_upload_file');

$this->session->unset_userdata($array);
