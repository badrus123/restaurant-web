<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail_admin extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('Detail_admin_model');
        }
        public function index($id_pesanan)
        {  	
                $item['pesanan'] = $this->Detail_admin_model->get_data($id_pesanan);	
                $data = array(
                        'id_pesanan' => $id_pesanan,
                        'title' => 'Data pesanan',
                        'pesanan' => $item['pesanan']
                        );       
                $this->load->view('admin/detail_admin',$data);
        }

        public function transaksi(){      
            $id_pesanan = $this->input->post('id_pesanan');
            $date = $this->input->post('date');
            $total = $this->input->post('total');
            $data = array(
                    "id_pesanan"=>$id_pesanan,
                    "tanggal_transaksi"=>$date,
                    "total"=>$total
            );
            $this->Detail_admin_model->insert($data,'transaksi');
            redirect('Home_admin');      
            }
}