<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OtherExpensesModel extends CI_Model
{
	public function store($data)
	{
		return $this->db->insert('other_expenses', $data);
	}

	public function update($expense_id, $data)
	{
		$this->db->where('expense_id', $expense_id);
		return $this->db->update('other_expenses', $data);
	}

	public function find_row($data)
	{
		return $this->db->get_where('other_expenses', $data)->row();
	}

	public function all()
	{
		$query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = other_expenses.accountant_id) AS accountant
        FROM other_expenses WHERE deleted = false";

		return $this->db->query($query)->result();
	}

	public function find($staff_id)
	{
		$query = " SELECT *,
		 (SELECT name FROM staff WHERE staff.staff_id = other_expenses.accountant_id) AS accountant
        FROM other_expenses WHERE
        reciever_id = $staff_id
        AND deleted = false";

		return $this->db->query($query)->result();
	}

	public function get_amount_recorded($month, $year)
	{
		$query = "SELECT SUM(amount) as amount
        FROM other_expenses
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->amount) {
				return $row->amount;
			}
		}

		return 0;
	}

	public function get_amount_recorded_for_one($staff_id, $month, $year)
	{
		$query = "SELECT SUM(amount) as total_amount
        FROM other_expenses
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND accountant_id = $staff_id
        AND deleted = false";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->total_amount) {
				return $row->total_amount;
			}
		}

		return 0;
	}

	public function delete($expense_id)
	{
		$data = array(
			'deleted' => true,
		);
		$this->db->where('expense_id', $expense_id);
		return $this->db->update('other_expenses', $data);
	}

	
	public function total_expenses()
	{
		$query = "SELECT SUM(amount) as amount
        FROM other_expenses
        WHERE deleted = false";

		$res = $this->db->query($query)->result();

		foreach ($res as $row) {
			if ($row->amount) {
				return $row->amount;
			}
		}

		return 0;
	}

}
