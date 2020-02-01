<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SalaryModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('salary', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('salary', $data)->row();
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = salary.sender_id) AS sender_name,
        (SELECT name FROM staff WHERE staff.staff_id = salary.reciever_id) AS reciever_name,
        (SELECT name FROM staff WHERE staff.staff_id = salary.recorder_id) AS recorder_name
        FROM salary WHERE deleted = false";

        return $this->db->query($query)->result();
    }

    // find all for reciever
    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = salary.sender_id) AS sender_name,
        (SELECT name FROM staff WHERE staff.staff_id = salary.reciever_id) AS reciever_name,
        (SELECT name FROM staff WHERE staff.staff_id = salary.recorder_id) AS recorder_name
        FROM salary WHERE
        reciever_id = $staff_id
        AND deleted = false";

        return $this->db->query($query)->result();
    }

    // get user using transaction_id
    public function get_user($salary_id)
    {
        $query = " SELECT * FROM staff
                   WHERE staff_id =
                    (SELECT reciever_id FROM salary
                     WHERE salary_id = $salary_id LIMIT 1);";

        return $this->db->query($query)->result()[0];
    }

    public function get_amount_recorded($month, $year)
    {
        $query = "SELECT SUM(amount) as amount
        FROM salary
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

    public function get_total_amount_recieved($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount) as total_amount
        FROM salary
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
        $query = " SELECT salary_id AS last_salary_id
        FROM salary
        WHERE reciever_id = $reciever_id AND deleted = false
        ORDER BY salary_id DESC LIMIT 1";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->last_salary_id) {
                return $row->last_salary_id;
            }
        }

        return 0;
    }

    // get transaction amount
    public function get_transaction_amount($salary_id)
    {
        $query = " SELECT amount AS last_transaction_amount FROM salary
        WHERE salary_id = $salary_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->last_transaction_amount) {
                return $row->last_transaction_amount;
            }
        }

        return 0;
    }

    // get transaction amount used
    public function get_transaction_amount_used($salary_id)
    {
        $query = " SELECT SUM(amount) AS last_transaction_amount_used
            FROM staff_account
            WHERE salary_id = $salary_id
            AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->last_transaction_amount_used) {
                return $row->last_transaction_amount_used;
            }
        }

        return 0;
    }

    public function accountable($salary_id, $boolean) {

        $data = array(
            'accountable' => $boolean
        );

        $this->db->where('salary_id', $salary_id);
        $this->db->update('salary', $data);
    }

    public function update($salary_id, $data)
    {
        $this->db->where('salary_id', $salary_id);
        return $this->db->update('salary', $data);
    }

    public function update_image($salary_id, $data)
    {
        $this->db->where('salary_id', $salary_id);
        return $this->db->update('salary', $data);
    }

    public function delete($salary_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('salary_id', $salary_id);
        return $this->db->update('salary', $data);
    }

    public function total_salary_paid_cedis()
    {
        $query = "SELECT SUM(amount) as amount
        FROM salary
        WHERE currency = 'Ghana Cedis'
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount) {
                return $row->amount;
            }
        }

        return 0;
    }

    
    public function total_salary_paid_rupees()
    {
        $query = "SELECT SUM(amount) as amount
        FROM salary
        WHERE currency = 'Indian Rupees'
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount) {
                return $row->amount;
            }
        }

        return 0;
    }

}
