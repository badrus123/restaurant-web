<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Home_user_model extends CI_Model
{    
    public function get_data()
	{
		$this->db->select('*');
        $this->db->from('daftar_minuman as a');
        $this->db->join('daftar_makanan as b', 'a.id_minuman = b.id_makanan');
        $query = $this->db->get();
        return $query;
    }
    public function insert($data,$table)
    {
        return $this->db->insert($table,$data);
    }
}
?>