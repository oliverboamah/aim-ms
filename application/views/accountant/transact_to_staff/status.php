<?php

$success_transaction_store = $this->session->userdata('success_transaction_store');
$failure_transaction_store = $this->session->userdata('failure_transaction_store');

$success_transaction_update = $this->session->userdata('success_transaction_update');
$failure_transaction_update = $this->session->userdata('failure_transaction_update');

$success_transaction_delete = $this->session->userdata('success_transaction_delete');
$failure_transaction_delete = $this->session->userdata('failure_transaction_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_staff_email_exists = $this->session->userdata('err_staff_email_exists');

if (isset($success_transaction_store) && ($success_transaction_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The transaction has been recorded successfully
    </div>
    ";
} else if (isset($failure_transaction_store) && $failure_transaction_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The transaction could not be recorded, this may be a server issue
    </div>
    ";
} else if (isset($success_transaction_update) && ($success_transaction_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The transaction has been updated succesffully
    </div>
    ";
} else if (isset($failure_transaction_update) && $failure_transaction_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The transaction could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_transaction_delete) && ($success_transaction_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The transaction has been deleted succesffully
    </div>
    ";
} else if (isset($failure_transaction_delete) && $failure_transaction_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The transaction could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> $failure_upload_file
    </div>
    ";
} else if (isset($err_staff_email_exists)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The email you entered already belongs to an existing Staff transaction, please use a different email
    </div>
    ";
}
// clear session
$array = array('success_transaction_store', 'failure_transaction_store',
                'success_transaction_update', 'failure_transaction_update',
                'success_transaction_delete', 'failure_transaction_delete',
                'failure_upload_file', 'err_staff_email_exists');

$this->session->unset_userdata($array);
