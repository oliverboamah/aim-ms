<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sawmill extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');;

        $res = $this->SawmillModel->find_row(array('name' => $name, 'deleted' => false));

        if (!$res) {
            $data = array(
                'name' => $name
            );
            if ($this->SawmillModel->store($data)) {
                $status['success_sawmill_store'] = true;
            } else {
                $status['failure_sawmill_store'] = true;
            }
        } else {
            $status['err_sawmill_exists'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/sawmills');
    }

    public function update($sawmill_id)
    {
        $status = array();

        $name = $this->input->post('name');;

        $data = array(
            'name' => $name
        );
        if ($this->SawmillModel->update($sawmill_id, $data)) {
            $status['success_sawmill_update'] = true;
        } else {
            $status['failure_sawmill_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/sawmills');
    }

    public function delete_permission($sawmill_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Sawmill/delete/') . $sawmill_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this sawmill',
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

    public function delete($sawmill_id)
    {
        $status = array();

        if ($this->SawmillModel->delete($sawmill_id)) {
            $status["success_sawmill_delete"] = true;
        } else {
            $status["failure_sawmill_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/sawmills');
    }

    public function price_setting($type, $sawmill_id)
    {
        $status = array();

        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        $p3 = $this->input->post('p3');
        $p4 = $this->input->post('p4');
        $p5 = $this->input->post('p5');
        $p6 = $this->input->post('p6');
        $p7 = $this->input->post('p7');
        $p8 = $this->input->post('p8');
        $p9 = $this->input->post('p9');
        $p10 = $this->input->post('p10');
        $p11 = $this->input->post('p11');
        $p12= $this->input->post('p12');

        $data = array(
            'sawmill_id' => $sawmill_id,
            'type' => $type,
            'p1' => $p1,
            'p2' => $p2,
            'p3' => $p3,
            'p4' => $p4,
            'p5' => $p5,
            'p6' => $p6,
            'p7' => $p7,
            'p8' => $p8,
            'p9' => $p9,
            'p10' => $p10,
            'p11' => $p11,
            'p12' => $p12,
        );

        $res = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => $type, 'deleted' => false));

        if (!$res) {
         
            if ($this->SawmillModel->insert_price_settings($data)) {
                $status['success_sawmill_price_store'] = true;
            } else {
                $status['failure_sawmill_price_store'] = true;
            }
        } else {
     
            if ($this->SawmillModel->update_price_settings($sawmill_id, $type, $data)) {
                $status['success_sawmill_price_update'] = true;
            } else {
                $status['failure_sawmill_price_update'] = true;
            }
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/sawmills');
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
