<?php

function trataErro($mesage, $line, $cod, $file){

	echo json_encode(array(
		"Menssagem"=>$mesage,
		"Linha"=>$line,
		"Código"=>$cod,
		"Arquivo"=>$file
	));


}


set_error_handler("trataErro");

echo 100/0;

//NÃO FUNCIONA


?>