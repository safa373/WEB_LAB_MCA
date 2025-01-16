<?php 
	function factorial($num){
		if($num<=1){
			return 1;
		}else{
		return $num*factorial($num-1);	
		}
	}
	$number=5;
	$result=factorial($number);
	echo"the factorial of $number is $result";
?>