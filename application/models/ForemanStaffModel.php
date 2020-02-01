<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForemanStaffModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('foreman_staff', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('foreman_staff', $data)->row();
    }

    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = foreman_staff.staff_id) AS foreman,
        (SELECT location FROM staff WHERE staff.staff_id = foreman_staff.staff_id) AS location
        FROM foreman_staff
        Where staff_id = $staff_id
        AND deleted = false";

        return $this->db->query($query)->result();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = foreman_staff.staff_id) AS foreman,
        (SELECT location FROM staff WHERE staff.staff_id = foreman_staff.staff_id) AS location
        FROM foreman_staff
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function update($foreman_staff_id, $data)
    {
        $this->db->where('foreman_staff_id', $foreman_staff_id);
        return $this->db->update('foreman_staff', $data);
    }

    public function delete($foreman_staff_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('foreman_staff_id', $foreman_staff_id);
        return $this->db->update('foreman_staff', $data);
    }

}
