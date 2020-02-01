<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Offices extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');

        $data = array(
            'admin_id' => $this->session->userdata('admin_id'),
            'name' => $name,
        );
        if ($this->OfficeModel->store($data)) {
            $status['success_office_store'] = true;
        } else {
            $status['failure_office_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/offices');
    }

    public function update($office_id)
    {
        $status = array();

        $name = $this->input->post('edit_name');

        $data = array(
            'name' => $name,
        );
        if ($this->OfficeModel->update($office_id, $data)) {
            $status['success_office_update'] = true;
        } else {
            $status['failure_office_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/offices');
    }

    public function delete_permission($office_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('offices/delete/') . $office_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this office',
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

    public function delete($office_id)
    {
        $status = array();

        if ($this->OfficeModel->delete($office_id)) {
            $status["success_office_delete"] = true;
        } else {
            $status["failure_office_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/offices');
    }
}
