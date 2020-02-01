<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShippingManager extends CI_Controller
{
    public function index()
    {
        $this->load->view('shipping/manager/index');
    }

    public function logout()
    {
        $this->session->unset_userdata('staff_id');
        redirect('');
    }

    public function shipping_activity()
    {
        $current_year =  date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 1, $current_year),
            'feb_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 2, $current_year),
            'mar_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 3, $current_year),
            'apr_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 4, $current_year),
            'may_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 5, $current_year),
            'jun_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 6, $current_year),
            'jul_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 7, $current_year),
            'aug_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 8, $current_year),
            'sep_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 9, $current_year),
            'oct_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 10, $current_year),
            'nov_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 11, $current_year),
            'dec_shipping_charges' => $this->ShippingModel->get_total_shipping_charges_for_one($staff_id, 12, $current_year),
          
            'jan_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 1, $current_year),
            'feb_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 2, $current_year),
            'mar_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 3, $current_year),
            'apr_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 4, $current_year),
            'may_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 5, $current_year),
            'jun_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 6, $current_year),
            'jul_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 7, $current_year),
            'aug_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 8, $current_year),
            'sep_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 9, $current_year),
            'oct_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 10, $current_year),
            'nov_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 11, $current_year),
            'dec_num_pieces' => $this->ShippingModel->get_total_num_pieces_for_one($staff_id, 12, $current_year),
           
            'activity' => $this->ShippingModel->all(),
        );

        $data['shipping_charges_in_year'] = $data['jan_shipping_charges'] + $data['feb_shipping_charges'] + 
        $data['mar_shipping_charges'] +
        $data['apr_shipping_charges'] + $data['may_shipping_charges'] + $data['jun_shipping_charges'] +
        $data['jul_shipping_charges'] + $data['aug_shipping_charges'] + $data['sep_shipping_charges'] +
        $data['oct_shipping_charges'] + $data['nov_shipping_charges'] + $data['dec_shipping_charges'];

        $data['num_pieces_in_year'] = $data['jan_num_pieces'] + $data['feb_num_pieces'] + $data['mar_num_pieces'] +
        $data['apr_num_pieces'] + $data['may_num_pieces'] + $data['jun_num_pieces'] +
        $data['jul_num_pieces'] + $data['aug_num_pieces'] + $data['sep_num_pieces'] +
        $data['oct_num_pieces'] + $data['nov_num_pieces'] + $data['dec_num_pieces'];
      
        $this->load->view('shipping/manager/shipping_activity', $data);
    }
}