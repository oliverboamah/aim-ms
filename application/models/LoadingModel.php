<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoadingModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('loading', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('loading', $data)->row();
    }

    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('loading')->result();
    }

    public function update($loading_id, $data)
    {
        $this->db->where('loading_id', $loading_id);
        return $this->db->update('loading', $data);
    }

    public function update_image($loading_id, $data)
    {
        $this->db->where('loading_id', $loading_id);
        return $this->db->update('loading', $data);
    }

    public function delete($loading_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('loading_id', $loading_id);
        return $this->db->update('loading', $data);
    }

}
