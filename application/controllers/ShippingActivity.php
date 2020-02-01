<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShippingActivity extends CI_Controller
{
    public function store()
    {
        $status = array();

        $combined_container = $this->input->post('combined_container');
        $container_no = $this->input->post('container_no');
        $seal_no =  $this->input->post('seal_no');
        $weight =  $this->input->post('weight');
        $buyer_name = $this->input->post('buyer_name');
        $num_pieces = $this->input->post('num_pieces');
        $cbm = $this->input->post('cbm');
        $buyer_cbm = $this->input->post('buyer_cbm');
        $shipping_charge = $this->input->post('shipping_charge');
        $delivery_date = $this->input->post('delivery_date');
        $draft_bill_no = $this->input->post('draft_bill_no');
        $local_charge = $this->input->post('local_charge');
        $freight = $this->input->post('freight');
        $obl = $this->input->post('obl');
        $obl_no = $this->input->post('obl_no');
        $courier = $this->input->post('courier');
        $date_shipping = $this->input->post('date_shipping');


        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'combined_container' => $combined_container,
            'container_no' => $container_no,
            'buyer_name' => $buyer_name,
            'seal_no' => $seal_no,
            'weight' => $weight,
            'buyer_name' => $buyer_name,
            'num_pieces' => $num_pieces,
            'cbm' => $cbm,
            'shipping_charge' => $shipping_charge,
            'buyer_cbm' => $buyer_cbm,
            'delivery_date' => $delivery_date,
            'draft_bill_no' => $draft_bill_no,
            'local_charge' => $local_charge,
            'freight' => $freight,
            'obl' => $obl,
            'obl_no' => $obl_no,
            'courier' => $courier,
            'date_shipping' => $date_shipping,
        );
        if ($this->ShippingModel->store($data)) {
            $status['success_shipping_store'] = true;
        } else {
            $status['failure_shipping_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('ShippingManager/shipping_activity');
    }

    public function update($shipping_activity_id)
    {
        $status = array();

        $combined_container = $this->input->post('combined_container');
        $container_no = $this->input->post('container_no');
        $seal_no =  $this->input->post('seal_no');
        $weight =  $this->input->post('weight');
        $buyer_name = $this->input->post('buyer_name');
        $num_pieces = $this->input->post('num_pieces');
        $cbm = $this->input->post('cbm');
        $buyer_cbm = $this->input->post('buyer_cbm');
        $shipping_charge = $this->input->post('shipping_charge');
        $delivery_date = $this->input->post('delivery_date');
        $draft_bill_no = $this->input->post('draft_bill_no');
        $local_charge = $this->input->post('local_charge');
        $freight = $this->input->post('freight');
        $obl = $this->input->post('obl');
        $obl_no = $this->input->post('obl_no');
        $courier = $this->input->post('courier');
        $date_shipping = $this->input->post('date_shipping');

        $data = array(
            'combined_container' => $combined_container,
            'container_no' => $container_no,
            'buyer_name' => $buyer_name,
            'seal_no' => $seal_no,
            'weight' => $weight,
            'buyer_name' => $buyer_name,
            'num_pieces' => $num_pieces,
            'cbm' => $cbm,
            'shipping_charge' => $shipping_charge,
            'buyer_cbm' => $buyer_cbm,
            'delivery_date' => $delivery_date,
            'draft_bill_no' => $draft_bill_no,
            'local_charge' => $local_charge,
            'freight' => $freight,
            'obl' => $obl,
            'obl_no' => $obl_no,
            'courier' => $courier,
            'date_shipping' => $date_shipping,
        );
        if ($this->ShippingModel->update($shipping_activity_id, $data)) {
            $status['success_shipping_update'] = true;
        } else {
            $status['failure_shipping_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('ShippingManager/shipping_activity');
    }

    public function delete_permission($shipping_activity_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('ShippingActivity/delete/') . $shipping_activity_id;

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

    public function delete($shipping_activity_id)
    {
        $status = array();

        if ($this->ShippingModel->delete($shipping_activity_id)) {
            $status["success_shipping_delete"] = true;
        } else {
            $status["failure_shipping_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('ShippingManager/shipping_activity');
    }

}