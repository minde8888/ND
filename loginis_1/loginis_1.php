<?php
class TextClass {
	public static function sakinys ($text){
		$result = '';
		for ($i=0; $i<strlen($text); $i++){
			if ($i==0 ){
				if ($text[$i] == ' '){ 
					$result .= ' ';
					$i++;
				}
				$result .= strtoupper($text[$i]);
			}else if ($text[$i] == ';'){
				$result .= strtoupper(";".$text[$i+1]);
				$i++;
			}else if ($text[$i] == ' '){ 
				$result .= ' ';
				$result .= strtoupper($text[$i+1]);
				$i++;
			}else 
				$result .= $text[$i];
		}
		return $result;
	}
}

$test1 = TextClass::sakinys('lietuva grazi salis');
echo strcmp($test1, 'Lietuva Grazi Salis');
$test2 = TextClass::sakinys(' vienas. du;trys');
echo strcmp($test2, ' Vienas. Du;Trys');
$test3 = TextClass::sakinys('    oslas norvegijos  sostine');
echo strcmp($test3, '    Oslas Norvegijos  Sostine');
echo $test3;





