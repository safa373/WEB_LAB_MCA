<?php
	function fibonacciseries($n){
		$num1=0;
		$num2=1;
		echo "fibonoci series up to $n terms:\n";
		for($i=0;$i<$n;$i++) {
			echo $num1."";
			$num3=$num1+$num2;
			$num1=$num2;
			$num2=$num3;
		}
	}
	fibonacciseries(15);
?>