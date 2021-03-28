<?php

//varios parametos para um array com a função func_get_args( );

function somaValores($a,$b,$c){

	$valores = func_get_args( );
	$result = 0;

	foreach ($valores as $n) {
		$result += $n;
	}

	return $result;
}


print_r("Resultado da soma: ".somaValores(1,6,3.5)."</br>");



?>