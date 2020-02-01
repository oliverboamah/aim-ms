<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Salary extends CI_Controller
{
    public function store($reciever_id)
    {
        $status = array();

        $staff = $this->input->post('staff');
        $staff_id = substr(explode(' ', $staff)[0], 1);
        $payment_mode = $this->input->post('payment_mode');
        $amount = $this->input->post('amount');
		$currency = $this->input->post('currency');
        $date_paid = $this->input->post('date_paid');


        $data = array(
            'recorder_id' => $this->session->userdata('staff_id'),
            'sender_id' => $staff_id,
            'reciever_id' => $reciever_id,
            'payment_mode' => $payment_mode,
            'amount' => $amount,
            'currency' => $currency,
            'date_paid' => $date_paid,
        );
        if ($this->SalaryModel->store($data)) {
            $status['success_salary_store'] = true;
        } else {
            $status['failure_salary_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Accountant/salary');
    }

    public function update($salary_id)
    {
        $status = array();

        $staff = $this->input->post('staff');
        $staff_id = substr(explode(' ', $staff)[0], 1);
        $payment_mode = $this->input->post('payment_mode');
        $amount = $this->input->post('amount');
		$currency = $this->input->post('currency');
        $date_paid = $this->input->post('date_paid');


        $data = array(
            'recorder_id' => $this->session->userdata('staff_id'),
            'sender_id' => $staff_id,
            'payment_mode' => $payment_mode,
            'amount' => $amount,
			'currency' => $currency,
            'date_paid' => $date_paid,
        );
        if ($this->SalaryModel->update($salary_id, $data)) {
            $status['success_salary_update'] = true;
        } else {
            $status['failure_salary_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Accountant/salary');
    }

    public function delete_permission($salary_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Salary/delete/') . $salary_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this salary record',
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

    public function delete($salary_id)
    {
        $status = array();

        if ($this->SalaryModel->delete($salary_id)) {
            $status["success_salary_delete"] = true;
        } else {
            $status["failure_salary_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Accountant/salary');
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
