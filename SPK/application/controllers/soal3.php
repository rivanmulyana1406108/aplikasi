<?php
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
			for ($j=1; $j<8;){
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
?>