<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransportModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('transport', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('transport', $data)->row();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff_id = transport.staff_id ) as name
        FROM transport
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function update($transport_id, $data)
    {
        $this->db->where('transport_id', $transport_id);
        return $this->db->update('transport', $data);
    }

    public function update_image($transport_id, $data)
    {
        $this->db->where('transport_id', $transport_id);
        return $this->db->update('transport', $data);
    }

    public function delete($transport_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('transport_id', $transport_id);
        return $this->db->update('transport', $data);
    }

    public function get_total_expenses($month, $year)
    {
        $query = "SELECT SUM(total_expenses) as total_expenses
        FROM transport
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_expenses) {
                return $row->total_expenses;
            }
        }

        return 0;
    }

    
    public function get_total_expenses_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(total_expenses) as total_expenses
        FROM transport
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_expenses) {
                return $row->total_expenses;
            }
        }

        return 0;
    }

    public function total_expenses()
    {
        $query = "SELECT SUM(total_expenses) as total_expenses
        FROM transport
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_expenses) {
                return $row->total_expenses;
            }
        }

        return 0;
    }

}