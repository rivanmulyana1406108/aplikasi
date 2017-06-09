<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_coba extends CI_Controller 
{
	function form_add_nasabah3(){
		$this->validate();
		
		$data[1]="MANGGA";
		$data[2]="apel";
		$data[3]="mangga";
		$data[4]="apel";
		$data[5]="mangga";
		$data[6]="mangga";
		$data[7]="MangGA";
		$a = 0;
		for ($i=1; $i<8;)	
		{
			for ($j=1; $j<8;){
				if ($data[$i] == $data[$j]){
					$a = $a + 1;
					$j++;
				}
				
			}
			$i++;
		}		
	}
	
	function form_add_nasabah2(){
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
		for ($i=1; $i<12;)
			
		{
		
			for ($j=1; $j<12;){
				if ($data[$i] != $data[$j]){
					echo "'$data['$i']' tidak berpasangan ";
					$j++;
				}
			}
			$i++;
		}
	}
	
	function form_add_nasabah(){
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
	}
}