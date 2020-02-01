<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package2 extends CI_Controller
{
	public function store()
	{
		$status = array();

		$container_no = $this->input->post('container_no');
		$seal_no = $this->input->post('seal_no');
		$truck_no = $this->input->post('truck_no');
		$driver_name = $this->input->post('driver_name');
		$driver_license_no = $this->input->post('driver_license_no');
		$driver_phone = $this->input->post('driver_phone');
		$loading_place = $this->input->post('loading_place');
		$date = $this->input->post('date');

		$data = array(
			'accountant_id' => $this->session->userdata('staff_id'),
			'container_no' => $container_no,
			'seal_no' => $seal_no,
			'truck_no' => $truck_no,
			'driver_name' => $driver_name,
			'driver_license_no' => $driver_license_no,
			'driver_phone' => $driver_phone,
			'loading_place' => $loading_place,
			'date' => $date
		);
		if ($this->Package2Model->store($data)) {
			$status['success_package_store'] = true;
		} else {
			$status['failure_package_store'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/package2');
	}

	public function update($package_id)
	{
		$status = array();

		$container_no = $this->input->post('container_no');
		$seal_no = $this->input->post('seal_no');
		$truck_no = $this->input->post('truck_no');
		$driver_name = $this->input->post('driver_name');
		$driver_license_no = $this->input->post('driver_license_no');
		$driver_phone = $this->input->post('driver_phone');
		$loading_place = $this->input->post('loading_place');
		$date = $this->input->post('date');

		$data = array(
			'container_no' => $container_no,
			'seal_no' => $seal_no,
			'truck_no' => $truck_no,
			'driver_name' => $driver_name,
			'driver_license_no' => $driver_license_no,
			'driver_phone' => $driver_phone,
			'loading_place' => $loading_place,
			'date' => $date
		);

		if ($this->Package2Model->update($package_id, $data)) {
			$status['success_package_update'] = true;
		} else {
			$status['failure_package_update'] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/package2');
	}

	public function delete_permission($package_id)
	{
		$sweetalert = base_url('asset/js/sweetalert.min.js');
		$url_delete = base_url('Package2/delete/') . $package_id;

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

	public function delete($package_id)
	{
		$status = array();

		if ($this->Package2Model->delete($package_id)) {
			$status["success_package_delete"] = true;
		} else {
			$status["failure_package_delete"] = true;
		}

		$this->session->set_userdata($status);
		redirect('Accountant/package2');
	}
}
