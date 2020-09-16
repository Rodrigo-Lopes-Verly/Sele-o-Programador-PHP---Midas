<?php

function SequenciaCrescente($array){
	$a = $array;
	$b = $a;

	for ($i=0;$i<sizeof($a);$i++){
		$b = $a;
		$valor = 0;

		unset($b[$i]);		
		$c = array_values($b);

		for ($j=0;$j<sizeof($c)-1;$j++){
			if($c[$j] < $c[$j+1]){
				$valor = $valor+1;

			}else {
				$valor = $valor+0;
				break;
			};
		}
		if($valor == sizeof($c)-1){
			break;
		}

		}	
		if($valor == sizeof($c)-1){
			echo "True";

		}else {
			echo "False";
		}
};

?>
