<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransportActivity extends CI_Controller
{
    public function store()
    {
        $status = array();

        $credit = $this->input->post('credit');
        $date_credit = $this->input->post('date_credit');
        $credit_paid_by =  $this->input->post('credit_paid_by');
        $balance =  $this->input->post('balance');
        $date_loading = $this->input->post('date_loading');
        $picking_place = $this->input->post('picking_place');
        $container_pickup_fee = $this->input->post('container_pickup_fee');
        $truck_no = $this->input->post('truck_no');
        $shipping_line = $this->input->post('shipping_line');
        $container_no = $this->input->post('container_no');
        $seal_no = $this->input->post('seal_no');
        $seal_no2 = $this->input->post('seal_no2');
        $container_no2 = $this->input->post('container_no2');
        $offloading_place = $this->input->post('offloading_place');
        $driver_name = $this->input->post('driver_name');
        $driver_name2 = $this->input->post('driver_name2');
        $driver_no = $this->input->post('driver_no');
        $driver_license_no = $this->input->post('driver_license_no');

        $loading_place = $this->input->post('loading_place');
        $tpt_name = $this->input->post('tpt_name');
        $commission = $this->input->post('commission');
        $total_tpt = $this->input->post('total_tpt');
        $advance = $this->input->post('advance');
        $date_advance = $this->input->post('date_advance');
        $payment_mode = $this->input->post('payment_mode');

        $extra_payment = $this->input->post('extra_payment');
        $after_loading = $this->input->post('after_loading');
        $road_expenses = $this->input->post('road_expenses');
        $date_delivery = $this->input->post('date_delivery');
        $delivery = $this->input->post('delivery');
        $balance_left = $this->input->post('balance_left');
        $balance_left_paid_by = $this->input->post('balance_left_paid_by');
        $total_expenses = $this->input->post('total_expenses');

        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'credit' => $credit,
            'date_credit' => $date_credit,
            'credit_paid_by' => $credit_paid_by,
            'balance' => $balance,
            'date_loading' => $date_loading,
            'container_pickup_fee' => $container_pickup_fee,
            'picking_place' => $picking_place,
            'truck_no' => $truck_no,
            'shipping_line' => $shipping_line,
            'container_no' => $container_no,

            'seal_no' => $seal_no,
            'seal_no2' => $seal_no2,
            'container_no2' => $container_no2,
            'offloading_place' => $offloading_place,
            'driver_name' => $driver_name,
            'driver_name2' => $driver_name2,
            'driver_no' => $driver_no,
            'driver_license_no' => $driver_license_no,

            'loading_place' => $loading_place,
            'tpt_name' => $tpt_name,
            'commission' => $commission,
            'total_tpt' => $total_tpt,
        
            'advance' => $advance,
            'date_advance' => $date_advance,
            'payment_mode' => $payment_mode,
            'extra_payment' => $extra_payment,
            'after_loading' => $after_loading,
            'road_expenses' => $road_expenses,

            'date_delivery' => $date_delivery,
            'delivery' => $delivery,
            'balance_left' => $balance_left,
            'balance_left_paid_by' => $balance_left_paid_by,
            'total_expenses' => $total_expenses,
        );
        if ($this->TransportModel->store($data)) {
            $status['success_transport_store'] = true;
        } else {
            $status['failure_transport_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('TransportManager/transport_activity');
    }

    public function update($transport_activity_id)
    {
        $status = array();

        $credit = $this->input->post('credit');
        $date_credit = $this->input->post('date_credit');
        $credit_paid_by =  $this->input->post('credit_paid_by');
        $balance =  $this->input->post('balance');
        $date_loading = $this->input->post('date_loading');
        $picking_place = $this->input->post('picking_place');
        $container_pickup_fee = $this->input->post('container_pickup_fee');
        $truck_no = $this->input->post('truck_no');
        $shipping_line = $this->input->post('shipping_line');
        $container_no = $this->input->post('container_no');
        $seal_no = $this->input->post('seal_no');
        $seal_no2 = $this->input->post('seal_no2');
        $container_no2 = $this->input->post('container_no2');
        $offloading_place = $this->input->post('offloading_place');
        $driver_name = $this->input->post('driver_name');
        $driver_name2 = $this->input->post('driver_name2');
        $driver_no = $this->input->post('driver_no');
        $driver_license_no = $this->input->post('driver_license_no');
        $date_advance = $this->input->post('date_advance');
        $loading_place = $this->input->post('loading_place');
        $tpt_name = $this->input->post('tpt_name');
        $commission = $this->input->post('commission');
        $total_tpt = $this->input->post('total_tpt');
        $advance = $this->input->post('advance');
        $payment_mode = $this->input->post('payment_mode');

        $extra_payment = $this->input->post('extra_payment');
        $after_loading = $this->input->post('after_loading');
        $road_expenses = $this->input->post('road_expenses');
        $date_delivery = $this->input->post('date_delivery');
        $delivery = $this->input->post('delivery');
        $balance_left = $this->input->post('balance_left');
        $balance_left_paid_by = $this->input->post('balance_left_paid_by');
        $total_expenses = $this->input->post('total_expenses');

        $data = array(
            'credit' => $credit,
            'date_credit' => $date_credit,
            'credit_paid_by' => $credit_paid_by,
            'balance' => $balance,
            'date_loading' => $date_loading,
            'container_pickup_fee' => $container_pickup_fee,
            'picking_place' => $picking_place,
            'truck_no' => $truck_no,
            'shipping_line' => $shipping_line,
            'container_no' => $container_no,

            'seal_no' => $seal_no,
            'seal_no2' => $seal_no2,
            'container_no2' => $container_no2,
            'offloading_place' => $offloading_place,
            'driver_name' => $driver_name,
            'driver_name2' => $driver_name2,
            'driver_no' => $driver_no,
            'driver_license_no' => $driver_license_no,

            'loading_place' => $loading_place,
            'tpt_name' => $tpt_name,
            'commission' => $commission,
            'total_tpt' => $total_tpt,
        
            'advance' => $advance,
            'date_advance' => $date_advance,
            'payment_mode' => $payment_mode,
            'extra_payment' => $extra_payment,
            'after_loading' => $after_loading,
            'road_expenses' => $road_expenses,

            'date_delivery' => $date_delivery,
            'delivery' => $delivery,
            'balance_left' => $balance_left,
            'balance_left_paid_by' => $balance_left_paid_by,
            'total_expenses' => $total_expenses,
        );
        if ($this->TransportModel->update($transport_activity_id, $data)) {
            $status['success_transport_update'] = true;
        } else {
            $status['failure_transport_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('TransportManager/transport_activity');
    }

    public function delete_permission($transport_activity_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('TransportActivity/delete/') . $transport_activity_id;

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

    public function delete($transport_activity_id)
    {
        $status = array();

        if ($this->TransportModel->delete($transport_activity_id)) {
            $status["success_transport_delete"] = true;
        } else {
            $status["failure_transport_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('TransportManager/transport_activity');
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
