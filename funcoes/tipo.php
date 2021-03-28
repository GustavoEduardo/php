<?php

//Definindo o tipo dos parametros e do retorno 
function somaInt(int $a,$b):string{//está definido o tipo que será recebido e oque será retornado
	
	return $a + $b;
}

var_dump(somaInt(5.8,5)) ;//ignora o . flutuante


?>