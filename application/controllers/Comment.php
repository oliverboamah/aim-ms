<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{
    public function store($foreman_staff_id)
    {
        $status = array();

        $reason = $this->input->post('reason');
        $comment = $this->input->post('comment');
        $date_event = $this->input->post('date_event');

        $data = array(
            'foreman_staff_id' => $foreman_staff_id,
            'reason' => $reason,
            'comment' => $comment,
            'date_event' => $date_event,
        );

        if ($this->CommentModel->store($data)) {
            $status['success_comment_store'] = true;
        } else {
            $status['failure_comment_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/comment/'.$foreman_staff_id);
    }

    public function update($foreman_staff_id, $comment_id)
    {
        $status = array();
    
        $reason = $this->input->post('reason');
        $comment = $this->input->post('comment');
        $date_event = $this->input->post('date_event');

        $data = array(
            'reason' => $reason,
            'comment' => $comment,
            'date_event' => $date_event,
        );

        if ($this->CommentModel->update($comment_id, $data)) {
            $status['success_comment_update'] = true;
        } else {
            $status['failure_comment_update'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/comment/'.$foreman_staff_id);
    }

    public function delete_permission($foreman_staff_id, $comment_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Comment/delete/') . $foreman_staff_id.'/'.$comment_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this comment',
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

    public function delete($foreman_staff_id, $comment_id)
    {
        $status = array();

        if ($this->CommentModel->delete($comment_id)) {
            $status["success_comment_delete"] = true;
        } else {
            $status["failure_comment_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/comment/'.$foreman_staff_id);
    }
}
