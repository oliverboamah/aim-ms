<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AccountingModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('account', $data);
    }

    public function find_row($data)
    {
        return $this->db->get_where('account', $data)->row();
    }

    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('account')->result();
    }

    public function update($account_id, $data)
    {
        $this->db->where('account_id', $account_id);
        return $this->db->update('account', $data);
    }

    public function update_image($account_id, $data)
    {
        $this->db->where('account_id', $account_id);
        return $this->db->update('account', $data);
    }

    public function delete($account_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('account_id', $account_id);
        return $this->db->update('account', $data);
    }

    public function get_total_amount_recorded($month, $year)
    {
        $query = "SELECT SUM(amount_paid) as total_amount
        FROM account
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

}
