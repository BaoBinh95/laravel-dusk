<?php 
	//bai 1
	$arrayName = array(1,2,3,4);
	unset($arrayName[1]);
	for($i = 0; $i<= count($arrayName); $i++) {
		echo $arrayName[$i] . '<br/>';
	}
	//bai 2
	$x = $y = $z = 1;
	if(!(++$x > 1 && $y++ > 1)) {
		$z = $x + $y;
	}
	echo $z;
	
	