<?php

function aumentaSalario($salAtual, $aumento = 1.2){

	return $salAtual * $aumento;

}


echo aumentaSalario(1000);//Se eu não passar o aumento já tem um padrão. Valores obrigatórios a esquerda.


?>