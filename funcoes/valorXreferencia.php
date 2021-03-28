<?php

$num = 10;


function alteraNum(&$num){//passaagem por referencia. Altera a variavel

	return $num += 10;

}

function naoAlteraNum($num){//passagem por valor. Estou passando o valor de $num

	return $num += 10;
}



echo alteraNum($num)."</br>";//$num+10 = 20

echo naoAlteraNum($num)."</br>";//$num+10 = 30

echo $num// A ultima função não alterou o vaor de $num


?>