<?php

abstract class Funcionario{// A classe abstrata não pode ser instanciada. Ela serve como um modelo para classe filha mas não obriga a implementar os métodos como a interface.
	
	public $nome;
	public $cpf;
	public $registro;


	function cadastrar(){
		echo "Funcionario Cadastrado";
	}

}


class Gerente extends Funcionario{
	
	public $horaExtra;


	function cadastrar(){//Polimorfismo. Quando eu dou outro comportamento a um metodo herdado.
		return 1+1;
	}

}


$gerente = new Gerente();

$gerente->nome= "José";
$gerente->cadastrar();
echo $gerente->cadastrar();


//$vendedor = new Funcionario();Não posso instanciar a classe abstrata

?>