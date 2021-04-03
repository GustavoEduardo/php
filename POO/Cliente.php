<?php


class Cliente{

	public $nome;
	public $cpf;
	public $debito;
	public $vencimento;
	public $situacao;
	
	function __construct($nome,$cpf){
		$this->nome =$nome;
		$this->cpf =$cpf;
	}


	function __toString(){
		return "Nome: ".$this->nome;
	}


	function addDebito($valor){
		$this->debito += $valor;
		echo "Débito atualizado para ".$this->debito;
	}

	function pagar(float $valor){
		$this->debito -= $valor;
		echo "Pagamento efetuado no valor de R$ ".$valor.". Débito atualizado para R$ ".$this->debito;
	}
}


$cliente = new Cliente("Gustavo","12365478900");
echo $cliente."<br>";
$cliente->addDebito(100);
echo "<br>";
$cliente->pagar(30);
echo "<br>";



?>