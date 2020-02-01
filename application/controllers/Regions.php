<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regions extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');

        $data = array(
            'admin_id' => $this->session->userdata('admin_id'),
            'name' => $name,
        );
        if ($this->RegionModel->store($data)) {
            $status['success_region_store'] = true;
        } else {
            $status['failure_region_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/regions');
    }

    public function update($region_id)
    {
        $status = array();

        $name = $this->input->post('edit_name');

        $data = array(
            'name' => $name,
        );
        if ($this->RegionModel->update($region_id, $data)) {
            $status['success_region_update'] = true;
        } else {
            $status['failure_region_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/regions');
    }

    public function delete_permission($region_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('regions/delete/') . $region_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this region',
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

    public function delete($region_id)
    {
        $status = array();

        if ($this->RegionModel->delete($region_id)) {
            $status["success_region_delete"] = true;
        } else {
            $status["failure_region_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('admin/regions');
    }
}
