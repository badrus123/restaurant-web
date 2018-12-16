<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_transaksi_model extends CI_Model
{    
    public function get_data()
	{
		$this->db->select('*');
        $this->db->from('transaksi');
        $query = $this->db->get();
        return $query;
	}
	
}
?>