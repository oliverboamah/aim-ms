<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForestryModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('forestry', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('forestry', $data)->row();
    }

    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff_id = forestry.staff_id ) as name
        FROM forestry
        Where deleted = false 
        AND staff_id = $staff_id";

        return $this->db->query($query)->result();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff_id = forestry.staff_id ) as name
        FROM forestry
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function update($forestry_activity_id, $data)
    {
        $this->db->where('forestry_activity_id', $forestry_activity_id);
        return $this->db->update('forestry', $data);
    }

    public function update_image($forestry_activity_id, $data)
    {
        $this->db->where('forestry_activity_id', $forestry_activity_id);
        return $this->db->update('forestry', $data);
    }

    public function delete($forestry_activity_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('forestry_activity_id', $forestry_activity_id);
        return $this->db->update('forestry', $data);
    }

    public function get_total_amount_recieved($month, $year)
    {
        $query = "SELECT SUM(amount_recieved) as amount_recieved
        FROM forestry
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_recieved) {
                return $row->amount_recieved;
            }
        }

        return 0;
    }

    public function get_total_amount_recieved_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount_recieved) as amount_recieved
        FROM forestry
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_recieved) {
                return $row->amount_recieved;
            }
        }

        return 0;
    }

    public function total_permit()
    {
        $query = "SELECT COUNT(forestry_activity_id) as total_permit
        FROM forestry
        WHERE  deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_permit) {
                return $row->total_permit;
            }
        }

        return 0;
    }

    public function total_expenses()
    {
        $query = "SELECT SUM(amount_recieved) as amount_recieved
        FROM forestry
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_recieved) {
                return $row->amount_recieved;
            }
        }

        return 0;
    }

}