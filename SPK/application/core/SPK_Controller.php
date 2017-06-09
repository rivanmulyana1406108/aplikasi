<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SPK_Controller extends CI_Controller {
	
	public $data = array();

	function __construct(){
		parent::__construct();	
			$this->load->model('m_login');
			$this->user	= unserialize(base64_decode($this->session->userdata('user')));
			
	}
	
	public function display($data){
		
		if($this->user['validated'] == true){ 
			$data['status_user'] = $this->user['status'];
			$data['page'];	
			$this->load->view('index', $data);
		}
	}
	
	public function validate(){
		if($this->user['validated'] != true){
			redirect('c_login/display_form_login');
		}
		else
			return true;
	}
}