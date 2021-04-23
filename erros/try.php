<?php

function trataNome($nome){
	 if (!$nome) {
	 	throw new Exception("Nenhum nome informado.", 400);//Passo a menssagem e o código do erro.
	 	
	 }

	echo ucfirst($nome)."<br>";
}



try {

	trataNome("Gustavo");
	trataNome("");
	
} catch (Exception $e) {

	echo json_encode(array(
		"Menssagem"=>$e->getMessage(),
		"Linha"=>$e->getLine(),
		"Código"=>$e->getCode(),
		"Arquivo"=>$e->getFile()
	));
	
}finally{

	//Bloco finally sempre é executado. Não é obrigatório.
}


?>