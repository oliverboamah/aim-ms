<?php

$success_supplier_store = $this->session->userdata('success_supplier_store');
$failure_supplier_store = $this->session->userdata('failure_supplier_store');

$success_supplier_update = $this->session->userdata('success_supplier_update');
$failure_supplier_update = $this->session->userdata('failure_supplier_update');

$success_supplier_delete = $this->session->userdata('success_supplier_delete');
$failure_supplier_delete = $this->session->userdata('failure_supplier_delete');

$failure_upload_file = $this->session->userdata('failure_upload_file');

$err_supplier_exists = $this->session->userdata('err_supplier_exists');

if (isset($success_supplier_store) && ($success_supplier_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The Supplier has been added successfully
    </div>
    ";
} else if (isset($failure_supplier_store) && $failure_supplier_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The Supplier could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_supplier_update) && ($success_supplier_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The Supplier's profile has been updated succesffully
    </div>
    ";
} else if (isset($failure_supplier_update) && $failure_supplier_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The Supplier could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_supplier_delete) && ($success_supplier_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The Supplier has been deleted succesffully
    </div>
    ";
} else if (isset($failure_supplier_delete) && $failure_supplier_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The Supplier could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} else if (isset($failure_upload_file)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> $failure_upload_file
    </div>
    ";
} else if (isset($err_supplier_exists)) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> The company name you entered for the supplier already exists, please use a different name
    </div>
    ";
}
// clear session
$array = array('success_supplier_store', 'failure_supplier_store',
                'success_supplier_update', 'failure_supplier_update',
                'success_supplier_delete', 'failure_supplier_delete',
                'failure_upload_file', 'err_supplier_exists');

$this->session->unset_userdata($array);
