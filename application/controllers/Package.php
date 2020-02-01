<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{
    public function store()
    {
        $status = array();

        $foreman = $this->input->post('foreman');
        $foreman_id = substr(explode(' ', $foreman)[0], 1);
        $container_no = $this->input->post('container_no');
        $seal_no = $this->input->post('seal_no');

        $p1 = str_replace(' ', '', $this->input->post('p1'));
        $p2 = str_replace(' ', '', $this->input->post('p2'));
        $p3 = str_replace(' ', '', $this->input->post('p3'));
        $p4 = str_replace(' ', '', $this->input->post('p4'));
        $p5 = str_replace(' ', '', $this->input->post('p5'));
        $p6 = str_replace(' ', '', $this->input->post('p6'));
        $p7 = str_replace(' ', '', $this->input->post('p7'));
        $p8 = str_replace(' ', '', $this->input->post('p8'));
        $p9 = str_replace(' ', '', $this->input->post('p9'));

        if (!$this->valid_input($p1, 'Invalid characters entered for 230'.
        ' pieces column, Please enter only numbers seperated by commas')) {
            return;
        } else if (!$this->valid_input($p2, 'Invalid characters entered for 220' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return;
        } else if (!$this->valid_input($p3, 'Invalid characters entered for 215' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return ;
        } else if (!$this->valid_input($p4, 'Invalid characters entered for 210' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return ;
        } else if (!$this->valid_input($p5, 'Invalid characters entered for 200' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return ;
        } else if (!$this->valid_input($p6, 'Invalid characters entered for 190' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return ;
        } else if (!$this->valid_input($p7, 'Invalid characters entered for 185' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return ;
        } else if (!$this->valid_input($p8, 'Invalid characters entered for 180' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return;
        } else if (!$this->valid_input($p9, 'Invalid characters entered for 170' . 
        ' pieces column, Please enter only numbers seperated by commas')) {
            return;
        }

        $p1 = $this->str_to_array($p1);
        $p2 = $this->str_to_array($p2);
        $p3 = $this->str_to_array($p3);
        $p4 = $this->str_to_array($p4);
        $p5 = $this->str_to_array($p5);
        $p6 = $this->str_to_array($p6);
        $p7 = $this->str_to_array($p7);
        $p8 = $this->str_to_array($p8);
        $p9 = $this->str_to_array($p9);

        $non_filled_counter = 0;

        if (count($p1) == 1 && $p1[0] == '') {
            $p1 = array();
            $non_filled_counter++;
        }
        if (count($p2) == 1 && $p2[0] == '') {
            $p2 = array();
            $non_filled_counter++;
        }
        if (count($p3) == 1 && $p3[0] == '') {
            $p3 = array();
            $non_filled_counter++;
        }
        if (count($p4) == 1 && $p4[0] == '') {
            $p4 = array();
            $non_filled_counter++;
        }
        if (count($p5) == 1 && $p5[0] == '') {
            $p5 = array();
            $non_filled_counter++;
        }
        if (count($p6) == 1 && $p6[0] == '') {
            $p6 = array();
            $non_filled_counter++;
        }
        if (count($p7) == 1 && $p7[0] == '') {
            $p7 = array();
            $non_filled_counter++;
        }
        if (count($p8) == 1 && $p8[0] == '') {
            $p8 = array();
            $non_filled_counter++;
        }
        if (count($p9) == 1 && $p9[0] == '') {
            $p9 = array();
            $non_filled_counter++;
        }

        if ($non_filled_counter == 9) {
            $status["err_all_values_empty"] = true;
            $this->session->set_userdata($status);
            redirect('Accountant/packing');
            return;
        }

        // sum up all pieces
        $num_pieces = count($p1) + count($p2) + count($p3) + count($p4) + count($p5) +
         count($p6) + count($p7) + count($p8) + count($p9);

        // get individual cbms
        $p1_cbm_net = $this->get_total_cbm(230, $p1);
        $p2_cbm_net = $this->get_total_cbm(220, $p2);
        $p3_cbm_net = $this->get_total_cbm(215, $p3);
        $p4_cbm_net = $this->get_total_cbm(210, $p4);
        $p5_cbm_net = $this->get_total_cbm(200, $p5);
        $p6_cbm_net = $this->get_total_cbm(190, $p6);
        $p7_cbm_net = $this->get_total_cbm(185, $p7);
        $p8_cbm_net = $this->get_total_cbm(180, $p8);
        $p9_cbm_net = $this->get_total_cbm(170, $p9);

        // sum up all cbm
        $total_cbm = $p1_cbm_net + $p2_cbm_net + $p3_cbm_net + $p4_cbm_net + $p5_cbm_net + 
        $p6_cbm_net + $p7_cbm_net + $p8_cbm_net + $p9_cbm_net;

        $packageData = array(
            'recorder_id' => $this->session->userdata('staff_id'),
            'foreman_id' => $foreman_id,
            'container_no' => $container_no,
            'seal_no' => $seal_no,
            'num_pieces' => $num_pieces,
            'total_cbm' => $total_cbm,
        );

        $package_id = $this->PackageModel->store($packageData);
        if ($package_id) {

            $packageItemsData = array();

            foreach($this->package_data(230, $p1, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(220, $p2, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(215, $p3, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(210, $p4, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(200, $p5, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(190, $p6, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(185, $p7, $package_id) as $res) {
                array_push($packageItemsData, $res);
            } 
            foreach($this->package_data(180, $p8, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            foreach($this->package_data(175, $p9, $package_id) as $res) {
                array_push($packageItemsData, $res);
            }
            
            if ($this->PackageModel->store_batch_package_item($packageItemsData)) {
                $status['success_package_store'] = true;
            } else {
                $status['failure_package_store'] = true;
            }
        } else {
            $status['failure_package_store'] = true;
        }

        $this->session->set_userdata($status);
       redirect('Accountant/packing');
    }

    private function package_data($length, $array, $package_id)
    {
        $packageItemsData = array();

        // process data for p1
        for ($i = 0; $i < count($array); $i++) {
            array_push($packageItemsData,
                array(
                    'package_id' => $package_id,
                    'length' => $length,
                    'girth' => $array[$i],
                    'cbm_net' => $this->get_cbm($length, $array[$i]),
                )
            );
        }

        return $packageItemsData;
    }

    private function get_total_cbm($length, $array)
    {
        $cbm_net = 0;

        for ($i = 0; $i < count($array); $i++) {
            $cbm_net += ($length * ($array[$i] * $array[$i])) / 16000000;
        }

        return $cbm_net;
    }

    private function get_cbm($length, $value)
    {
        return ($length * ($value * $value)) / 16000000;
    }

    private function str_to_array($str)
    {
        $str = str_replace(' ', '', $str);
        return explode(',', $str);
    }

    private function valid_input($value, $err_msg)
    {
        if (!(preg_replace('/[0-9\,]/', '', $value) == "")) {
            $this->session->set_userdata(array('err_input' => $err_msg));
            redirect('Accountant/packing');
            return false;
        }
        // if(count($value) > 0) {
        //     if(!(preg_replace('/[0-9]/', '', $value[strlen($value) - 1]))){
        //         $this->session->set_userdata(array('err_input' => $err_msg));
        //         redirect('Accountant/packing');
        //         return false;   
        //     }
        // }

        return true;
    }

    public function delete_permission($package_id)
    {
        $sweetalert = base_url('asset/js/sweetalert.min.js');
        $url_delete = base_url('Package/delete/') . $package_id;

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

    public function delete($package_id)
    {
        $status = array();

        if ($this->PackageModel->delete($package_id)) {
            $status["success_package_delete"] = true;
        } else {
            $status["failure_package_delete"] = true;
        }

        $this->session->set_userdata($status);
        redirect('Accountant/packing');
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

}
