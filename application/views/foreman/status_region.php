<?php

$success_region_store = $this->session->userdata('success_region_store');
$failure_region_store = $this->session->userdata('failure_region_store');

$success_region_update = $this->session->userdata('success_region_update');
$failure_region_update = $this->session->userdata('failure_region_update');

$success_region_delete = $this->session->userdata('success_region_delete');
$failure_region_delete = $this->session->userdata('failure_region_delete');

if (isset($success_region_store) && ($success_region_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The region has been added successfully
    </div>
    ";
} else if (isset($failure_region_store) && $failure_region_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The region could not be added because it already exists
    </div>
    ";
} else if (isset($success_region_update) && ($success_region_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The region has been updated succesffully
    </div>
    ";
} else if (isset($failure_region_update) && $failure_region_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The region could not be added because it already exists, change the name
    </div>
    ";
} else if (isset($success_region_delete) && ($success_region_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The region has been deleted succesffully
    </div>
    ";
} else if (isset($failure_region_delete) && $failure_region_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The region could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} 
// clear session
$array = array('success_region_store', 'failure_region_store',
                'success_region_update', 'failure_region_update',
                'success_region_delete', 'failure_region_delete');

$this->session->unset_userdata($array);
