<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeExpenses extends CI_Controller
{
	public function store()
	{
		$status = array();

		$name = $this->input->post('name');
		$amount = $this->input->post('amount');
		$purpose = $this->input->post('purpose');
		$date_transaction = $this->input->post('date_transaction');
		
		$data = array(
			'accountant_id' => $this->session->userdata('staff_id'),
			'name' => $name,
			'amount' => $amount,
			'purpose' => $purpose,
			'date_transaction' => $date_transaction,
		);
		if ($this->HomeExpensesModel->store($data)) {
			$status['success_home_expense_store'] = true;
		} else {
			$status['failure_home_expense_store'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/home_expenses');
	}

	public function update($expense_id)
	{
		$status = array();

		$name = $this->input->post('name');
		$amount = $this->input->post('amount');
		$purpose = $this->input->post('purpose');
		$date_transaction = $this->input->post('date_transaction');

		$data = array(
			'name' => $name,
			'amount' => $amount,
			'purpose' => $purpose,
			'date_transaction' => $date_transaction,
		);
		
		if ($this->HomeExpensesModel->update($expense_id, $data)) {
			$status['success_home_expense_update'] = true;
		} else {
			$status['failure_home_expense_update'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/home_expenses');
	}

	public function delete_permission($expense_id)
	{
		$sweetalert = base_url('asset/js/sweetalert.min.js');
		$url_delete = base_url('HomeExpenses/delete/') . $expense_id;

		echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this home expense record',
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

		if ($this->HomeExpensesModel->delete($expense_id)) {
			$status["success_home_expense_delete"] = true;
		} else {
			$status["failure_home_expense_delete"] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/home_expenses');
	}
}
