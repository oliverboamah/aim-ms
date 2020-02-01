<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogModel extends CI_Model
{
    public function store($data)
    {
        return $this->db->insert('log_info', $data);
    }

    public function store_batch($table, $data)
    {
        return $this->db->insert_batch($table, $data);
    }

    public function find_logs_item($table_name, $log_info_id) {
        
        $filters = array(
            'log_info_id' => $log_info_id
        );
        $this->db->where($filters);
        return $this->db->get($table_name)->result();
    }

    public function find_row($data)
    {
        return $this->db->get_where('log_info', $data)->row();
    }

    public function get_last_log_info_id($staff_id)
    {
        $query = " SELECT log_info_id FROM log_info 
        WHERE staff_id = $staff_id ORDER BY log_info_id DESC LIMIT 1";

        $res = $this->db->query($query)->result();

        foreach($res as $row) {
            return $row->log_info_id;
        }

        return -1;
    }

    public function get_total_amount($month, $year)
    {
        $query = "SELECT SUM(total_amount) AS total_amount
        FROM log_info
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

    public function get_total_logs($month, $year)
    {
        $query = "SELECT SUM(total_logs) AS total_logs
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_logs) {
                return $row->total_logs;
            }
        }

        return 0;
    }

    public function get_total_logs_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(total_logs) AS total_logs
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_logs) {
                return $row->total_logs;
            }
        }

        return 0;
    }

    public function get_total_logs_straight($month, $year)
    {
        $query = "SELECT SUM(num_straight) AS num_straight
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_straight) {
                return $row->num_straight;
            }
        }

        return 0;
    }

    public function get_total_logs_straight_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(num_straight) AS num_straight
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_straight) {
                return $row->num_straight;
            }
        }

        return 0;
    }

    public function get_total_logs_bend($month, $year)
    {
        $query = "SELECT SUM(num_bend) AS num_bend
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_bend) {
                return $row->num_bend;
            }
        }

        return 0;
    }

    public function get_total_logs_bend_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(num_bend) AS num_bend
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_bend) {
                return $row->num_bend;
            }
        }

        return 0;
    }

    public function get_total_logs_feet($month, $year)
    {
        $query = "SELECT SUM(num_feet) AS num_feet
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_feet) {
                return $row->num_feet;
            }
        }

        return 0;
    }

    public function get_total_logs_feet_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(num_feet) AS num_feet
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_feet) {
                return $row->num_feet;
            }
        }

        return 0;
    }

    public function get_total_amount_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(total_amount) AS total_amount
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_amount) {
                return $row->total_amount;
            }
        }

        return 0;
    }

    public function get_amount_straight($month, $year)
    {
        $query = "SELECT SUM(amount_straight) AS amount_straight
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_straight) {
                return $row->amount_straight;
            }
        }

        return 0;
    }

    public function get_amount_straight_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount_straight) AS amount_straight
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_straight) {
                return $row->amount_straight;
            }
        }

        return 0;
    }

    public function get_total_bend($month, $year)
    {
        $query = "SELECT SUM(amount_bend) AS amount_bend
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_bend) {
                return $row->amount_bend;
            }
        }

        return 0;
    }

    public function get_total_bend_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount_bend) AS amount_bend
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_bend) {
                return $row->amount_bend;
            }
        }

        return 0;
    }

    public function get_amount_feet($month, $year)
    {
        $query = "SELECT SUM(amount_feet) AS amount_feet
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_feet) {
                return $row->amount_feet;
            }
        }

        return 0;
    }

    public function get_amount_feet_for_one($staff_id, $month, $year)
    {
        $query = "SELECT SUM(amount_feet) AS amount_feet
        FROM log_info
        WHERE MONTH(created_at) = $month
        AND YEAR(created_at) = $year
        AND deleted = false
        AND staff_id = $staff_id";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->amount_feet) {
                return $row->amount_feet;
            }
        }

        return 0;
    }

    public function all()
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = log_info.staff_id) AS foreman
        FROM log_info
        Where deleted = false";

        return $this->db->query($query)->result();
    }

    public function find($staff_id)
    {
        $query = " SELECT *,
        (SELECT name FROM staff WHERE staff.staff_id = log_info.staff_id) AS foreman
        FROM log_info
        Where deleted = false 
        AND staff_id = $staff_id";

        return $this->db->query($query)->result();
    }

    public function update($log_info_id, $data)
    {
        $this->db->where('log_info_id', $log_info_id);
        return $this->db->update('log_info', $data);
    }

    public function update_image($log_info_id, $data)
    {
        $this->db->where('log_info_id', $log_info_id);
        return $this->db->update('log_info', $data);
    }

    public function delete($log_info_id)
    {
        $data = array(
            'deleted' => true,
        );
        $this->db->where('log_info_id', $log_info_id);
        return $this->db->update('log_info', $data);
    }

    public function total_logs()
    {
        $query = "SELECT SUM(total_logs) AS total_logs
        FROM log_info
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->total_logs) {
                return $row->total_logs;
            }
        }

        return 0;
    }

    public function total_bend()
    {
        $query = "SELECT SUM(num_bend) AS num_bend
        FROM log_info
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_bend) {
                return $row->num_bend;
            }
        }

        return 0;
    }

    public function total_straight()
    {
        $query = "SELECT SUM(num_straight) AS num_straight
        FROM log_info
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_straight) {
                return $row->num_straight;
            }
        }

        return 0;
    }

    public function total_feet()
    {
        $query = "SELECT SUM(num_feet) AS num_feet
        FROM log_info
        WHERE deleted = false";

        $res = $this->db->query($query)->result();

        foreach ($res as $row) {
            if ($row->num_feet) {
                return $row->num_feet;
            }
        }

        return 0;
    }
}
