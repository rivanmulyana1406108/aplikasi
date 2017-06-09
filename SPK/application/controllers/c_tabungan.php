<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_tabungan extends SPK_Controller {
	
	
	function __construct(){
		parent::__construct();	
			$this->load->model('m_tabungan');
			$this->load->model('m_nasabah');
			$this->user	= unserialize(base64_decode($this->session->userdata('user')));			
	}
	
	
	function index(){
		$this->validate();
		$id= $this->user['username'];
		$tabungan = $this->m_tabungan->get_tabungan_id($id);
		$data = array( 
						'tabungan' => $tabungan,
						'page'=>'v_informasi_saldo',
					  );
		$this->display($data);
	}
	
	function form_tarikan(){
		$this->validate();
		$nasabah = $this->m_nasabah->get_nasabah();
		$data = array( 
						'nasabah' => $nasabah,
						'page'=>'v_tarikan',
					  );
		$this->display($data);
	}
	
	function tarikan(){
		$this->validate();
		$date = date('Ymd');
		$datetime = date('Y-m-d h:m:s');
		$p = $this->m_tabungan->jumlah_tabungan($date);
		if($p < 9){
			$jp = $p + 1;
			$jumlah_tabungan = "0$jp";
		}
		else if($p < 99){
			$jp = $p + 1;
			$jumlah_tabungan = "$jp";
		}
		else {
			echo "Silahkan untuk melakukan transaksi esok hari";
		}
		$nota = "$date$jumlah_tabungan";
		$nona = $this->input->post('no');
		$nope = $this->user['username'];
		$tarik = $this->input->post('tarik');
		$tabungan = $this->m_tabungan->get_tabungan_id($nona);
		$saldo = $tabungan[0]->SALDO - $tarik;
		$data = array(
					"NO_TRANSAKSI" => $nota,
					"NO_NASABAH" => $nona,
					"NO_PEGAWAI" => $nope,
					"TANGGAL_TRANSAKSI" => $datetime,
					"KREDIT" => $tarik,
					"SALDO" => $saldo,
				);
		$this->m_tabungan->add_transaksi($data);
		$data2 = array( 
						'id' => $nona,
						'tarikan'=>$tarik,
						'saldo'=>$saldo,
						'page'=>'v_notifikasi_tarikan',
					  );
		$this->display($data2);
	}
	
	function form_setoran(){
		$this->validate();
		$nasabah = $this->m_nasabah->get_nasabah();
		$data = array( 
						'nasabah' => $nasabah,
						'page'=>'v_setoran',
					  );
		$this->display($data);
	}
	
		function setoran(){
		$this->validate();
		$date = date('Ymd');
		$datetime = date('Y-m-d h:m:s');
		$p = $this->m_tabungan->jumlah_tabungan($date);
		if($p < 9){
			$jp = $p + 1;
			$jumlah_tabungan = "0$jp";
		}
		else if($p < 99){
			$jp = $p + 1;
			$jumlah_tabungan = "$jp";
		}
		else {
			echo "Silahkan untuk melakukan transaksi esok hari";
		}
		$nota = "$date$jumlah_tabungan";
		$nona = $this->input->post('no');
		$nope = $this->user['username'];
		$setor = $this->input->post('setor');
		$tabungan = $this->m_tabungan->get_tabungan_id($nona);
		$saldo = $tabungan[0]->SALDO + $setor;
		$data = array(
					"NO_TRANSAKSI" => $nota,
					"NO_NASABAH" => $nona,
					"NO_PEGAWAI" => $nope,
					"TANGGAL_TRANSAKSI" => $datetime,
					"DEBIT" => $setor,
					"SALDO" => $saldo,
				);
		$this->m_tabungan->add_transaksi($data);
		$data2 = array( 
						'id' => $nona,
						'setoran'=>$setor,
						'saldo'=>$saldo,
						'page'=>'v_notifikasi_setoran',
					  );
		$this->display($data2);
	}

	
	
	
}
