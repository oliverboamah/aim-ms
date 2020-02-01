<?php

$success_other_expense_store = $this->session->userdata('success_other_expense_store');
$failure_other_expense_store = $this->session->userdata('failure_other_expense_store');

$success_other_expense_update = $this->session->userdata('success_other_expense_update');
$failure_other_expense_update = $this->session->userdata('failure_other_expense_update');

$success_other_expense_delete = $this->session->userdata('success_other_expense_delete');
$failure_other_expense_delete = $this->session->userdata('failure_other_expense_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_other_expense_exists = $this->session->userdata('err_other_expense_exists');

if (isset($success_other_expense_store) && ($success_other_expense_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been added successfully
    </div>
    ";
} else if (isset($failure_other_expense_store) && $failure_other_expense_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_other_expense_update) && ($success_other_expense_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been updated succesffully
    </div>
    ";
} else if (isset($failure_other_expense_update) && $failure_other_expense_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_other_expense_delete) && ($success_other_expense_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_other_expense_delete) && $failure_other_expense_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The record could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
}
// clear session
$array = array('success_other_expense_store', 'failure_other_expense_store',
                'success_other_expense_update', 'failure_other_expense_update',
                'success_other_expense_delete', 'failure_other_expense_delete');

$this->session->unset_userdata($array);
