<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('staff', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('staff', $data)->row();
    }

    public function get_foremen()
    {
        $this->db->where('role', 'Foreman');
        return $this->db->get('staff')->result();
    }

    public function find_existing_row($staff_id, $name)
    {
        $this->db->where('staff_id !=', $staff_id);
        $this->db->where('name', $name);
        $this->db->where('deleted', false);

        return $this->db->get('staff')->row();
    }

    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('staff')->result();
    }

    public function get_office_managers()
    {
        $filters = array(
            'deleted' => false,
            'location' => 'Main Office',
            'role' => 'Manager',
        );

        $this->db->where($filters);
        return $this->db->get('staff')->result();
    }

    public function update($staff_id, $data)
    {
        $this->db->where('staff_id', $staff_id);
        return $this->db->update('staff', $data);
    }

    public function update_image($staff_id, $data)
    {
        $this->db->where('staff_id', $user_id);
        return $this->db->update('staff', $data);
    }

    public function delete($staff_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('staff_id', $staff_id);
        return $this->db->update('staff', $data);
    }

    public function total_staff_by_nationality($nationality)
    {
        $query = "SELECT COUNT(staff_id) AS total_staff FROM staff
        WHERE nationality = '$nationality'
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_staff) {
                return $row->total_staff;
            }
        }

        return 0;
    }

}
