<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Controller
{
    public function index()
    {
        $status = array();

        $query = $this->input->post('query');
        $data = array(
            'custom' => $query,
        );
        $row = $this->LinkModel->find_row($data);
        if ($row) {
            redirect($row->original);
        } else {
            $status['err_query_not_found'] = true;
            $this->session->set_userdata($status);
        }

        redirect('/');
    }
}
