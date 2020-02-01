<?php

$success_home_expense_store = $this->session->userdata('success_home_expense_store');
$failure_home_expense_store = $this->session->userdata('failure_home_expense_store');

$success_home_expense_update = $this->session->userdata('success_home_expense_update');
$failure_home_expense_update = $this->session->userdata('failure_home_expense_update');

$success_home_expense_delete = $this->session->userdata('success_home_expense_delete');
$failure_home_expense_delete = $this->session->userdata('failure_home_expense_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_home_expense_exists = $this->session->userdata('err_home_expense_exists');

if (isset($success_home_expense_store) && ($success_home_expense_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The home expense record has been added successfully
    </div>
    ";
} else if (isset($failure_home_expense_store) && $failure_home_expense_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The home expense record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_home_expense_update) && ($success_home_expense_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The home expense record has been updated succesffully
    </div>
    ";
} else if (isset($failure_home_expense_update) && $failure_home_expense_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The home expense record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_home_expense_delete) && ($success_home_expense_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The home expense record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_home_expense_delete) && $failure_home_expense_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The home expense record could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
}
// clear session
$array = array('success_home_expense_store', 'failure_home_expense_store',
                'success_home_expense_update', 'failure_home_expense_update',
                'success_home_expense_delete', 'failure_home_expense_delete');

$this->session->unset_userdata($array);
