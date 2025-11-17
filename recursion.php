<?php
function recursion($n){

  if ($n <= 0){
		return;
	}
	
	recursion($n - 1);
		for ($i = 0; $i < $n; $i++ ){
			echo "Hello";	
		}
		echo "\n";
} 

recursion(3);
?>
