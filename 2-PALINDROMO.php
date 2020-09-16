<?php

$palavra2 = "dabad";
$palavra3 = "a";
$palavra4 = "abac";

function PALINDROMO($str){

	$a = $str;
	$b = strrev($a);

	if($a == $b){
		echo "String ".($a)." = true";
	}else{
		echo "String ".($a)." = false";
	};
};

echo "</br>";
PALINDROMO($palavra2);
echo "</br>";
PALINDROMO($palavra3);
echo "</br>";
PALINDROMO($palavra4);

?>