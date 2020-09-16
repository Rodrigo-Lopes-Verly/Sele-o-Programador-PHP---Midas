<?php

$n1 = [1, 3, 2, 1];
$n2 = [1, 3, 2];
$n3 = [1, 2, 1, 2];
$n4 = [3, 6, 5, 8, 10, 20, 15];
$n5 = [1, 1, 2, 3, 4, 4];
$n6 = [1, 4, 10, 4, 2];
$n7 = [10, 1, 2, 3, 4, 5];
$n8 = [1, 1, 1, 2, 3];
$n9 = [0, -2, 5, 6];
$n10 = [1, 2, 3, 4, 5, 3, 5, 6];
$n11 = [40, 50, 60, 10, 20, 30];
$n12 = [1, 1];
$n13 = [1, 2, 5, 3, 5];
$n14 = [1, 2, 5, 5, 5];
$n15 = [10, 1, 2, 3, 4, 5, 6, 1];
$n16 = [1, 2, 3, 4, 3, 6];
$n17 = [1, 2, 3, 4, 99, 5, 6];
$n18 = [123, -17, -5, 1, 2, 3, 12, 43, 45];
$n19 = [3, 5, 67, 98, 3];


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

SequenciaCrescente($n1); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n2); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n4); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n5); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n6); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n7); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n8); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n9); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n10); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n11); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n12); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n13); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n14); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n15); echo "- false";echo "</br>";echo "</br>";
SequenciaCrescente($n16); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n17); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n18); echo "- t";echo "</br>";echo "</br>";
SequenciaCrescente($n19); echo "- t";echo "</br>";echo "</br>";
?>