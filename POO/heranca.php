<?php

class Veiculo {

	public $marca;
	public $modelo;
	public $cor;


	function acelerar(){
		echo "O veiculo acelerou.";
	}


}


class Carro extends Veiculo {


	function __construct(){

	}

	public $carroceria;
	public $torque;
	public $velMax;

}




$polo = new Carro();

$polo->marca = "volkswagen";//marca é um atributo herdado da classe mãe

echo $polo->marca."<br>";
$polo->acelerar();//metodo herdado da classe mãe





?>