<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{
    public function store()
    {
        $status = array();

        $supplier_rep = $this->input->post('supplier_rep');
        $supplier = $this->input->post('supplier');
        $supplier_id = substr(explode(' ', $supplier)[0], 1);
        $girth_start = $this->input->post('girth_start');
        $girth_end = $this->input->post('girth_end');
        $num_bend = $this->input->post('num_bend');
        $num_short_len = $this->input->post('num_short_len');
        $num_full_len = $this->input->post('num_full_len');
        $price_bend = $this->input->post('price_bend');
        $price_short_len = $this->input->post('price_short_len');
        $price_full_len = $this->input->post('price_full_len');
        $date_of_stock = $this->input->post('date_of_stock');

        $amount = ($num_bend * $price_bend) + ($num_short_len * $price_short_len) + ($num_full_len * $price_full_len);

        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'supplier_rep' => $supplier_rep,
            'supplier_id' => $supplier_id,
            'girth_start' => $girth_start,
            'girth_end' => $girth_end,
            'num_bend' => $num_bend,
            'num_short_len' => $num_short_len,
            'num_full_len' => $num_full_len,
            'price_bend' => $price_bend,
            'price_short_len' => $price_short_len,
            'price_full_len' => $price_full_len,
            'date_of_stock' => $date_of_stock,
            'amount' => $amount,
            
        );
        if ($this->StockModel->store($data)) {
            $status['success_stock_store'] = true;
        } else {
            $status['failure_stock_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/stock');
    }

    public function update($stock_id)
    {
        $status = array();

        $supplier_rep = $this->input->post('supplier_rep');
        $supplier = $this->input->post('supplier');
        $supplier_id = substr(explode(' ', $supplier)[0], 1);
        $girth_start = $this->input->post('girth_start');
        $girth_end = $this->input->post('girth_end');
        $num_bend = $this->input->post('num_bend');
        $num_short_len = $this->input->post('num_short_len');
        $num_full_len = $this->input->post('num_full_len');
        $price_bend = $this->input->post('price_bend');
        $price_short_len = $this->input->post('price_short_len');
        $price_full_len = $this->input->post('price_full_len');
        $date_of_stock = $this->input->post('date_of_stock');

        $amount = ($num_bend * $price_bend) + ($num_short_len * $price_short_len) + ($num_full_len * $price_full_len);

        $data = array(
            'supplier_rep' => $supplier_rep,
            'supplier_id' => $supplier_id,
            'girth_start' => $girth_start,
            'girth_end' => $girth_end,
            'num_bend' => $num_bend,
            'num_short_len' => $num_short_len,
            'num_full_len' => $num_full_len,
            'price_bend' => $price_bend,
            'price_short_len' => $price_short_len,
            'price_full_len' => $price_full_len,
            'date_of_stock' => $date_of_stock,
            'amount' => $amount,
            
        );
        if ($this->StockModel->update($stock_id, $data)) {
            $status['success_stock_update'] = true;
        } else {
            $status['failure_stock_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/stock');
    }

    public function delete_permission($stock_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Stock/delete/') . $stock_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this stock',
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

    public function delete($stock_id)
    {
        $status = array();

        if ($this->StockModel->delete($stock_id)) {
            $status["success_stock_delete"] = true;
        } else {
            $status["failure_stock_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/stock');
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
