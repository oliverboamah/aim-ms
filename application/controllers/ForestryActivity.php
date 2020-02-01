<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForestryActivity extends CI_Controller
{
    public function store()
    {
        $status = array();

        $permit_area = $this->input->post('permit_area');
        $date_issue = $this->input->post('date_issue');
        $date_expire =  $this->input->post('date_expire');
        $convergence =  $this->input->post('convergence');
        $cost_convergence = $this->input->post('cost_convergence');
        $cost_permit = $this->input->post('cost_permit');
        $amount_recieved = $this->input->post('amount_recieved');
        
        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'permit_area' => $permit_area,
            'date_issue' => $date_issue,
            'date_expire' => $date_expire,
            'convergence' => $convergence,
            'cost_convergence' => $cost_convergence,
            'cost_permit' => $cost_permit,
            'amount_recieved' => $amount_recieved,
        );

        if ($this->ForestryModel->store($data)) {
            $status['success_forestry_store'] = true;
        } else {
            $status['failure_forestry_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('ForestryManager/forestry_activity');
    }

    public function update($forestry_activity_id)
    {
        $status = array();

        $permit_area = $this->input->post('permit_area');
        $date_issue = $this->input->post('date_issue');
        $date_expire =  $this->input->post('date_expire');
        $convergence =  $this->input->post('convergence');
        $cost_convergence = $this->input->post('cost_convergence');
        $cost_permit = $this->input->post('cost_permit');
        $amount_recieved = $this->input->post('amount_recieved');
        
        $data = array(
            'permit_area' => $permit_area,
            'date_issue' => $date_issue,
            'date_expire' => $date_expire,
            'convergence' => $convergence,
            'cost_convergence' => $cost_convergence,
            'cost_permit' => $cost_permit,
            'amount_recieved' => $amount_recieved,
        );

        if ($this->ForestryModel->update($forestry_activity_id, $data)) {
            $status['success_forestry_update'] = true;
        } else {
            $status['failure_forestry_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('ForestryManager/forestry_activity');
    }

    public function delete_permission($forestry_activity_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('ForestryActivity/delete/') . $forestry_activity_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this record',
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

    public function delete($forestry_activity_id)
    {
        $status = array();

        if ($this->ForestryModel->delete($forestry_activity_id)) {
            $status["success_forestry_delete"] = true;
        } else {
            $status["failure_forestry_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('ForestryManager/forestry_activity');
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
