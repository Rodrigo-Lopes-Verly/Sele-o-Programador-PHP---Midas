<?php

function CALCULAAREA($num){

	$a = $num;
	$i = $a-1;
	$soma = 0;

	for($i;$i <= $a;$i++){
		$soma = $soma + ($i*$i);
	}
echo "N ".($a)." = ".($soma);

}

?>
