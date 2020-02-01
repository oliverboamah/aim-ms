<?php

$success_invoice_store = $this->session->userdata('success_invoice_store');
$failure_invoice_store = $this->session->userdata('failure_invoice_store');

$success_invoice_update = $this->session->userdata('success_invoice_update');
$failure_invoice_update = $this->session->userdata('failure_invoice_update');

$success_invoice_delete = $this->session->userdata('success_invoice_delete');
$failure_invoice_delete = $this->session->userdata('failure_invoice_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

if (isset($success_invoice_store) && ($success_invoice_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The Invoice has been added successfully
    </div>
    ";
} else if (isset($failure_invoice_store) && $failure_invoice_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The Invoice could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_invoice_update) && ($success_invoice_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The Invoice has been updated succesffully
    </div>
    ";
} else if (isset($failure_invoice_update) && $failure_invoice_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The Invoice could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_invoice_delete) && ($success_invoice_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The Invoice has been deleted succesffully
    </div>
    ";
} else if (isset($failure_invoice_delete) && $failure_invoice_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The Invoice could not be deleted, this may be a Server issue, Please try again later
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
$array = array('success_invoice_store', 'failure_invoice_store',
                'success_invoice_update', 'failure_invoice_update',
                'success_invoice_delete', 'failure_invoice_delete',
                'failure_upload_file');

$this->session->unset_userdata($array);
