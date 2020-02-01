<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logs extends CI_Controller
{
    public function store()
    {
        // $status = array();

        // $supplier_name = $this->input->post('supplier_name');
        // $supplier_contact = $this->input->post('supplier_contact');
        // $straight_pieces = $this->input->post('straight_pieces');
        // $bend_pieces = $this->input->post('bend_pieces');
        // $feet_pieces = $this->input->post('feet_pieces');
        // $date_of_stock = $this->input->post('date_of_stock');

        // $straight_pieces = str_replace(' ', '', $straight_pieces);
        // $straight_pieces = explode(',', $straight_pieces);
        // var_dump($straight_pieces);


        
        // $ranges_all = ['45 - 50', '51 - 60', '61 - 70', '71 - 80', '81 - 90', '91 - 100',
        // '101 - 110', '110 UP'];

        // // process straight pieces
        // $num_straight = 0;
        // $amount_straight = 0;
        // $range_count_straight = array_fill(0, 8, 0);
        // $price_straight = [0, 10, 15, 25, 32, 40, 48, 60];
        // $sum_straight = array_fill(0, 8, 0);

        // if($straight_pieces) {
        //     $num_straight = count($straight_pieces);
        //     for($i = 0; $i < $num_straight; $i++) {
        //         $amt = $this->getStraightPiecePrice($straight_pieces[$i]);
        //         $amount_straight += $amt;

        //         if($straight_pieces[$i] == '45 - 50') {
        //             $range_count_straight[0] += 1;
        //         } elseif($straight_pieces[$i] == '51 - 60') {
        //             $range_count_straight[1] += 1;
        //         } elseif($straight_pieces[$i] == '61 - 70') {
        //             $range_count_straight[2] += 1;
        //         } elseif($straight_pieces[$i] == '71 - 80') {
        //             $range_count_straight[3] += 1;
        //         } elseif($straight_pieces[$i] == '81 - 90') {
        //             $range_count_straight[4] += 1;
        //         } elseif($straight_pieces[$i] == '91 - 100') {
        //             $range_count_straight[5] += 1;
        //         } elseif($straight_pieces[$i] == '101 - 110') {
        //             $range_count_straight[6] += 1;
        //         } elseif($straight_pieces[$i] == '111 UP') {
        //             $range_count_straight[7] += 1;
        //         } 
        //     }

        //     for($i = 0; $i < 8; $i ++) {
        //         $sum_straight[$i] = $range_count_straight[$i] * $price_straight[$i];
        //     }
        // }

        // // process bend pieces
        // $num_bend = 0;
        // $amount_bend = 0;
        // $range_count_bend = array_fill(0, 8, 0);
        // $price_bend = [0, 5, 7, 12, 16, 22, 24, 30];
        // $sum_bend = array_fill(0, 8, 0);

        // if($bend_pieces) {
        //     $num_bend = count($bend_pieces);
        //     for($i = 0; $i < $num_bend; $i++) {
        //         $amt = $this->getBendPiecePrice($bend_pieces[$i]);
        //         $amount_bend+= $amt;

        //         if($bend_pieces[$i] == '45 - 50') {
        //             $range_count_bend[0] += 1;
        //         } elseif($bend_pieces[$i] == '51 - 60') {
        //             $range_count_bend[1] += 1;
        //         } elseif($bend_pieces[$i] == '61 - 70') {
        //             $range_count_bend[2] += 1;
        //         } elseif($bend_pieces[$i] == '71 - 80') {
        //             $range_count_bend[3] += 1;
        //         } elseif($bend_pieces[$i] == '81 - 90') {
        //             $range_count_bend[4] += 1;
        //         } elseif($bend_pieces[$i] == '91 - 100') {
        //             $range_count_bend[5] += 1;
        //         } elseif($bend_pieces[$i] == '101 - 110') {
        //             $range_count_bend[6] += 1;
        //         } elseif($bend_pieces[$i] == '111 UP') {
        //             $range_count_bend[7] += 1;
        //         } 
        //     }

        //     for($i = 0; $i < 8; $i ++) {
        //         $sum_bend[$i] = $range_count_bend[$i] * $price_bend[$i];
        //     }
        // }

        // // process 4feet pieces
        // $num_feet = 0;
        // $amount_feet = 0;
        // $range_count_feet = array_fill(0, 8, 0);
        // $price_feet = [2, 3, 4, 5, 11, 12, 14, 16];
        // $sum_feet = array_fill(0, 8, 0);

        // if($feet_pieces) {
        //     $num_feet = count($feet_pieces);
        //     for($i = 0; $i < $num_feet; $i++) {
        //         $amt = $this->getFeetPiecePrice($feet_pieces[$i]);
        //         $amount_feet += $amt;

        //         if($feet_pieces[$i] == '45 - 50') {
        //             $range_count_feet[0] += 1;
        //         } elseif($feet_pieces[$i] == '51 - 60') {
        //             $range_count_feet[1] += 1;
        //         } elseif($feet_pieces[$i] == '61 - 70') {
        //             $range_count_feet[2] += 1;
        //         } elseif($feet_pieces[$i] == '71 - 80') {
        //             $range_count_feet[3] += 1;
        //         } elseif($feet_pieces[$i] == '81 - 90') {
        //             $range_count_feet[4] += 1;
        //         } elseif($feet_pieces[$i] == '91 - 100') {
        //             $range_count_feet[5] += 1;
        //         } elseif($feet_pieces[$i] == '101 - 110') {
        //             $range_count_feet[6] += 1;
        //         } elseif($feet_pieces[$i] == '111 UP') {
        //             $range_count_feet[7] += 1;
        //         } 
        //     }

        //     for($i = 0; $i < 8; $i ++) {
        //         $sum_feet[$i] = $range_count_feet[$i] * $price_feet[$i];
        //     }
        // }

        // // total, for log info table.
        // $total_logs = $num_straight + $num_bend + $num_feet;
        // $total_amount = $amount_straight + $amount_bend + $amount_feet;
        
        // $data = array(
        //     'staff_id' => $this->session->userdata('staff_id'),
        //     'supplier_name' => $supplier_name,
        //     'supplier_contact' => $supplier_contact,
        //     'num_straight' => $num_straight,
        //     'num_bend' => $num_bend,
        //     'num_feet' => $num_feet,
        //     'total_logs' => $total_logs,
        //     'amount_straight' => $amount_straight,
        //     'amount_bend' => $amount_bend,
        //     'amount_feet' => $amount_feet,
        //     'total_amount' => $total_amount,
        //     'date_of_stock' => $date_of_stock,
        // );

        // if ($this->LogModel->store($data)) {

        //     $log_info_id = $this->LogModel->get_last_log_info_id($data['staff_id']);
        //     $data_log_straight = array();
        //     $data_log_bend = array();
        //     $data_log_feet = array();

        //     for($i = 0; $i < 8; $i ++) {

        //         array_push($data_log_straight, array(
        //             'log_info_id' => $log_info_id,
        //             'range' => $ranges_all[$i],
        //             'num_logs' => $range_count_straight[$i],
        //             'price' => $price_straight[$i],
        //             'amount' => $sum_straight[$i]
        //         ));
        //         array_push($data_log_bend, array(
        //             'log_info_id' => $log_info_id,
        //             'range' => $ranges_all[$i],
        //             'num_logs' => $range_count_bend[$i],
        //             'price' => $price_bend[$i],
        //             'amount' => $sum_bend[$i]
        //         ));
        //         array_push($data_log_feet, array(
        //             'log_info_id' => $log_info_id,
        //             'range' => $ranges_all[$i],
        //             'num_logs' => $range_count_feet[$i],
        //             'price' => $price_feet[$i],
        //             'amount' => $sum_feet[$i]
        //         ));
        //     }

        //     if($this->LogModel->store_batch('log_straight', $data_log_straight) 
        //         && $this->LogModel->store_batch('log_bend', $data_log_bend)
        //         && $this->LogModel->store_batch('log_feet', $data_log_feet)) {

        //         $status['success_log_store'] = true;
        //     } else {
        //         $status['failure_log_store'] = true;
        //     }
        // } else {
        //     $status['failure_log_store'] = true;
        // }

        // $this->session->set_userdata($status);
        // redirect('OfficeAdmin/logs');
    }
   
    public function delete_permission($log_info_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Logs/delete/') . $log_info_id;

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
        redirect('OfficeAdmin/logs');
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

    private function getStraightPiecePrice($range) 
    {
        switch($range) {
            case '45 - 50': return 0;
            break;
            case '51 - 60': return 10;
            break;
            case '61 - 70': return 15;
            break;
            case '71 - 80': return 25;
            break;
            case '81 - 90': return 32;
            break;
            case '91 - 100': return 40;
            break;
            case '101 - 110': return 48;
            break;
            case '111 UP': return 60;
            break;
            default: return;
        }
    }

    private function getBendPiecePrice($range) 
    {
        switch($range) {
            case '45 - 50': return 0;
            break;
            case '51 - 60': return 5;
            break;
            case '61 - 70': return 7;
            break;
            case '71 - 80': return 12;
            break;
            case '81 - 90': return 16;
            break;
            case '91 - 100': return 22;
            break;
            case '101 - 110': return 24;
            break;
            case '111 UP': return 30;
            break;
            default: die();
        }
    }

    private function getFeetPiecePrice($range) 
    {
        switch($range) {
            case '45 - 50': return 2;
            break;
            case '51 - 60': return 3;
            break;
            case '61 - 70': return 4;
            break;
            case '71 - 80': return 5;
            break;
            case '81 - 90': return 11;
            break;
            case '91 - 100': return 12;
            break;
            case '101 - 110': return 14;
            break;
            case '111 UP': return 16;
            break;
            default: die();
        }
    }
}