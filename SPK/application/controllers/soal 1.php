<?php 
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
		}?>