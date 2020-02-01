<?php
$failure_login = $this->session->userdata('failure_login');

if (isset($failure_login) && $failure_login == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Error!</strong> Invalid login details, check your login information and try again
    </div>
    ";
}

// clear session
$array = array('failure_login');

$this->session->unset_userdata($array);
