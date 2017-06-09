<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_nasabah extends SPK_Controller {
	
	
	function __construct(){
		parent::__construct();	
			$this->load->model('m_nasabah');
			$this->user	= unserialize(base64_decode($this->session->userdata('user')));			
	}
	
	
	function view_nasabah(){
		$this->validate();
		$nasabah = $this->m_nasabah->get_nasabah();
		$data = array( 
						'nasabah' => $nasabah,
						'page'=>'v_nasabah',
					  );
		$this->display($data);
	}	
	
	function form_edit_nasabah(){
		$this->validate();
		$id = $this->uri->segment(3);
		$nasabah = $this->m_nasabah->get_nasabah_id($id);
		{
			$data = array( 'page'=>'v_edit_nasabah',
						   'nasabah'=> $nasabah,
						  );
		}
		$this->display($data);
	}
	
	function update_nasabah(){
		$this->validate();
		$no = $this->input->post('no');
		$data = array(
					"NAMA_NASABAH" => $this->input->post('nama'),
					"ALAMAT_NASABAH" => $this->input->post('alamat'),
					"NOHP_NASABAH" => $this->input->post('hp'),
					"PASSWORD" => $this->input->post('ps'),
				);
		$this->m_nasabah->update_nasabah($data,$no);
		redirect('c_nasabah/view_nasabah', 'refresh');	
	}
	
	function form_add_nasabah3(){
		$this->validate();
		
		$data[1]="MANGGA";
		$data[2]="apel";
		$data[3]="mangga";
		$data[4]="apel";
		$data[5]="mangga";
		$data[6]="mangga";
		$data[7]="MangGA";
		
		for ($i=1; $i<8;)	
		{
			$a = 0;
			for ($j=2; $j<8;){
				if ($data[$i] == $data[$j]){
					$a = $a + 1;
					$j++;
				}
				
			}
			echo $data[i];
			echo "jumlah";
			echo "a";
			$i++;
		}
		
		

		$data = array( 'page'=>'v_add_nasabah',
				);
		
		$this->display($data);
	}
	
	function form_add_nasabah(){
		$this->validate();
		
		$data[1]=102;
		$data[2]=12;
		$data[3]=102;
		$data[4]=103;
		$data[5]=12;
		$data[6]=105;
		$data[7]=103;
		$data[8]=100;
		$data[9]=105;
		$data[10]=101;
		$data[11]=101;
		for ($i=1; $i<12;){
			for ($j=2; $j<12;){
				if ($data[$i] != $data[$j] && $i != $j){
					echo $data[$i];
					echo "tidak berpasangan ";
					$j++;
				}
			}
			$i++;
		}
		
		

		$data = array( 'page'=>'v_add_nasabah',
				);
		
		$this->display($data);
	}
	
	function form_add_nasabah1(){
		$this->validate();
		
		for($i=1; $i<100;){
			if($i%3== 0 && $i%5== 0 ){
				echo 'SNIP-SNAP';
			}     
			else if($i%3 == 0){
				echo 'SNIP';
			}
			else if($i%5 == 0){
				echo 'SNAP';
			}
			else{
				echo $i;
			}
			$i++;
		}
		$data = array( 'page'=>'v_add_nasabah',
				);
		
		$this->display($data);
	}
	
	function add_nasabah(){
		$this->validate();
		$data = array(
					"NO_NASABAH" => $this->input->post('no'),
					"NAMA_NASABAH" => $this->input->post('nama'),
					"PASSWORD" => $this->input->post('ps'),
					"ALAMAT_NASABAH" => $this->input->post('alamat'),
					"NOHP_NASABAH" => $this->input->post('hp'),
				);
		$this->m_nasabah->add_nasabah($data);
		redirect('c_nasabah/view_nasabah', 'refresh');
	}
	
}
