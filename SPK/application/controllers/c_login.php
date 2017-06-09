<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends SPK_Controller {

	function __construct(){
		parent::__construct();	
			$this->load->model('m_login');	
			$this->user	= unserialize(base64_decode($this->session->userdata('user')));
	}
	
	public function display_form_login(){
		$this->session->sess_destroy();
		$this->load->view('v_login');
	}
	
	
	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jenis_pengguna = $this->input->post('jenis_pengguna');
		$this->session->unset_userdata('user');
		
		if($username != '' and $password != ''){
			$ack = $this->m_login->authentUser($username, $password, $jenis_pengguna);
			if($ack == 0){
				echo '<script>alert("username atau password salah");</script>';
				redirect('c_login/display_form_login','refresh');
			}
			else {
				if($jenis_pengguna == 1){
					redirect('c_tabungan/index');
				}
				else if ($jenis_pengguna == 2){
					redirect('c_nasabah/view_nasabah');
				}	
			}
		}
		else{
			echo '<script>alert("isi username dan password");</script>';
		    redirect('c_login/display_form_login','refresh');
		}
		
	}
	
	public function logout(){
		$this->validate();
        $this->session->sess_destroy();
		redirect('c_login/display_form_login');
	}
	
	
}