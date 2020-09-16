<?php

$ano1 = 1905;
$ano2 = 1700;

function SECULOANO(int $a){
	$b = $a;

	if($b%100 == 0){
		$c = ($b/100);
			echo "Ano ".($b)." = século ".$c;
	}
		else {
			($d = (($b/100)+1));
				echo "Ano ".($b)." = século ".(int)$d;
			}
};

SECULOANO($ano1);
echo "</br>";
SECULOANO($ano2);

?>
