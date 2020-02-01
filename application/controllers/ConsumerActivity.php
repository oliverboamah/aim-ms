<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ConsumerActivity extends CI_Controller
{
	public function store()
	{
		$status = array();

		$consumer = $this->input->post('consumer');
		$consumer_id = substr(explode(' ', $consumer)[0], 1);
		//$reciever = $this->input->post('reciever');
		$amount_recieved = $this->input->post('amount_recieved');
		$payment_mode = $this->input->post('payment_mode');
		$prev_balance = $this->ConsumerActivityModel->get_previous_balance($consumer_id);
		$date_sent = $this->input->post('date_sent');
		$bill_no = $this->input->post('bill_no');
		$party_name = $this->input->post('party_name');
		$container_no = $this->input->post('container_no');
		$pieces = $this->input->post('pieces');
		$cbm = $this->input->post('cbm');
		$average_cft = $this->input->post('average_cft');
		$price = $this->input->post('price');
		$net_cbm = $cbm - 0.750;
		$amount_sent = $net_cbm * $price;
		$current_balance = ($amount_recieved + $prev_balance) - $amount_sent;

		$data = array(
			'staff_id' => $this->session->userdata('staff_id'),
			'consumer_id' => $consumer_id,
//			'reciever' => $reciever,
			'amount_recieved' => $amount_recieved,
			'amount_sent' => $amount_sent,
			'prev_balance' => $prev_balance,
			'current_balance' => $current_balance,
			'payment_mode' => $payment_mode,
			'date_sent' => $date_sent,
			"bill_no" => $bill_no,
			"party_name" => $party_name,
			"container_no" => $container_no,
			"pieces" => $pieces,
			"cbm" => $cbm,
			"average_cft" => $average_cft,
			"price" => $price,
			"net_cbm" => $net_cbm
		);
		if ($this->ConsumerActivityModel->store($data)) {
			$status['success_buyer_activity_store'] = true;
		} else {
			$status['failure_buyer_activity_store'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/consumers_activity');
	}

	public function update($consumer_id)
	{
		$status = array();

		$consumer = $this->input->post('consumer');
		$consumer_id = substr(explode(' ', $consumer)[0], 1);
//		$reciever = $this->input->post('reciever');
		$amount_recieved = $this->input->post('amount_recieved');
		$payment_mode = $this->input->post('payment_mode');
		$prev_balance = $this->ConsumerActivityModel->get_previous_balance($consumer_id);
		$date_sent = $this->input->post('date_sent');
		$bill_no = $this->input->post('bill_no');
		$party_name = $this->input->post('party_name');
		$container_no = $this->input->post('container_no');
		$pieces = $this->input->post('pieces');
		$cbm = $this->input->post('cbm');
		$average_cft = $this->input->post('average_cft');
		$price = $this->input->post('price');
		$net_cbm = $cbm - 0.750;
		$amount_sent = $net_cbm * $price;
		$current_balance = ($amount_recieved + $prev_balance) - $amount_sent;

		$data = array(
			'consumer_id' => $consumer_id,
//			'reciever' => $reciever,
			'amount_recieved' => $amount_recieved,
			'amount_sent' => $amount_sent,
			'prev_balance' => $prev_balance,
			'current_balance' => $current_balance,
			'payment_mode' => $payment_mode,
			'date_sent' => $date_sent,
			"bill_no" => $bill_no,
			"party_name" => $party_name,
			"container_no" => $container_no,
			"pieces" => $pieces,
			"cbm" => $cbm,
			"average_cft" => $average_cft,
			"price" => $price,
			"net_cbm" => $net_cbm
		);
		if ($this->ConsumerActivityModel->update($consumer_id, $data)) {
			$status['success_buyer_activity_update'] = true;
		} else {
			$status['failure_buyer_activity_update'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/consumers_activity');
	}

	public function delete_permission($consumer_id)
	{
		$sweetalert = base_url('asset/js/sweetalert.min.js');
		$url_delete = base_url('ConsumerActivity/delete/') . $consumer_id;

		echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this buyer`s activity record',
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

	public function delete($consumer_id)
	{
		$status = array();

		if ($this->ConsumerActivityModel->delete($consumer_id)) {
			$status["success_buyer_activity_delete"] = true;
		} else {
			$status["failure_buyer_activity_delete"] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/consumers_activity');
	}

}
