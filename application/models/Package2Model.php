<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package2Model extends CI_Model
{
	public function store($data)
	{
		$this->db->insert('package2', $data);
		return $this->db->insert_id();
	}

	public function store_package_item($data)
	{
		return $this->db->insert('package2_item', $data);
	}


	public function update_package_item($package_item_id, $data)
	{
		$this->db->where('package_item_id', $package_item_id);
		return $this->db->update('package2_item', $data);
	}

	public function delete_package_item($package_item_id)
	{
		$data = array(
			'deleted' => true,
		);
		$this->db->where('package_item_id', $package_item_id);
		return $this->db->update('package2_item', $data);
	}

	public function find_package_item($package_id)
	{
		$filter = array(
			'package_id' => $package_id,
			'deleted' => false
		);
		$this->db->where($filter);
		return $this->db->get('package2_item')->result();
	}

	public function find_row($data)
	{
		return $this->db->get_where('package2', $data)->row();
	}

	public function get_last_package_id($staff_id)
	{
		$query = " SELECT package_id FROM package2 
        WHERE accountant_id = $staff_id ORDER BY package_id DESC LIMIT 1";

		$res = $this->db->query($query)->result();

		foreach($res as $row) {
			return $row->package_id;
		}

		return -1;
	}

	public function get_total_pieces($month, $year)
	{
		$query = "SELECT SUM(num_pieces) AS total_pieces
        FROM package2_item
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

	public function get_total_cft_per_package($package_id)
	{
		$query = "SELECT SUM(cft) AS cft
        FROM package2_item
        WHERE deleted = false
        AND package_id = $package_id";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->cft) {
				return $row->cft;
			}
		}

		return 0;
	}

	public function get_total_cbm_per_package($package_id)
	{
		$query = "SELECT SUM(cbm) AS cbm
        FROM package2_item
        WHERE deleted = false
        AND package_id = $package_id";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->cbm) {
				return $row->cbm;
			}
		}

		return 0;
	}

	public function get_total_pieces_per_package($package_id)
	{
		$query = "SELECT SUM(num_pieces) AS total_pieces
        FROM package2_item
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

	public function get_total_price($month, $year)
	{
		$query = "SELECT SUM(total_price) AS total_price
        FROM package2_item
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->total_price) {
				return $row->total_price;
			}
		}

		return 0;
	}

	public function get_total_price_per_package($package_id)
	{
		$query = "SELECT SUM(total_price) AS total_price
        FROM package2_item
        WHERE deleted = false
        AND package_id = $package_id";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->total_price) {
				return $row->total_price;
			}
		}

		return 0;
	}

	public function all()
	{
		$query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = package2.accountant_id) AS accountant,
        FROM package2
        Where deleted = false";

		return $this->db->query($query)->result();
	}

	public function find($staff_id)
	{
		$query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = package2.accountant_id) AS accountant
        FROM package2
        Where deleted = false 
        AND accountant_id = $staff_id";

		return $this->db->query($query)->result();
	}

	public function update($package_id, $data)
	{
		$this->db->where('package_id', $package_id);
		return $this->db->update('package2', $data);
	}

	public function delete($package_id)
	{
		$data = array(
			'deleted' => true,
		);
		$this->db->where('package_id', $package_id);
		return $this->db->update('package2', $data) && $this->delete_corresponding_item($package_id);
	}

	public function delete_corresponding_item($package_id)
	{
		$data = array(
			'deleted' => true,
		);
		$this->db->where('package_id', $package_id);
		return $this->db->update('package2_item', $data);
	}

}
