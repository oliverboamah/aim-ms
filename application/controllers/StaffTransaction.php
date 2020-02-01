<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffTransaction extends CI_Controller
{
    public function store($reciever_id)
    {
        $status = array();

        $sender = $this->input->post('sender');
        $payment_mode = $this->input->post('payment_mode');
        $amount = $this->input->post('amount');
        $date_sent = $this->input->post('date_sent');

        // process previous transaction balance for the reciever
        $staff_transaction_id = $this->StaffTransactionModel->get_last_transaction_id($reciever_id);
        $last_transaction_amount = $this->StaffTransactionModel->get_transaction_amount($staff_transaction_id);
        $transaction_amount_used = $this->StaffTransactionModel->get_transaction_amount_used($staff_transaction_id);
        $balance = $last_transaction_amount - $transaction_amount_used;

        // disable accountability for last transaction
        if ($balance) {
            $this->StaffTransactionModel->accountable($staff_transaction_id, false);
        }

        $data = array(
            'recorder_id' => $this->session->userdata('staff_id'),
            'sender' => $sender,
            'reciever_id' => $reciever_id,
            'payment_mode' => $payment_mode,
            'amount' => $amount,
            'balance' => $balance,
            'date_sent' => $date_sent,
        );
        if ($this->StaffTransactionModel->store($data)) {
            $status['success_transaction_store'] = true;
        } else {
            $status['failure_transaction_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Accountant/staff_transactions');
    }

    public function delete_permission($staff_transaction_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('StaffTransaction/delete/') . $staff_transaction_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this transaction',
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

    public function delete($staff_transaction_id)
    {
        $status = array();

        if ($this->StaffTransactionModel->delete($staff_transaction_id)) {
            $status["success_transaction_delete"] = true;
        } else {
            $status["failure_transaction_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Accountant/staff_transactions');
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
