<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuyerLogin extends CI_Controller
{
    public function find()
    {
        $status = array();

        $email = strip_tags($this->input->post('email'));
        $password = strip_tags($this->input->post('password'));

        $data = array(
            'email' => $email,
            'password' => $password,
        );

        $res = $this->ConsumerModel->find_row($data);

        if ($res) {
            $status['staff_id'] = $res->consumer_id;
            $status['name'] = $res->name;
            $status['success_login'] = true;

            $this->session->set_userdata($status);
            redirect('BuyerDashboard/');

        } else {
            $status['failure_login'] = true;
            $this->session->set_userdata($status);
            redirect('Home/buyer_login');
        }

       
    }
}
