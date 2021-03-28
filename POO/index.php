<?php

class Funcionario{

	private $nome;
	private $cpf;
	private $salario;


	public function getNome(){
		return $this->nome;
	}

	public function setNome(string $nome){
		if(is_string ( $nome )){
			$this->nome = $nome;
		}else{
			echo "O nome precisa ser um texto!";
		}
		
	}
	
	public function getCpf(){
		return $this->cpf;
	}
	public function setCpf($cpf){

		$cpfValido = Funcionario::validarCpf($cpf);//chamando método static
		if($cpfValido){
			$this->cpf = $cpf;
		}else{
			echo "CPF invalido!";
		}
		
	}

	public function getSalario():float{
		return $this->salario;
	}
	public function setSalario($salario){
		$this->salario = $salario;
	}

	public static function validarCpf($cpf):bool{
		//lógica de validar cpf
		return false;

	}

}



$jorge = new Funcionario();

$jorge->setNome("jorge Andrade");
echo $jorge->getNome();
echo "<br>";
$jorge->setCpf(32165498700);
echo $jorge->getCpf();
echo "<br>";

var_dump(Funcionario::validarCpf(55555555555));//chamando método static. Não preciso de um objeto




?>