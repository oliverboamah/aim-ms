<?php
$user_id = $this->session->userdata('admin_id');
$current_url = $this->router->class . '/' . $this->router->method;

if (!isset($user_id) && ($current_url != "admin/login")) {
    redirect('admin/login');
}
