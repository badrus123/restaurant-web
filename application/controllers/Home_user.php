<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_user extends CI_Controller {
        public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Home_user_model');
    }
     public function index()
    {  		
            $data = array(
                    'title' => 'Data menu makanan',
                    'menu' => $this->Home_user_model->get_data()
                    );  

            $this->load->view('user/home_user',$data);
    }

    public function menu(){
        $total = 0;
        $curr_f = 0;
        $curr_m = 0;
        $str_food_result = ""; // string untuk menyimpan makanan2 yang dipilih
        $str_drink_result = ""; // string untuk menyimpan inuman2 yang dipilih
        
        for($i = 0; $i < 12 ; $i++){
                $curr_food = $this->input->post('order_makanan'.$i); 
                $curr_drink = $this->input->post('order_minuman'.$i); 
                
                if($curr_food != null){
                        $curr_f += $curr_food;
                        $total += $this->input->post('harga_makanan'.$i)*$curr_food;
                        $str_food_result .= $this->input->post('makanan'.$i).";";
                }

                if($curr_drink != null){
                        $curr_m += $curr_drink;
                        $total += $this->input->post('harga_minuman'.$i)*$curr_drink;
                        $str_drink_result .= $this->input->post('minuman'.$i).";";                        
                }
        }
        // echo "Total Makanan: ".$curr_f."<br>";
        // echo "Total Belanja kentuy: ".$total;
        // echo "<div>Makanan : ".$str_food_result."</div>";
        // echo "<div>Minuman : ".$str_drink_result."</div>";

        // $list_food = explode(";", $str_food_result);
        // $list_drink = explode(";", $str_drink_result);

        $lokasi = $this->input->post('lokasi');
        $date = $this->input->post('date');
        
        $data = array(
                "food"=>$str_food_result,
                "quant_food"=>$curr_f,
                "drink"=>$str_drink_result,
                "quant_drink"=>$curr_m,
                "date"=>$date,
                "location"=>$lokasi,
                "total_harga"=>$total,
                "username"=>"bowo"
        );
        $this->Home_user_model->insert($data,'pesanan');
                // redirect("Home_user");
                echo"bagus      ";
        }
}       