<?php
/*$a = 'lietuva grazi salis';*/
$a = ' vienas. du;trys';
$b = "";
$b = $a;

for ($i=0; $i<strlen($a); $i++){
	if ($i==0){
		substr($a, 0, 9);
		echo strtoupper($a[1]);
		$i++;
	}else if ($a[$i] == '.'){ 
		echo '';	
	}else if ($a[$i] == ';'){
		echo strtoupper(" ".$a[$i+1]);
		$i++;
	}else if ($a[$i] == ' '){ 
		echo ' ';
		echo strtoupper($a[$i+1]);
	}else 
		echo $a[$i];
		
}



