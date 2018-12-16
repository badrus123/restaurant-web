<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaksi_admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Detail_transaksi_model');
    }
     public function index()
    {  		
            $data = array(
                    'title' => 'Data transaksi',
                    'transaksi' => $this->Detail_transaksi_model->get_data()
                    );      

            $this->load->view('admin/transaksi_admin',$data);
    }
}       