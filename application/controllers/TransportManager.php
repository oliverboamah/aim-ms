<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransportManager extends CI_Controller
{
    public function index()
    {
        $this->load->view('transport/manager/index');
    }

    public function logout()
    {
        $this->session->unset_userdata('staff_id');
        redirect('');
    }

    public function transport_activity()
    {
        $current_year = date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 1, $current_year),
            'feb_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 2, $current_year),
            'mar_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 3, $current_year),
            'apr_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 4, $current_year),
            'may_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 5, $current_year),
            'jun_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 6, $current_year),
            'jul_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 7, $current_year),
            'aug_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 8, $current_year),
            'sep_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 9, $current_year),
            'oct_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 10, $current_year),
            'nov_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 11, $current_year),
            'dec_total_expenses' => $this->TransportModel->get_total_expenses_for_one($staff_id, 12, $current_year),

            'activity' => $this->TransportModel->all(),
        );

        $data['total_expenses_in_year'] = $data['jan_total_expenses'] + $data['feb_total_expenses'] +
            $data['mar_total_expenses'] +
            $data['apr_total_expenses'] + $data['may_total_expenses'] + $data['jun_total_expenses'] +
            $data['jul_total_expenses'] + $data['aug_total_expenses'] + $data['sep_total_expenses'] +
            $data['oct_total_expenses'] + $data['nov_total_expenses'] + $data['dec_total_expenses'];

        $this->load->view('transport/manager/transport_activity', $data);
    }

}
