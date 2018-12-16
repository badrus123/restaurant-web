<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Home_admin_model');
    }
     public function index()
    {  		
            $data = array(
                    'title' => 'Data menu makanan',
                    'menu' => $this->Home_admin_model->get_data()
                    );      

            $this->load->view('admin/home_admin',$data);
    }
}       