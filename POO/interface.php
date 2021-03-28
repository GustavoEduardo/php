<?php

interface Funcionario{


	public function promover($cargo);

}



class Vendedor implements Funcionario {


	private $idCadastro;
	protected $cpf;
	public $nome;


	public function promover($cargo){
		echo "funcionario promovido para ".$cargo;
	}


	
}

$funcionario = new Vendedor();

$funcionario->promover("Programador PHP Senior");



?>