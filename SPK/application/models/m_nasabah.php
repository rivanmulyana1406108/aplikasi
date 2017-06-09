<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_nasabah extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	public function get_nasabah()
	{
		$query = $this->db->query ("select * from nasabah");
		return $query->result();
	}
	
	public function get_nasabah_id($id)
	{
		$query = $this->db->query ("select * from nasabah WHERE NO_NASABAH = '$id'");
		return $query->result();
	}
	
	public function update_nasabah($data,$id)
	{
		$this->db->where('NO_NASABAH',$id);
		$this->db->update('nasabah',$data);
		return true;
	}
	
	public function add_nasabah($data)
	{
		$query=$this->db->insert('nasabah', $data);
		return true;
	}
}
?>
