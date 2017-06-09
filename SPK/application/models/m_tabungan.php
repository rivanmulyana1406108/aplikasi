<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_tabungan extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	public function get_tabungan_id($id)
	{
		$query = $this->db->query ("select * from tabungan, nasabah WHERE tabungan.NO_NASABAH = '$id' AND nasabah.NO_NASABAH = tabungan.NO_NASABAH order by NO_TRANSAKSI DESC LIMIT 1");
		return $query->result();
	}
	
	public function jumlah_tabungan($a)
	{
		$query = $this->db->query ("SELECT NO_TRANSAKSI
								   FROM TABUNGAN
								   WHERE NO_TRANSAKSI LIKE  '$a%'");
		return $query->num_rows();
	}
	
	public function add_transaksi($data)
	{
		$query=$this->db->insert('tabungan', $data);
		return true;
	}
}
?>
