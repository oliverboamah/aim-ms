<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogsForeman extends CI_Controller
{
    public function store()
    {
        $sawmill = $this->session->userdata('location');
        $sawmill_id = $this->SawmillModel->find_row(array('name' => $sawmill, 'deleted' => false))->sawmill_id;
        $status = array();

        $supplier_name = $this->input->post('supplier_name');
        $supplier_contact = $this->input->post('supplier_contact');
        $straight_pieces = $this->input->post('straight_pieces');
        $bend_pieces = $this->input->post('bend_pieces');
        $feet_pieces = $this->input->post('feet_pieces');
        $date_of_stock = $this->input->post('date_of_stock');

        if(!(preg_replace('/[0-9\,]/', '', $straight_pieces) == "")){
            $status["err_invalid_straight_value"] = true;
            $this->session->set_userdata($status);
            redirect('Foreman/logs');
            return;
        } else if(!(preg_replace('/[0-9\,]/', '', $bend_pieces) == "")){
            $status["err_invalid_bend_value"] = true;
            $this->session->set_userdata($status);
            redirect('Foreman/logs');
            return;
        } else if(!(preg_replace('/[0-9\,]/', '', $feet_pieces) == "")){
            $status["err_invalid_feet_value"] = true;
            $this->session->set_userdata($status);
            redirect('Foreman/logs');
            return;
        }

        $straight_pieces = str_replace(' ', '', $straight_pieces);
        $straight_pieces = explode(',', $straight_pieces);

        $bend_pieces = str_replace(' ', '', $bend_pieces);
        $bend_pieces = explode(',', $bend_pieces);

        $feet_pieces = str_replace(' ', '', $feet_pieces);
        $feet_pieces = explode(',', $feet_pieces);

       $no_log_counter = 0;
        if(count($straight_pieces) == 1 && $straight_pieces[0] == '') {
            $straight_pieces = array();
            $no_log_counter ++;
        } 
        if(count($bend_pieces) == 1 && $bend_pieces[0] == '') {
            $bend_pieces = array();
            $no_log_counter ++;
        } 
        if(count($feet_pieces) == 1 && $feet_pieces[0] == '') {
            $feet_pieces = array();
            $no_log_counter ++;
        }

        if($no_log_counter == 3) {
            $status["err_all_pieces_empty"] = true;
            $this->session->set_userdata($status);
            redirect('Foreman/logs');
            return;
        }

        $ranges_all = ['45 - 50', '51 - 60', '61 - 70', '71 - 80', '81 - 90', '91 - 100',
            '101 - 110', '111 - 120', '121 - 130', '131 - 140', '141 - 150', '151 UP'];

        $v1 = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => 'straight'));
        $v2 = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => 'bend'));
        $v3 = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => 'feet'));

        if((!$v1 || !$v2 || !$v3)) {
            $status["err_all_prices_not_set"] = true;
            $this->session->set_userdata($status);
            redirect('Foreman/logs');
            return;
        }

        // process straight pieces
        $straight = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => 'straight'));
        $num_straight = 0;
        $amount_straight = 0;
        $range_count_straight = array_fill(0, 12, 0);
        $price_straight = [$straight->p1, $straight->p2, $straight->p3, 
        $straight->p4, $straight->p5, $straight->p6, $straight->p7, $straight->p8,
        $straight->p9, $straight->p10, $straight->p11, $straight->p12];
        $sum_straight = array_fill(0, 12, 0);

        if ($straight_pieces) {
            $num_straight = count($straight_pieces);
            for ($i = 0; $i < $num_straight; $i++) {
                $amt = $this->getPiecePrice($sawmill_id, 'straight', $straight_pieces[$i]);
                $amount_straight += $amt;

                $val = (int) $straight_pieces[$i];

                if ($val >= 45 && $val <= 50) {
                    $range_count_straight[0] += 1;
                } else if ($val >= 51 && $val <= 60) {
                    $range_count_straight[1] += 1;
                } else if ($val >= 61 && $val <= 70) {
                    $range_count_straight[2] += 1;
                } else if ($val >= 71 && $val <= 80) {
                    $range_count_straight[3] += 1;
                } else if ($val >= 81 && $val <= 90) {
                    $range_count_straight[4] += 1;
                } else if ($val >= 91 && $val <= 100) {
                    $range_count_straight[5] += 1;
                } else if ($val >= 101 && $val <= 110) {
                    $range_count_straight[6] += 1;
                } else if ($val >= 111 && $val <= 120) {
                    $range_count_straight[7] += 1;
                }  else if ($val >= 121 && $val <= 130) {
                    $range_count_straight[8] += 1;
                } else if ($val >= 131 && $val <= 140) {
                    $range_count_straight[9] += 1;
                } else if ($val >= 141 && $val <= 150) {
                    $range_count_straight[10] += 1;
                } else if ($val >= 151) {
                    $range_count_straight[11] += 1;
                }
            }

            for ($i = 0; $i < 12; $i++) {
                $sum_straight[$i] = $range_count_straight[$i] * $price_straight[$i];
            }
        }

        // process bend pieces
        $bend = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => 'bend'));
        $num_bend = 0;
        $amount_bend = 0;
        $range_count_bend = array_fill(0, 12, 0);
        $price_bend = [$bend->p1, $bend->p2, $bend->p3, 
        $bend->p4, $bend->p5, $bend->p6, $bend->p7, $bend->p8,
        $bend->p9, $bend->p10, $bend->p11, $bend->p12];
        $sum_bend = array_fill(0, 12, 0);

        if ($bend_pieces) {
            $num_bend = count($bend_pieces);
            for ($i = 0; $i < $num_bend; $i++) {
                $amt = $this->getPiecePrice($sawmill_id, 'bend', $bend_pieces[$i]);
                $amount_bend += $amt;

                $val = (int) $bend_pieces[$i];

                if ($val >= 45 && $val <= 50) {
                    $range_count_bend[0] += 1;
                } else if ($val >= 51 && $val <= 60) {
                    $range_count_bend[1] += 1;
                } else if ($val >= 61 && $val <= 70) {
                    $range_count_bend[2] += 1;
                } else if ($val >= 71 && $val <= 80) {
                    $range_count_bend[3] += 1;
                } else if ($val >= 81 && $val <= 90) {
                    $range_count_bend[4] += 1;
                } else if ($val >= 91 && $val <= 100) {
                    $range_count_bend[5] += 1;
                } else if ($val >= 101 && $val <= 110) {
                    $range_count_bend[6] += 1;
                } else if ($val >= 111 && $val <= 120) {
                    $range_count_bend[7] += 1;
                }  else if ($val >= 121 && $val <= 130) {
                    $range_count_bend[8] += 1;
                } else if ($val >= 131 && $val <= 140) {
                    $range_count_bend[9] += 1;
                } else if ($val >= 141 && $val <= 150) {
                    $range_count_bend[10] += 1;
                } else if ($val >= 151) {
                    $range_count_bend[11] += 1;
                }
            }

            for ($i = 0; $i < 12; $i++) {
                $sum_bend[$i] = $range_count_bend[$i] * $price_bend[$i];
            }
        }

        // process 4feet pieces
        $feet = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => 'feet'));
        $num_feet = 0;
        $amount_feet = 0;
        $range_count_feet = array_fill(0, 12, 0);
        $price_feet =  [$feet->p1, $feet->p2, $feet->p3, 
        $feet->p4, $feet->p5, $feet->p6, $feet->p7, $feet->p8,
        $feet->p9, $feet->p10, $feet->p11, $feet->p12];
        $sum_feet = array_fill(0, 12, 0);

        if ($feet_pieces) {
            $num_feet = count($feet_pieces);
            for ($i = 0; $i < $num_feet; $i++) {
                $amt = $this->getPiecePrice($sawmill_id, 'feet', $feet_pieces[$i]);
                $amount_feet += $amt;

                $val = (int) $feet_pieces[$i];

                if ($val >= 45 && $val <= 50) {
                    $range_count_feet[0] += 1;
                } else if ($val >= 51 && $val <= 60) {
                    $range_count_feet[1] += 1;
                } else if ($val >= 61 && $val <= 70) {
                    $range_count_feet[2] += 1;
                } else if ($val >= 71 && $val <= 80) {
                    $range_count_feet[3] += 1;
                } else if ($val >= 81 && $val <= 90) {
                    $range_count_feet[4] += 1;
                } else if ($val >= 91 && $val <= 100) {
                    $range_count_feet[5] += 1;
                } else if ($val >= 101 && $val <= 110) {
                    $range_count_feet[6] += 1;
                } else if ($val >= 111 && $val <= 120) {
                    $range_count_feet[7] += 1;
                }  else if ($val >= 121 && $val <= 130) {
                    $range_count_feet[8] += 1;
                } else if ($val >= 131 && $val <= 140) {
                    $range_count_feet[9] += 1;
                } else if ($val >= 141 && $val <= 150) {
                    $range_count_feet[10] += 1;
                } else if ($val >= 151) {
                    $range_count_feet[11] += 1;
                }
            }

            for ($i = 0; $i < 12; $i++) {
                $sum_feet[$i] = $range_count_feet[$i] * $price_feet[$i];
            }
        }

        // total, for log info table.
        $total_logs = $num_straight + $num_bend + $num_feet;
        $total_amount = $amount_straight + $amount_bend + $amount_feet;

        $data = array(
            'staff_id' => $this->session->userdata('staff_id'),
            'location' => $this->session->userdata('location'),
            'supplier_name' => $supplier_name,
            'supplier_contact' => $supplier_contact,
            'num_straight' => $num_straight,
            'num_bend' => $num_bend,
            'num_feet' => $num_feet,
            'total_logs' => $total_logs,
            'amount_straight' => $amount_straight,
            'amount_bend' => $amount_bend,
            'amount_feet' => $amount_feet,
            'total_amount' => $total_amount,
            'date_of_stock' => $date_of_stock,
        );

        if ($this->LogModel->store($data)) {

            $log_info_id = $this->LogModel->get_last_log_info_id($data['staff_id']);
            $data_log_straight = array();
            $data_log_bend = array();
            $data_log_feet = array();

            for ($i = 0; $i < 12; $i++) {

                array_push($data_log_straight, array(
                    'log_info_id' => $log_info_id,
                    'range' => $ranges_all[$i],
                    'num_logs' => $range_count_straight[$i],
                    'price' => $price_straight[$i],
                    'amount' => $sum_straight[$i],
                ));
                array_push($data_log_bend, array(
                    'log_info_id' => $log_info_id,
                    'range' => $ranges_all[$i],
                    'num_logs' => $range_count_bend[$i],
                    'price' => $price_bend[$i],
                    'amount' => $sum_bend[$i],
                ));
                array_push($data_log_feet, array(
                    'log_info_id' => $log_info_id,
                    'range' => $ranges_all[$i],
                    'num_logs' => $range_count_feet[$i],
                    'price' => $price_feet[$i],
                    'amount' => $sum_feet[$i],
                ));
            }

            if ($this->LogModel->store_batch('log_straight', $data_log_straight)
                && $this->LogModel->store_batch('log_bend', $data_log_bend)
                && $this->LogModel->store_batch('log_feet', $data_log_feet)) {

                $status['success_log_store'] = true;
            } else {
                $status['failure_log_store'] = true;
            }
        } else {
            $status['failure_log_store'] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/logs');
    }

    public function delete_permission($log_info_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('LogsForeman/delete/') . $log_info_id;

        echo "
            <script src=$sweetalert></script>
            <script type='text/javascript'>
            window.onload = function(){
                swal({
                    title: 'Proceed?',
                    text: 'Are you sure you want to delete this record',
                    icon: 'warning',
                    buttons: true,
                    buttons: {
                        cancel: 'No',
                        catch: {
                            text: 'Yes',
                            value: 'catch',
                          },
                    },
                    dangerMode: true,
                  })
                  .then((value) => {
                    switch (value) {
                        case 'catch':
                        window.location = `$url_delete`;
                          break;
                        default:
                        window.history.back();
                      }
                  });
            }
            </script>
        ";
    }

    public function delete($log_info_id)
    {
        $status = array();

        if ($this->LogModel->delete($log_info_id)) {
            $status["success_log_delete"] = true;
        } else {
            $status["failure_log_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Foreman/logs');
    }

    public function do_upload($file)
    {
        $config['upload_path'] = 'uploads/user/';
        $config['file_name'] = date("Ymdhis");
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file)) {
            return $this->upload->data('file_name');
        } else {
            $status['failure_upload_file'] = $this->upload->display_errors();
            $this->session->set_userdata($status);
            return false;
        }
    }

    private function getPiecePrice($sawmill_id, $type, $range)
    {
        $price = $this->SawmillModel->find_saw_mill_price_row(array('sawmill_id' => $sawmill_id, 'type' => $type));

        $range = (int) $range;

        if ($range >= 45 && $range <= 50) {
            return $price->p1;
        } else if ($range >= 51 && $range <= 60) {
            return $price->p2;
        } else if ($range >= 61 && $range <= 70) {
            return $price->p3;
        } else if ($range >= 71 && $range <= 80) {
            return $price->p4;
        } else if ($range >= 81 && $range <= 90) {
            return $price->p5;
        } else if ($range >= 91 && $range <= 100) {
            return $price->p6;
        } else if ($range >= 101 && $range <= 110) {
            return $price->p7;
        } else if ($range >= 111 && $range <= 120) {
            return $price->p8;
        } else if ($range >= 121 && $range <= 130) {
            return $price->p9;
        } else if ($range >= 131 && $range <= 140) {
            return $price->p10;
        } else if ($range >= 141 && $range <= 150) {
            return $price->p11;
        } else if ($range >= 151) {
            return $price->p12;
        }

        return 0;
    }
}
