<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');;
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');

        $res = $this->SupplierModel->find_row(array('name' => $name, 'deleted' => false));

        if (!$res) {
            $data = array(
                'name' => $name,
                'contact' => $contact,
                'address' => $address
            );
            if ($this->SupplierModel->store($data)) {
                $status['success_supplier_store'] = true;
            } else {
                $status['failure_supplier_store'] = true;
            }
        } else {
            $status['err_supplier_exists'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/suppliers');
    }

    public function update($supplier_id)
    {
        $status = array();

        $name = $this->input->post('name');;
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');

        $data = array(
            'name' => $name,
            'contact' => $contact,
            'address' => $address
        );
        if ($this->SupplierModel->update($supplier_id, $data)) {
            $status['success_supplier_update'] = true;
        } else {
            $status['failure_supplier_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/suppliers');
    }

    public function delete_permission($supplier_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Supplier/delete/') . $supplier_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this supplier',
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

    public function delete($supplier_id)
    {
        $status = array();

        if ($this->SupplierModel->delete($supplier_id)) {
            $status["success_supplier_delete"] = true;
        } else {
            $status["failure_supplier_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/suppliers');
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
