<?php

$success_comment_store = $this->session->userdata('success_comment_store');
$failure_comment_store = $this->session->userdata('failure_comment_store');

$success_comment_update = $this->session->userdata('success_comment_update');
$failure_comment_update = $this->session->userdata('failure_comment_update');

$success_comment_delete = $this->session->userdata('success_comment_delete');
$failure_comment_delete = $this->session->userdata('failure_comment_delete');

if (isset($success_comment_store) && ($success_comment_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The comment has been added successfully
    </div>
    ";
} else if (isset($failure_comment_store) && $failure_comment_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The comment could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_comment_update) && ($success_comment_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The comment has been updated succesffully
    </div>
    ";
} else if (isset($failure_comment_update) && $failure_comment_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The comment could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_comment_delete) && ($success_comment_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The comment has been deleted succesffully
    </div>
    ";
} else if (isset($failure_comment_delete) && $failure_comment_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The comment could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} 
// clear session
$array = array('success_comment_store', 'failure_comment_store',
                'success_comment_update', 'failure_comment_update',
                'success_comment_delete', 'failure_comment_delete');

$this->session->unset_userdata($array);
