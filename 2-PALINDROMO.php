<?php

function PALINDROMO($str){

	$a = $str;
	$b = strrev($a);

	if($a == $b){
		echo "String ".($a)." = true";
	}else{
		echo "String ".($a)." = false";
	};
};

?>
