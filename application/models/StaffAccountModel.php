<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffAccountModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('staff_account', $data);
    }

    public function find($staff_transaction_id)
    {
        $data = array(
            'staff_transaction_id' => $staff_transaction_id,
            'deleted' => false,
        );
        return $this->db->get_where('staff_account', $data)->result();
    }

    public function get_total_amount_used($staff_transaction_id)
    {
        $query = " SELECT SUM(amount) AS total_amount_used 
        FROM staff_account 
        WHERE staff_transaction_id = $staff_transaction_id
        AND deleted = false";

        $res =  $this->db->query($query)->result();

        foreach($res as $row) {
            if($row->total_amount_used){
                return $row->total_amount_used;
            }
        }

        return 0;
    }


    public function find_row($data)
    {
        return $this->db->get_where('staff_account', $data)->row();
    }

    public function all()
    {
        $this->db->where('deleted', false);
        return $this->db->get('staff_account')->result();
    }

    public function update($staff_account_id, $data)
    {
        $this->db->where('staff_account_id', $staff_account_id);
        return $this->db->update('staff_account', $data);
    }

    public function update_image($staff_account_id, $data)
    {
        $this->db->where('staff_account_id', $staff_account_id);
        return $this->db->update('staff_account', $data);
    }

    public function delete($staff_account_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('staff_account_id', $staff_account_id);
        return $this->db->update('staff_account', $data);
    }

}
