<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoices extends CI_Controller
{
    public function store($user_id)
    {
        $status = array();

        $name = $this->input->post('name');
        $file= $this->do_upload('file');
        $file_name = $file['file_name'];
        $file_size = $file['file_size'];
        $file_ext = $file['file_ext'];

        if ($file_name) {
            $data = array(
                'user_id' => $user_id,
                'name' => $name,
                'file' => 'uploads/document/' . $file_name,
                'file_size' => $file_size,
                'file_ext' => $file_ext
            );
            if ($this->InvoiceModel->store($data)) {
                $status['success_invoice_store'] = true;
            } else {
                $status['failure_invoice_store'] = true;
            }
        } 

        $this->session->set_userdata($status);
        redirect('admin/member/'.$user_id);
    }

    public function update($user_id, $document_id)
    {
        $status = array();

        $name = $this->input->post('name');
        $file= $this->do_upload('file');
        $file_name = $file['file_name'];
        $file_size = $file['file_size'];
        $file_ext = $file['file_ext'];

        if ($file_name) {
            $data = array(
                'name' => $name,
                'file' => 'uploads/document/' . $file_name,
                'file_size' => $file_size,
                'file_ext' => $file_ext
            );
            if ($this->InvoiceModel->update($document_id, $data)) {
                $status['success_invoice_update'] = true;
            } else {
                $status['failure_invoice_update'] = true;
            }
        } 

        $this->session->set_userdata($status);
        redirect('admin/member/'.$user_id);
    }

    public function delete_permission($user_id, $document_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('invoices/delete/') . $user_id . '/' . $document_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this document',
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

    public function delete($user_id, $document_id)
    {
        $status = array();

        if ($this->InvoiceModel->delete($document_id)) {
            $status["success_invoice_delete"] = true;
        } else {
            $status["failure_invoice_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/member/'.$user_id);
    }


    public function do_upload($file)
    {
        $config['upload_path'] = 'uploads/document/';
        $config['file_name'] = date("Ymdhis");
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|zip|rar|txt|rtf';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file)) {
            $data = array();
            $data['file_name'] = $this->upload->data('file_name');
            $data['file_size'] = $this->upload->data('file_size');
            $data['file_ext'] = $this->upload->data('file_ext');
            return $data;
        } else {
            $status['failure_upload_file'] = $this->upload->display_errors();
            $this->session->set_userdata($status);
            return false;
        }
    }

    // download project doc to desktop
	public function download_document($user_id, $document_id) {
        
        $this->load->helper('download');
        $url = $this->InvoiceModel->find_row(array('document_id' => $document_id))->file;
        force_download($url, NULL);

        redirect('admin/member/'.$user_id);
	}

}
