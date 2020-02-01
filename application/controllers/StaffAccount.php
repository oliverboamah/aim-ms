<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffAccount extends CI_Controller
{
    public function store()
    {
        $status = array();

        $purpose = $this->input->post('purpose');
        $payment_mode = $this->input->post('payment_mode');
        $amount = $this->input->post('amount');
        $detail = $this->input->post('detail');

        // retrieve info from sesssion
        $staff_transaction_id = $this->session->userdata('staff_transaction_id');
        $current_amount_in_possession = $this->session->userdata('current_amount_in_possession');
        $total_amount_used = $this->session->userdata('total_amount_used');

        if( $amount > ($current_amount_in_possession - $total_amount_used)) {
            $status['err_not_enough_funds'] = true;
        } else {
            $data = array(
                'staff_id' => $this->session->userdata('staff_id'),
                'staff_transaction_id' => $staff_transaction_id,
                'purpose' => $purpose,
                'payment_mode' => $payment_mode,
                'amount' => $amount,
                'detail' => $detail,
            );
            if ($this->StaffAccountModel->store($data)) {
                $status['success_record_store'] = true;
            } else {
                $status['failure_record_store'] = true;
            }
        }

        $this->session->set_userdata($status);
        redirect('Foreman/accounts/'.$staff_transaction_id);
    }

    public function update($staff_account_id)
    {
        $status = array();

        $purpose = $this->input->post('purpose');
        $payment_mode = $this->input->post('payment_mode');
        $amount = $this->input->post('amount');
        $detail = $this->input->post('detail');

        $data = array(
            'purpose' => $purpose,
            'payment_mode' => $payment_mode,
            'amount' => $amount,
            'detail' => $detail,
        );
        if ($this->StaffAccountModel->update($staff_account_id, $data)) {

            // $amount_remaining = $this->StaffTransactionModel->get_transaction_amount_used($staff_transaction_id);

            $status['success_record_update'] = true;
        } else {
            $status['failure_record_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/accounts/'.$this->session->userdata('staff_transaction_id'));
    }

    public function delete_permission($staff_account_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('StaffAccount/delete/') . $staff_account_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this record',
                    icon: 'warning',
                    buttons: true,
                    buttons: {
                        cancel: 'No',
                        catch: {
                            text: 'Yes',
                            value: 'catch',
                          },
                    },
                    dangerMode: true,
                  })
                  .then((value) => {
                    switch (value) {
                        case 'catch':
                        window.location = `$url_delete`;
                          break;
                        default:
                        window.history.back();
                      }
                  });
            }
            </script>
        ";
    }

    public function delete($staff_account_id)
    {
        $status = array();

        if ($this->StaffAccountModel->delete($staff_account_id)) {
            $status["success_record_delete"] = true;
        } else {
            $status["failure_record_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/accounts/'.$this->session->userdata('staff_transaction_id'));
    }

    public function do_upload($file)
    {
        $config['upload_path'] = 'uploads/user/';
        $config['file_name'] = date("Ymdhis");
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file)) {
            return $this->upload->data('file_name');
        } else {
            $status['failure_upload_file'] = $this->upload->display_errors();
            $this->session->set_userdata($status);
            return false;
        }
    }

}
