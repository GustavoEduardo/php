<?php

spl_autoload_register(function($nameClass){//Procura as classes. É executado no new

	if (file_exists("$nameClass.php")) {//verifica se existe na pasta atual
		require_once "$nameClass.php";
	}

	if (file_exists("Funcionario".DIRECTORY_SEPARATOR."$nameClass.php")) {//verifica se existe em Funcionario
		require_once "Funcionario".DIRECTORY_SEPARATOR."$nameClass.php";
	}

});


class Gerente extends Funcionario{
	
	public $horaExtra;

}

$gerente = new Gerente();

$gerente->nome= "José";
$gerente->cadastrar();

?>