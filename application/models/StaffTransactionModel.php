<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffTransactionModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('staff_transaction', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('staff_transaction', $data)->row();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = staff_transaction.reciever_id) AS reciever_name,
        (SELECT name FROM staff WHERE staff.staff_id = staff_transaction.recorder_id) AS recorder_name
        FROM staff_transaction WHERE deleted = false";

        return $this->db->query($query)->result();
    }

    // find all for reciever
    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = staff_transaction.reciever_id) AS reciever_name,
        (SELECT name FROM staff WHERE staff.staff_id = staff_transaction.recorder_id) AS recorder_name
        FROM staff_transaction WHERE
        reciever_id = $staff_id
        AND deleted = false";

        return $this->db->query($query)->result();
    }

    // get user using transaction_id
    public function get_user($staff_transaction_id)
    {
        $query = " SELECT * FROM staff
                   WHERE staff_id =
                    (SELECT reciever_id FROM staff_transaction
                     WHERE staff_transaction_id = $staff_transaction_id LIMIT 1);";

        return $this->db->query($query)->result()[0];
    }

    public function get_total_amount_sent($month, $year)
    {
        $query = "SELECT SUM(amount) as total_amount
        FROM staff_transaction
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_amount) {
                return $row->total_amount;
            }
        }

        return 0;
    }

    public function get_total_amount_recieved($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount) as total_amount
        FROM staff_transaction
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND reciever_id = $staff_id
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_amount) {
                return $row->total_amount;
            }
        }

        return 0;
    }

    // get last transaction_id
    public function get_last_transaction_id($reciever_id)
    {
        $query = " SELECT staff_transaction_id AS last_staff_transaction_id
        FROM staff_transaction
        WHERE reciever_id = $reciever_id AND deleted = false
        ORDER BY staff_transaction_id DESC LIMIT 1";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->last_staff_transaction_id) {
                return $row->last_staff_transaction_id;
            }
        }

        return 0;
    }

    // get transaction amount
    public function get_transaction_amount($staff_transaction_id)
    {
        $query = " SELECT amount AS last_transaction_amount FROM staff_transaction
        WHERE staff_transaction_id = $staff_transaction_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->last_transaction_amount) {
                return $row->last_transaction_amount;
            }
        }

        return 0;
    }

    // get transaction amount used
    public function get_transaction_amount_used($staff_transaction_id)
    {
        $query = " SELECT SUM(amount) AS last_transaction_amount_used
            FROM staff_account
            WHERE staff_transaction_id = $staff_transaction_id
            AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->last_transaction_amount_used) {
                return $row->last_transaction_amount_used;
            }
        }

        return 0;
    }

    public function accountable($staff_transaction_id, $boolean) {

        $data = array(
            'accountable' => $boolean
        );

        $this->db->where('staff_transaction_id', $staff_transaction_id);
        $this->db->update('staff_transaction', $data);
    }

    public function update($staff_transaction_id, $data)
    {
        $this->db->where('staff_transaction_id', $staff_transaction_id);
        return $this->db->update('staff_transaction', $data);
    }

    public function update_image($staff_transaction_id, $data)
    {
        $this->db->where('staff_transaction_id', $staff_transaction_id);
        return $this->db->update('staff_transaction', $data);
    }

    public function delete($staff_transaction_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('staff_transaction_id', $staff_transaction_id);
        return $this->db->update('staff_transaction', $data);
    }

}
