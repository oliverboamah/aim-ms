<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ConsumerModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('consumer', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('consumer', $data)->row();
    }

    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('consumer')->result();
    }

    public function update($consumer_id, $data)
    {
        $this->db->where('consumer_id', $consumer_id);
        return $this->db->update('consumer', $data);
    }

    public function update_image($consumer_id, $data)
    {
        $this->db->where('consumer_id', $consumer_id);
        return $this->db->update('consumer', $data);
    }

    public function delete($consumer_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('consumer_id', $consumer_id);
        return $this->db->update('consumer', $data);
    }
}