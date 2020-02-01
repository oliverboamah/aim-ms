<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SawmillModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('sawmill', $data);
    }

    public function insert_price_settings($data)
    {
        return $this->db->insert('sawmill_price', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('sawmill', $data)->row();
    }

    public function find_saw_mill_price_row($data)
    {
        return $this->db->get_where('sawmill_price', $data)->row();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.location = sawmill.name) AS foreman
        FROM sawmill
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.location = sawmill.name) AS foreman
        FROM sawmill
        Where deleted = false 
        AND staff_id = $staff_id";

        return $this->db->query($query)->result();
    }

    public function update($sawmill_id, $data)
    {
        $this->db->where('sawmill_id', $sawmill_id);
        return $this->db->update('sawmill', $data);
    }

    public function update_price_settings($sawmill_id, $type, $data)
    {
        $this->db->where('sawmill_id', $sawmill_id);
        $this->db->where('type', $type);

        return $this->db->update('sawmill_price', $data);
    }

    public function update_image($sawmill_id, $data)
    {
        $this->db->where('sawmill_id', $sawmill_id);
        return $this->db->update('sawmill', $data);
    }

    public function delete($sawmill_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('sawmill_id', $sawmill_id);
        return $this->db->update('sawmill', $data);
    }

}
