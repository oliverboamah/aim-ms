<?php

$success_login = $this->session->userdata('success_login');
$name = $this->session->userdata('name');

if (isset($success_login) && $success_login == true) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Welcome back $name!</strong> It sure is great to see you
    </div>
    ";
} 

// clear session
$array = array('success_login');

$this->session->unset_userdata($array);
