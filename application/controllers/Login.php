<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    // user roles
    private $userRoles = array(
        'manager' => 'Manager',
        'accountant' => 'Accountant',
        'transport' => 'Transport',
        'foreman' => 'Foreman',
        'shipping' => 'Shipping',
        'forestry' => 'Forestry',
    );

    // user Locationes
    private $userLocation= array(
        'office' => 'Main Office',
    );

    public function find()
    {
        $status = array();

        $email = strip_tags($this->input->post('email'));
        $password = strip_tags($this->input->post('password'));
        $role = strip_tags($this->input->post('role'));
        $location = strip_tags($this->input->post('location'));

        $data = array(
            'email' => $email,
            'password' => $password,
            'location' => $location,
            'role' => $role,
            'deleted' => false,
        );

        $res = $this->StaffModel->find_row($data);

        if ($res) {
            $status['staff_id'] = $res->staff_id;
            $status['location'] = $res->location;
            $status['name'] = $res->name;
            $status['image'] = $res->image;
            $status['success_login'] = true;
            $this->session->set_userdata($status);


            // determine the type of user and his corresponding dashboard
            if ($res->location== $this->userLocation['office']
                && $res->role == $this->userRoles['manager']) {
                redirect('OfficeAdmin/');
            } else if (strpos(strtolower($res->location), 'sawmill') !== false
                && $res->role == $this->userRoles['foreman']) {
                redirect('Foreman/');
            } else if ($res->location== $this->userLocation['office']
                && $res->role == $this->userRoles['transport']) {
                redirect('TransportManager/');
            } else if ($res->location== $this->userLocation['office']
                && $res->role == $this->userRoles['forestry']) {
                redirect('ForestryManager/');
            } else if ($res->location== $this->userLocation['office']
                && $res->role == $this->userRoles['shipping']) {
                redirect('ShippingManager/');
            } else if ($res->location== $this->userLocation['office']
                && $res->role == $this->userRoles['accountant']) {
                redirect('Accountant/');
            }

        } else {
            $status['failure_login'] = true;
            $this->session->set_userdata($status);
            redirect('');
        }
    }
}
