<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $location = $this->input->post('location');
        $role = $this->input->post('role');
        $contact = $this->input->post('contact');
        $nationality = $this->input->post('nationality');

        $date_employed = $this->input->post('date_employed');

        $is_already_foreman = $this->StaffModel->find_row(array('name' => $location, 'deleted' => false));
        if ($is_already_foreman) {
            $status['err_foreman_exists'] = true;
            $this->session->set_userdata($status);
            redirect('OfficeAdmin/staff');
            return;
        }

        $res = $this->StaffModel->find_row(array('email' => $email, 'deleted' => false));

        if (!$res) {
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'location' => $location,
                'role' => $role,
                'contact' => $contact,
                'nationality' => $nationality,
                'date_employed' => $date_employed,
            );
            if ($this->StaffModel->store($data)) {
                $status['success_member_store'] = true;
            } else {
                $status['failure_member_store'] = true;
            }
        } else {
            $status['err_staff_email_exists'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/staff');
    }

    public function update($staff_id)
    {
        $status = array();

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $location = $this->input->post('location');
        $role = $this->input->post('role');
        $contact = $this->input->post('contact');
        $nationality = $this->input->post('nationality');

        $date_employed = $this->input->post('date_employed');

        // TO DO
        // $is_already_foreman = $this->StaffModel->find_existing_row($staff_id, $location);

        // if ($is_already_foreman) {
        //     $status['err_foreman_exists'] = true;
        //     $this->session->set_userdata($status);
        //     redirect('OfficeAdmin/staff');
        //     return;
        // }

        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'location' => $location,
            'role' => $role,
            'contact' => $contact,
            'nationality' => $nationality,
            'date_employed' => $date_employed,
        );
        if ($this->StaffModel->update($staff_id, $data)) {
            $status['success_member_update'] = true;
        } else {
            $status['failure_member_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/staff');
    }

    public function delete_permission($member_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Staff/delete/') . $member_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this member',
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

    public function delete($member_id)
    {
        $status = array();

        if ($this->StaffModel->delete($member_id)) {
            $status["success_member_delete"] = true;
        } else {
            $status["failure_member_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('OfficeAdmin/staff');
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
