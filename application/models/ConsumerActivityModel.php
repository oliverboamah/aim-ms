<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ConsumerActivityModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('consumer_activity', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('consumer_activity', $data)->row();
    }

    public function get_total_amount($month, $year)
    {
        $query = "SELECT SUM(amount_recieved) AS amount_recieved
        FROM consumer_activity
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

    public function get_total_funds_recieved()
    {
        $query = "SELECT SUM(amount_recieved) AS amount_recieved
        FROM consumer_activity
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_recieved) {
                return $row->amount_recieved;
            }
        }

        return 0;
    }

    public function get_total_balance()
    {
        $query = "SELECT SUM(current_balance) AS current_balance
        FROM consumer_activity
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->current_balance) {
                return $row->current_balance;
            }
        }

        return 0;
    }

    public function get_total_amount_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount_recieved) AS amount_recieved
        FROM consumer_activity
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

    public function get_total_amount_for_buyer($buyer_id, $month, $year)
    {
        $query = "SELECT SUM(amount_recieved) AS amount_recieved
        FROM consumer_activity
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND consumer_id = $buyer_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_recieved) {
                return $row->amount_recieved;
            }
        }

        return 0;
    }

    
    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = consumer_activity.staff_id) AS accountant,
        (SELECT name FROM consumer WHERE consumer.consumer_id = consumer_activity.consumer_id) AS buyer
        FROM consumer_activity
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = consumer_activity.staff_id) AS accountant,
        (SELECT name FROM consumer WHERE consumer.consumer_id = consumer_activity.consumer_id) AS buyer
        FROM consumer_activity
        Where deleted = false
        AND staff_id = $staff_id";

        return $this->db->query($query)->result();
    }

	public function find_for_buyer($consumer_id)
	{
		$query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = consumer_activity.staff_id) AS accountant,
        (SELECT name FROM consumer WHERE consumer.consumer_id = consumer_activity.consumer_id) AS buyer
        FROM consumer_activity
        Where deleted = false
        AND consumer_id = $consumer_id";

		return $this->db->query($query)->result();
	}

    public function get_previous_balance($consumer_id)
    {
        $query = "SELECT *
        FROM consumer_activity
        WHERE consumer_id = $consumer_id
        ORDER BY consumer_id DESC LIMIT 1";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->current_balance) {
                return $row->current_balance;
            }
        }

        return 0;
    }

    public function update($consumer_activity_id, $data)
    {
        $this->db->where('consumer_activity_id', $consumer_activity_id);
        return $this->db->update('consumer_activity', $data);
    }

    public function delete($consumer_activity_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('consumer_activity_id', $consumer_activity_id);
        return $this->db->update('consumer_activity', $data);
    }

}
