<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('supplier', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('supplier', $data)->row();
    }

    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('supplier')->result();
    }

    public function update($supplier_id, $data)
    {
        $this->db->where('supplier_id', $supplier_id);
        return $this->db->update('supplier', $data);
    }

    public function update_image($supplier_id, $data)
    {
        $this->db->where('supplier_id', $supplier_id);
        return $this->db->update('supplier', $data);
    }

    public function delete($supplier_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('supplier_id', $supplier_id);
        return $this->db->update('supplier', $data);
    }

}
