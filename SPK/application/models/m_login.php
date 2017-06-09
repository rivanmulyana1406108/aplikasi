<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	public function authentUser($username, $password, $jenis_pengguna)
	{	
		if($jenis_pengguna == 1){
			$q = $this->db->query("SELECT * FROM nasabah where NO_NASABAH = '$username' and PASSWORD = '$password' "); 
		}
		else if($jenis_pengguna == 2){
			$q = $this->db->query("SELECT * FROM pegawai where NO_PEGAWAI = '$username' and PASSWORD = '$password' "); 
		}
		
		if($q->num_rows == 1)
		{
			if($jenis_pengguna == 1){
				$status =1;
			}
			else if($jenis_pengguna == 2){
				$status =2;
			}
			
			$data = array(
						'username' => $username, 
						'status' => $status,
						'validated' => true
						);				
			$this->session->set_userdata('user', base64_encode(serialize($data)));
            return 1;
		}
        return 0;
	}
	
}
?>
