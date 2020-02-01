<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consumer extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $res = $this->ConsumerModel->find_row(array('name' => $name, 'deleted' => false));

        if (!$res) {
            $data = array(
                'name' => $name,
                'contact' => $contact,
                'address' => $address,
                'email' => $email,
                'password' => $password
            );
            if ($this->ConsumerModel->store($data)) {
                $status['success_buyer_store'] = true;
            } else {
                $status['failure_buyer_store'] = true;
            }
        } else {
            $status['err_buyer_exists'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/consumers_profile');
    }

    public function update($consumer_id)
    {
        $status = array();

        $name = $this->input->post('name');;
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'name' => $name,
            'contact' => $contact,
            'address' => $address,
            'email' => $email,
            'password' => $password
        );
        if ($this->ConsumerModel->update($consumer_id, $data)) {
            $status['success_buyer_update'] = true;
        } else {
            $status['failure_buyer_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/consumers_profile');
    }

    public function delete_permission($consumer_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Consumer/delete/') . $consumer_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this buyer',
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

    public function delete($consumer_id)
    {
        $status = array();

        if ($this->ConsumerModel->delete($consumer_id)) {
            $status["success_buyer_delete"] = true;
        } else {
            $status["failure_buyer_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/consumers_profile');
    }


}
