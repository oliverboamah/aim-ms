<?php

$success_office_store = $this->session->userdata('success_office_store');
$failure_office_store = $this->session->userdata('failure_office_store');

$success_office_update = $this->session->userdata('success_office_update');
$failure_office_update = $this->session->userdata('failure_office_update');

$success_office_delete = $this->session->userdata('success_office_delete');
$failure_office_delete = $this->session->userdata('failure_office_delete');

if (isset($success_office_store) && ($success_office_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The office has been added successfully
    </div>
    ";
} else if (isset($failure_office_store) && $failure_office_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The office could not be added because it already exists
    </div>
    ";
} else if (isset($success_office_update) && ($success_office_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The office has been updated succesffully
    </div>
    ";
} else if (isset($failure_office_update) && $failure_office_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The office could not be added because it already exists, change the name
    </div>
    ";
} else if (isset($success_office_delete) && ($success_office_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The office has been deleted succesffully
    </div>
    ";
} else if (isset($failure_office_delete) && $failure_office_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The office could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} 
// clear session
$array = array('success_office_store', 'failure_office_store',
                'success_office_update', 'failure_office_update',
                'success_office_delete', 'failure_office_delete');

$this->session->unset_userdata($array);
