<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package2Item extends CI_Controller
{
	public function store()
	{
		$status = array();

		$width = $this->input->post('width');
		$thickness = $this->input->post('thickness');
		$length = $this->input->post('length');
		$num_pieces = $this->input->post('num_pieces');
		$price = $this->input->post('price');
		$cft = ($width * $thickness * $length * $num_pieces )/ 144;
		$cbm = $cft/35.315;
		$total_price = $cbm * $price;

		$data = array(
			'package_id' => $this->session->userdata('package_id'),
			'width' => $width,
			'thickness' => $thickness,
			'length' => $length,
			'num_pieces' => $num_pieces,
			'price' => $price,
			'cft' => $cft,
			'cbm' => $cbm,
			'total_price' => $total_price
		);
		if ($this->Package2Model->store_package_item($data)) {
			$status['success_package_store'] = true;
		} else {
			$status['failure_package_store'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/package2_item/'.$this->session->userdata('package_id'));
	}

	public function update($package_item_id)
	{
        $status = array();
        
        $width = $this->input->post('width');
		$thickness = $this->input->post('thickness');
		$length = $this->input->post('length');
		$num_pieces = $this->input->post('num_pieces');
		$price = $this->input->post('price');
        $cft = ($width * $thickness * $length * $num_pieces )/ 144;
		$cbm = $cft/35.315;
		$total_price = $cbm * $price;

		$data = array(
			'width' => $width,
			'thickness' => $thickness,
			'length' => $length,
			'num_pieces' => $num_pieces,
			'price' => $price,
			'cft' => $cft,
			'cbm' => $cbm,
			'total_price' => $total_price
		);

		if ($this->Package2Model->update_package_item($package_item_id, $data)) {
			$status['success_package_update'] = true;
		} else {
			$status['failure_package_update'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/package2_item/'.$this->session->userdata('package_id'));
	}

	public function delete_permission($package_item_id)
	{
		$sweetalert = base_url('asset/js/sweetalert.min.js');
		$url_delete = base_url('Package2Item/delete/') . $package_item_id;

		echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this  record',
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

	public function delete($package_item_id)
	{
		$status = array();

		if ($this->Package2Model->delete_package_item($package_item_id)) {
			$status["success_package_delete"] = true;
		} else {
			$status["failure_package_delete"] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/package2_item/'.$this->session->userdata('package_id'));
	}
}
