<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_admin_model extends CI_Model
{    
	public function get_data($id_pesanan)
	{
		$this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('id_pesanan', $id_pesanan);
        $query = $this->db->get();
        return $query;
	}
    public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }
}
?>