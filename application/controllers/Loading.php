<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loading extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $department = $this->input->post('department');
        $role = $this->input->post('role');
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $date_employed = $this->input->post('date_employed');

        $res = $this->StaffModel->find_row(array('email' => $email));

        if (!$res) {
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'department' => $department,
                'role' => $role,
                'contact' => $contact,
                'address' => $address,
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
        redirect('officeadmin/staff');
    }

    public function update($staff_id)
    {
        $status = array();

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $department = $this->input->post('department');
        $role = $this->input->post('role');
        $contact = $this->input->post('contact');
        $address = $this->input->post('address');
        $date_employed = $this->input->post('date_employed');

        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'department' => $department,
            'role' => $role,
            'contact' => $contact,
            'address' => $address,
            'date_employed' => $date_employed,
        );
        if ($this->StaffModel->update($staff_id, $data)) {
            $status['success_member_update'] = true;
        } else {
            $status['failure_member_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('officeadmin/staff');
    }

    public function delete_permission($member_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('staff/delete/') . $member_id;

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
        redirect('officeadmin/staff');
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
