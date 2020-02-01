<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foreman extends CI_Controller
{
    public function index()
    {
        $this->load->view('foreman/index');
    }

    public function logout()
    {
        $this->session->unset_userdata('staff_id');
        redirect('');
    }

    public function stock()
    {
        $data = array(
            'stock' => $this->StockModel->all(),
            'suppliers' => $this->SupplierModel->all(),
        );
        $this->load->view('foreman/stock', $data);
    }

    public function logs()
    {
        $current_year = date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 1, $current_year),
            'feb_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 2, $current_year),
            'mar_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 3, $current_year),
            'apr_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 4, $current_year),
            'may_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 5, $current_year),
            'jun_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 6, $current_year),
            'jul_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 7, $current_year),
            'aug_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 8, $current_year),
            'sep_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 9, $current_year),
            'oct_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 10, $current_year),
            'nov_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 11, $current_year),
            'dec_total_amount' => $this->LogModel->get_total_amount_for_one($staff_id, 12, $current_year),

            'jan_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 1, $current_year),
            'feb_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 2, $current_year),
            'mar_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 3, $current_year),
            'apr_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 4, $current_year),
            'may_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 5, $current_year),
            'jun_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 6, $current_year),
            'jul_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 7, $current_year),
            'aug_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 8, $current_year),
            'sep_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 9, $current_year),
            'oct_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 10, $current_year),
            'nov_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 11, $current_year),
            'dec_amount_straight' => $this->LogModel->get_amount_straight_for_one($staff_id, 12, $current_year),

            'jan_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 1, $current_year),
            'feb_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 2, $current_year),
            'mar_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 3, $current_year),
            'apr_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 4, $current_year),
            'may_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 5, $current_year),
            'jun_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 6, $current_year),
            'jul_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 7, $current_year),
            'aug_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 8, $current_year),
            'sep_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 9, $current_year),
            'oct_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 10, $current_year),
            'nov_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 11, $current_year),
            'dec_amount_bend' => $this->LogModel->get_total_bend_for_one($staff_id, 12, $current_year),

            'jan_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 1, $current_year),
            'feb_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 2, $current_year),
            'mar_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 3, $current_year),
            'apr_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 4, $current_year),
            'may_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 5, $current_year),
            'jun_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 6, $current_year),
            'jul_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 7, $current_year),
            'aug_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 8, $current_year),
            'sep_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 9, $current_year),
            'oct_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 10, $current_year),
            'nov_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 11, $current_year),
            'dec_amount_feet' => $this->LogModel->get_amount_feet_for_one($staff_id, 12, $current_year),

            'suppliers' => $this->SupplierModel->all(),
            'log_info' => $this->LogModel->find($staff_id),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $data['amount_straight_in_year'] = $data['jan_amount_straight'] + $data['feb_amount_straight'] + $data['mar_amount_straight'] +
            $data['apr_amount_straight'] + $data['may_amount_straight'] + $data['jun_amount_straight'] +
            $data['jul_amount_straight'] + $data['aug_amount_straight'] + $data['sep_amount_straight'] +
            $data['oct_amount_straight'] + $data['nov_amount_straight'] + $data['dec_amount_straight'];

        $data['amount_bend_in_year'] = $data['jan_amount_bend'] + $data['feb_amount_bend'] + $data['mar_amount_bend'] +
            $data['apr_amount_bend'] + $data['may_amount_bend'] + $data['jun_amount_bend'] +
            $data['jul_amount_bend'] + $data['aug_amount_bend'] + $data['sep_amount_bend'] +
            $data['oct_amount_bend'] + $data['nov_amount_bend'] + $data['dec_amount_bend'];

        $data['amount_feet_in_year'] = $data['jan_amount_feet'] + $data['feb_amount_feet'] + $data['mar_amount_feet'] +
            $data['apr_amount_feet'] + $data['may_amount_feet'] + $data['jun_amount_feet'] +
            $data['jul_amount_feet'] + $data['aug_amount_feet'] + $data['sep_amount_feet'] +
            $data['oct_amount_feet'] + $data['nov_amount_feet'] + $data['dec_amount_feet'];

            echo '<br/>';
      
       $this->load->view('foreman/logs', $data);
    }

    public function logs_item($log_info_id)
    {
        $data = array(
            'log_info' => $this->LogModel->find_row(array('log_info_id' => $log_info_id)),
            'log_straight_info' => $this->LogModel->find_logs_item('log_straight', $log_info_id),
            'log_bend_info' => $this->LogModel->find_logs_item('log_bend', $log_info_id),
            'log_feet_info' => $this->LogModel->find_logs_item('log_feet', $log_info_id),
        );

        $this->load->view('foreman/logs_item', $data);
    }

    public function loading()
    {
        $data = array(
            'loadings' => $this->LoadingModel->all(),
        );
        $this->load->view('foreman/loadings', $data);
    }

    public function transactions()
    {
        $current_year =  date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 1, $current_year),
            'feb_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 2, $current_year),
            'mar_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 3, $current_year),
            'apr_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 4, $current_year),
            'may_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 5, $current_year),
            'jun_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 6, $current_year),
            'jul_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 7, $current_year),
            'aug_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 8, $current_year),
            'sep_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 9, $current_year),
            'oct_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 10, $current_year),
            'nov_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 11, $current_year),
            'dec_total_amount' => $this->StaffTransactionModel->get_total_amount_recieved($staff_id, 12, $current_year),
            'transactions' => $this->StaffTransactionModel->find($staff_id),
        );

        $this->load->view('foreman/transactions', $data);
    }

    public function accounts($staff_transaction_id)
    {
        $data = array(
            'total_amount_recieved' => $this->StaffTransactionModel->find_row(
                array('staff_transaction_id' => $staff_transaction_id))->amount,
            'balance' => $this->StaffTransactionModel->find_row(
                array('staff_transaction_id' => $staff_transaction_id))->balance, 
            'accountable' => $this->StaffTransactionModel->find_row(
                    array('staff_transaction_id' => $staff_transaction_id))->accountable,        
            'total_amount_used' => $this->StaffAccountModel->get_total_amount_used($staff_transaction_id),    
            'accounts' => $this->StaffAccountModel->find($staff_transaction_id),
        );

        // store staff transaction id in sesssion
        $this->session->set_userdata('staff_transaction_id', $staff_transaction_id);
        $this->session->set_userdata('current_amount_in_possession', 
        $data['total_amount_recieved'] + $data['balance'] );
        $this->session->set_userdata('total_amount_used', $data['total_amount_used']);

        $this->load->view('foreman/accounts', $data);
    }

    public function foreman_staff()
    {
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'staff' => $this->ForemanStaffModel->find($staff_id),
        );
        $this->load->view('foreman/foreman_staff', $data);
    }

    public function comment($foreman_staff_id)
    {
        $data = array(
            'user' => $this->ForemanStaffModel->find_row(array('foreman_staff_id' => $foreman_staff_id)),
            'foreman_staff_id' => $foreman_staff_id,
            'comments' => $this->CommentModel->find($foreman_staff_id),
        );
        $this->load->view('foreman/comment', $data);
    }

    public function profile()
    {
        $data = array(
            'regions' => $this->RegionModel->find($admin_id),
        );
        $this->load->view('admin/profile');
    }

    public function links()
    {
        $user_id = $this->session->userdata('user_id');
        $data = array(
            'links' => $this->LinkModel->find($user_id),
        );
        $this->load->view('user/links', $data);
    }

    public function store()
    {
        $status = array();

        $email = strip_tags($this->input->post('email'));
        $password = strip_tags($this->input->post('password'));
        $confirm_password = strip_tags($this->input->post('confirm_password'));

        if ($password != $confirm_password) {
            $status['err_password_mismatch'] = true;
            $this->session->set_userdata($status);
            redirect('user/signup');
        } else {

            $data = array(
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            );

            if ($this->UserModel->store($data)) {
                $status['success_register'] = true;
                $this->session->set_userdata($status);
                redirect('user/login');
            } else {
                $status['failure_register'] = true;
                $this->session->set_userdata($status);
                redirect('user/signup');
            }
        }
    }

    public function find()
    {
        $status = array();

        $username = strip_tags($this->input->post('username'));
        $password = strip_tags($this->input->post('password'));

        $data = array(
            'username' => $username,
            'password' => $password,
        );

        $res = $this->AdminModel->find_row($data);

        if ($res) {
            $status['admin_id'] = $res->admin_id;
            $status['username'] = $res->username;
            $status['success_login'] = true;
            $this->session->set_userdata($status);
            redirect('admin/');
        } else {
            $status['failure_login'] = true;
            $this->session->set_userdata($status);
            redirect('admin/login');
        }
    }

    public function update()
    {
        $status = array();

        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password');
        $confirm_new_password = $this->input->post('confirm_new_password');

        $data = array(
            'user_id' => $this->session->userdata('user_id'),
        );

        if ($new_password != $confirm_new_password) {
            $status['err_password_mismatch'] = true;
        } else if (password_verify($current_password,
            $this->UserModel->find_row($data)->password)) {

            $user_id = $this->session->userdata('user_id');
            $filters = array(
                'user_id' => $user_id,
            );

            if ($this->UserModel->update($filters, password_hash($new_password, PASSWORD_DEFAULT))) {
                $status['success_password_update'] = true;
            } else {
                $status['failure_password_update'] = true;
            }
        } else {
            $status['err_wrong_current_password'] = true;
        }

        $this->session->set_userdata($status);
        redirect('user/profile');
    }

    public function upload_photo()
    {
        $status = array();
        $file_name = $this->do_upload('file');

        if ($file_name) {
            $data = array(
                'image' => 'uploads/user/' . $file_name,
            );
            $user_id = $this->session->userdata('user_id');
            $this->UserModel->update_image($user_id, $data);

            $status['image'] = $data['image'];
        }

        $this->session->set_userdata($status);
        redirect('user/profile');
    }

    public function do_upload($file)
    {
        $config['upload_path'] = 'uploads/user/';
        $config['file_name'] = date("Ymdhis");
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file)) {
            $status['success_upload_file'] = true;
            $this->session->set_userdata($status);
            return $this->upload->data('file_name');
        } else {
            $status['failure_upload_file'] = $this->upload->display_errors();
            $this->session->set_userdata($status);
            return false;
        }
    }

}
