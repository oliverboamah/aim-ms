<?php

$success_salary_store = $this->session->userdata('success_salary_store');
$failure_salary_store = $this->session->userdata('failure_salary_store');

$success_salary_update = $this->session->userdata('success_salary_update');
$failure_salary_update = $this->session->userdata('failure_salary_update');

$success_salary_delete = $this->session->userdata('success_salary_delete');
$failure_salary_delete = $this->session->userdata('failure_salary_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_salary_exists = $this->session->userdata('err_salary_exists');

if (isset($success_salary_store) && ($success_salary_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The salary has been added successfully
    </div>
    ";
} else if (isset($failure_salary_store) && $failure_salary_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The salary could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_salary_update) && ($success_salary_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The salary has been updated succesffully
    </div>
    ";
} else if (isset($failure_salary_update) && $failure_salary_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The salary could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_salary_delete) && ($success_salary_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The salary has been deleted succesffully
    </div>
    ";
} else if (isset($failure_salary_delete) && $failure_salary_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The salary could not be deleted, this may be a Server issue, Please try again later
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
$array = array('success_salary_store', 'failure_salary_store',
                'success_salary_update', 'failure_salary_update',
                'success_salary_delete', 'failure_salary_delete',
                'failure_upload_file');

$this->session->unset_userdata($array);
