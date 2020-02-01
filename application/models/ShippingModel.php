<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShippingModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('shipping', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('shipping', $data)->row();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff_id = shipping.staff_id ) as name
        FROM shipping
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function update($shipping_id, $data)
    {
        $this->db->where('shipping_id', $shipping_id);
        return $this->db->update('shipping', $data);
    }


    public function delete($shipping_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('shipping_id', $shipping_id);
        return $this->db->update('shipping', $data);
    }

    public function get_total_shipping_charges($month, $year)
    {
        $query = "SELECT SUM(shipping_charge) as total_shipping_charges
        FROM shipping
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_shipping_charges) {
                return $row->total_shipping_charges;
            }
        }

        return 0;
    }

    public function get_total_shipping_charges_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(shipping_charge) as total_shipping_charges
        FROM shipping
        WHERE 
        staff_id = $staff_id
        AND MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_shipping_charges) {
                return $row->total_shipping_charges;
            }
        }

        return 0;
    }

    public function get_total_num_pieces($month, $year)
    {
        $query = "SELECT SUM(num_pieces) as total_num_pieces
        FROM shipping
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_num_pieces) {
                return $row->total_num_pieces;
            }
        }

        return 0;
    }

    public function get_total_num_pieces_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(num_pieces) as total_num_pieces
        FROM shipping
        WHERE staff_id = $staff_id
        AND MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_num_pieces) {
                return $row->total_num_pieces;
            }
        }

        return 0;
    }

    public function total_expenses()
    {
        $query = "SELECT SUM(shipping_charge) as total_shipping_charges
        FROM shipping
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_shipping_charges) {
                return $row->total_shipping_charges;
            }
        }

        return 0;
    }

}