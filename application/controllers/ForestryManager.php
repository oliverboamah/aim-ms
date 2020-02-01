<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForestryManager extends CI_Controller
{
    public function index()
    {
        $this->load->view('forestry/manager/index');
    }

    public function logout()
    {
        $this->session->unset_userdata('staff_id');
        redirect('');
    }

    public function forestry_activity()
    {
        $current_year =  date("Y");
        $staff_id = $this->session->userdata('staff_id');
        
        $data = array(
            'jan_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 1, $current_year),
            'feb_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 2, $current_year),
            'mar_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 3, $current_year),
            'apr_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 4, $current_year),
            'may_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 5, $current_year),
            'jun_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 6, $current_year),
            'jul_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 7, $current_year),
            'aug_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 8, $current_year),
            'sep_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 9, $current_year),
            'oct_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 10, $current_year),
            'nov_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 11, $current_year),
            'dec_total_amount' => $this->ForestryModel->get_total_amount_recieved_for_one($staff_id, 12, $current_year),
            'activity' => $this->ForestryModel->find($staff_id)
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] + 
        $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] + 
        $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] + 
        $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];
        
        $this->load->view('forestry/manager/forestry_activity', $data);
    }
}