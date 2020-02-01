<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OtherExpenses extends CI_Controller
{
	public function store()
	{
		$status = array();

		$sender = $this->input->post('sender');
		$reciever = $this->input->post('reciever');
		$payment_mode = $this->input->post('payment_mode');

		$amount = $this->input->post('amount');
		$purpose = $this->input->post('purpose');
		$date_transaction = $this->input->post('date_transaction');

		$data = array(
			'accountant_id' => $this->session->userdata('staff_id'),
			'sender' => $sender,
			'reciever' => $reciever,
			'payment_mode' => $payment_mode,
			'amount' => $amount,
			'purpose' => $purpose,
			'date_transaction' => $date_transaction,
		);
		if ($this->OtherExpensesModel->store($data)) {
			$status['success_other_expense_store'] = true;
		} else {
			$status['failure_other_expense_store'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/other_expenses');
	}

	public function update($expense_id)
	{
		$status = array();

		$sender = $this->input->post('sender');
		$reciever = $this->input->post('reciever');
		$payment_mode = $this->input->post('payment_mode');

		$amount = $this->input->post('amount');
		$purpose = $this->input->post('purpose');
		$date_transaction = $this->input->post('date_transaction');

		$data = array(
			'sender' => $sender,
			'reciever' => $reciever,
			'payment_mode' => $payment_mode,
			'amount' => $amount,
			'purpose' => $purpose,
			'date_transaction' => $date_transaction,
		);

		if ($this->OtherExpensesModel->update($expense_id, $data)) {
			$status['success_other_expense_update'] = true;
		} else {
			$status['failure_other_expense_update'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/other_expenses');
	}

	public function delete_permission($expense_id)
	{
		$sweetalert = base_url('asset/js/sweetalert.min.js');
		$url_delete = base_url('OtherExpenses/delete/') . $expense_id;

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

	public function delete($expense_id)
	{
		$status = array();

		if ($this->OtherExpensesModel->delete($expense_id)) {
			$status["success_other_expense_delete"] = true;
		} else {
			$status["failure_other_expense_delete"] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/other_expenses');
	}
}
