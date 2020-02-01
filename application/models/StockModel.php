<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StockModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('stock', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('stock', $data)->row();
    }

    public function all()
    {
        $query = "SELECT stock_id, staff_id, supplier_id, supplier_rep, girth_start, girth_end, num_bend, 
        num_short_len, num_full_len, price_bend, price_short_len, price_full_len, amount, date_of_stock,
         (SELECT name FROM supplier WHERE stock.supplier_id = supplier.supplier_id) AS supplier_name,
         (SELECT contact FROM supplier WHERE stock.supplier_id = supplier.supplier_id) AS supplier_contact,
         (SELECT address FROM supplier WHERE stock.supplier_id = supplier.supplier_id) AS supplier_address,
         (SELECT name FROM staff WHERE stock.staff_id = staff.staff_id) AS staff_name,
         (SELECT department FROM staff WHERE stock.staff_id = staff.staff_id) AS staff_department
         FROM stock 
         WHERE stock.deleted = false";

        return $this->db->query($query)->result();
    }

    public function update($stock_id, $data)
    {
        $this->db->where('stock_id', $stock_id);
        return $this->db->update('stock', $data);
    }

    public function update_image($stock_id, $data)
    {
        $this->db->where('stock_id', $stock_id);
        return $this->db->update('stock', $data);
    }

    public function delete($stock_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('stock_id', $stock_id);
        return $this->db->update('stock', $data);
    }

}
