<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'sawmills' => $this->SawmillModel->all()
        );

       $this->load->view('home/index', $data);
    }

    public function buyer_login()
    {
       $this->load->view('home/buyer_login');
    }
}
