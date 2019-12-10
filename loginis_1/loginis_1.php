<?php
$a = 'lietuva grazi salis';
/*$a = ' vienas. du;trys';*/
for ($i=0; $i<strlen($a); $i++){
	if ($i==0){
		echo strtoupper($a[0]);
	} else if ($a[$i] == ' '){ 
		echo ' ';
		echo strtoupper($a[$i+1]);
		$i++;
	} else 
		echo $a[$i];
}
