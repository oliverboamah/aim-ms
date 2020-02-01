<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CommentModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('comment', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('comment', $data)->row();
    }

    public function find($foreman_staff_id)
    {
        $this->db->where('foreman_staff_id', $foreman_staff_id);
        $this->db->where('deleted', false);
        return $this->db->get('comment')->result();
    }



    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('comment')->result();
    }

    public function update($comment_id, $data)
    {
        $this->db->where('comment_id', $comment_id);
        return $this->db->update('comment', $data);
    }

    public function delete($comment_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('comment_id', $comment_id);
        return $this->db->update('comment', $data);
    }

}
