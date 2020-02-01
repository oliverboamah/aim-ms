<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForemanStaff extends CI_Controller
{
    public function store()
    {
        $status = array();

        $name = $this->input->post('name');
        $contact = $this->input->post('contact');

        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'name' => $name,
            'contact' => $contact
        );

        if ($this->ForemanStaffModel->store($data)) {
            $status['success_member_store'] = true;
        } else {
            $status['failure_member_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/foreman_staff');
    }

    public function update($foremanstaff_id)
    {
        $status = array();

        $name = $this->input->post('name');
        $contact = $this->input->post('contact');

        $data = array(
            'name' => $name,
            'contact' => $contact
        );
        if ($this->ForemanStaffModel->update($foremanstaff_id, $data)) {
            $status['success_member_update'] = true;
        } else {
            $status['failure_member_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/foreman_staff');
    }

    public function delete_permission($member_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('ForemanStaff/delete/') . $member_id;

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

        if ($this->ForemanStaffModel->delete($member_id)) {
            $status["success_member_delete"] = true;
        } else {
            $status["failure_member_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/foreman_staff');
    }
}
