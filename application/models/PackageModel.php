<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PackageModel extends CI_Model
{
    public function store($data)
    {
        $this->db->insert('package', $data);
        return $this->db->insert_id();
    }

    public function store_batch_package_item($data)
    {
        return $this->db->insert_batch('package_item', $data);
    }

    public function find_package_item($package_id) 
    {
        $this->db->where('package_id', $package_id);
        return $this->db->get('package_item')->result();
    }

    public function find_row($data)
    {
        return $this->db->get_where('package', $data)->row();
    }

    public function get_last_package_id($staff_id)
    {
        $query = " SELECT package_id FROM package 
        WHERE recorder_id = $staff_id ORDER BY package_id DESC LIMIT 1";

        $res = $this->db->query($query)->result();

        foreach($res as $row) {
            return $row->package_id;
        }

        return -1;
    }

    public function get_total_pieces($month, $year)
    {
        $query = "SELECT SUM(num_pieces) AS total_pieces
        FROM package
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_pieces) {
                return $row->total_pieces;
            }
        }

        return 0;
    }

    public function get_total_pieces_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(num_pieces) AS total_pieces
        FROM package
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND recorder_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_pieces) {
                return $row->total_pieces;
            }
        }

        return 0;
    }

    public function get_total_pieces_per_package($package_id)
    {
        $query = "SELECT SUM(num_pieces) AS total_pieces
        FROM package
        WHERE deleted = false
        AND package_id = $package_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_pieces) {
                return $row->total_pieces;
            }
        }

        return 0;
    }

    public function get_total_cbm($month, $year)
    {
        $query = "SELECT SUM(total_cbm) AS total_cbm
        FROM package
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_cbm) {
                return $row->total_cbm;
            }
        }

        return 0;
    }

    public function get_total_cbm_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(total_cbm) AS total_cbm
        FROM package
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND recorder_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_cbm) {
                return $row->total_cbm;
            }
        }

        return 0;
    }

    
    public function get_total_cbm_per_package($package_id)
    {
        $query = "SELECT SUM(total_cbm) AS total_cbm
        FROM package
        WHERE deleted = false
        AND package_id = $package_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_cbm) {
                return $row->total_cbm;
            }
        }

        return 0;
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = package.recorder_id) AS accountant,
        (SELECT name FROM staff WHERE staff.staff_id = package.foreman_id) AS foreman
        FROM package
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = package.recorder_id) AS accountant,
        (SELECT name FROM staff WHERE staff.staff_id = package.foreman_id) AS foreman
        FROM package
        Where deleted = false 
        AND recorder_id = $staff_id";

        return $this->db->query($query)->result();
    }

    public function update($package_id, $data)
    {
        $this->db->where('package_id', $package_id);
        return $this->db->update('package', $data);
    }

    public function update_image($package_id, $data)
    {
        $this->db->where('package_id', $package_id);
        return $this->db->update('package', $data);
    }

    public function delete($package_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('package_id', $package_id);
        return $this->db->update('package', $data);
    }

}
