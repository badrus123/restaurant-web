<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pemesanan_user extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pemesanan_user_model');
    }
     public function index()
    {  		
            $data = array(
                    'title' => 'Data Pesanan',
                    'pesanan' => $this->Pemesanan_user_model->get_data()
                    );      

            $this->load->view('user/pemesanan_user',$data);
    }
}       