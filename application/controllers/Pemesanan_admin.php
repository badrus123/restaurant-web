<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pemesanan_admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pemesanan_admin_model');
    }
     public function index()
    {  		
            $data = array(
                    'title' => 'Data Pesanan',
                    'pesanan' => $this->Pemesanan_admin_model->get_data()
                    );      

            $this->load->view('admin/pemesanan_admin',$data);
    }
}       