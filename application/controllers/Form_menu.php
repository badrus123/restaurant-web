<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_menu extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Form_menu_model');
        }

     public function index()
        {  		
                $this->load->view('admin/form_menu');
        }

    public function makanan(){
        $nama_makanan = $this->input->post('nama_makanan');
        $harga_makanan = $this->input->post('harga_makanan');
        $data = array(
                "makanan"=>$nama_makanan,
                "harga_makanan"=>$harga_makanan
        );
        $this->Form_menu_model->insert($data,'daftar_makanan');
        redirect('Home_admin/index');
        }
        
        public function minuman(){
                $nama_makanan = $this->input->post('nama_minuman');
                $harga_makanan = $this->input->post('harga_minuman');
                $data = array(
                        "minuman"=>$nama_makanan,
                        "harga_minuman"=>$harga_makanan
                );
                $this->Form_menu_model->insert($data,'daftar_minuman');
                redirect('Home_admin/index');
                }
}