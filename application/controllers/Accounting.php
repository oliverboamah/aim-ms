<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accounting extends CI_Controller
{
    public function store()
    {
        $status = array();

        $purpose = $this->input->post('purpose');
        $payment_mode = $this->input->post('payment_mode');
        $amount_paid = $this->input->post('amount_paid');
        $detail = $this->input->post('detail');

        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'purpose' => $purpose,
            'payment_mode' => $payment_mode,
            'amount_paid' => $amount_paid,
            'detail' => $detail,
        );
        if ($this->AccountingModel->store($data)) {
            $status['success_record_store'] = true;
        } else {
            $status['failure_record_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/accounting');
    }

    public function update($account_id)
    {
        $status = array();

        $purpose = $this->input->post('purpose');
        $payment_mode = $this->input->post('payment_mode');
        $amount_paid = $this->input->post('amount_paid');
        $detail = $this->input->post('detail');
        
        $data = array(
            'purpose' => $purpose,
            'payment_mode' => $payment_mode,
            'amount_paid' => $amount_paid,
            'detail' => $detail,
        );
        if ($this->AccountingModel->update($account_id, $data)) {
            $status['success_record_update'] = true;
        } else {
            $status['failure_record_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/accounting');
    }

    public function delete_permission($account_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Accounting/delete/') . $account_id;

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

    public function delete($account_id)
    {
        $status = array();

        if ($this->AccountingModel->delete($account_id)) {
            $status["success_record_delete"] = true;
        } else {
            $status["failure_record_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/accounting');
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
