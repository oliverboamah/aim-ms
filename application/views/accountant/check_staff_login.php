<?php
$staff_id = $this->session->userdata('staff_id');
$current_url = $this->router->class . '/' . $this->router->method;

if (!isset($staff_id)) {
    redirect('');
}
