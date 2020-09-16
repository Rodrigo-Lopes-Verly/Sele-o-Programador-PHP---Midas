<?php

$n = 1;
$n2 = 2;
$n3 = 3;
$n4 = 4;

function CALCULAAREA($num){

	$a = $num;
	$i = $a-1;
	$soma = 0;

	for($i;$i <= $a;$i++){
		$soma = $soma + ($i*$i);
	}
echo "N ".($a)." = ".($soma);

}
echo "</br>";
CALCULAAREA($n);
echo "</br>";
CALCULAAREA($n2);
echo "</br>";
CALCULAAREA($n3);
echo "</br>";
CALCULAAREA($n4);

?>