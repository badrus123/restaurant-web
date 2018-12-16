<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Pemesanan_user_model extends CI_Model
{    
    public function get_data()
	{
		$this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('username','bowo');
        $query = $this->db->get();
        return $query;
	}
	
}
?>