<?php

$success_transport_store = $this->session->userdata('success_transport_store');
$failure_transport_store = $this->session->userdata('failure_transport_store');

$success_transport_update = $this->session->userdata('success_transport_update');
$failure_transport_update = $this->session->userdata('failure_transport_update');

$success_transport_delete = $this->session->userdata('success_transport_delete');
$failure_transport_delete = $this->session->userdata('failure_transport_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');


if (isset($success_transport_store) && ($success_transport_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The transport activity record has been added successfully
    </div>
    ";
} else if (isset($failure_transport_store) && $failure_transport_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The transport activity record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_transport_update) && ($success_transport_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The transport activity record has been updated succesffully
    </div>
    ";
} else if (isset($failure_transport_update) && $failure_transport_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The transport activity record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_transport_delete) && ($success_transport_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The transport activity record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_transport_delete) && $failure_transport_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The transport activity record could not be deleted, this may be a Server issue, Please try again later
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
$array = array('success_transport_store', 'failure_transport_store',
                'success_transport_update', 'failure_transport_update',
                'success_transport_delete', 'failure_transport_delete',
                'failure_upload_file');

$this->session->unset_userdata($array);
