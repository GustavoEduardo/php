<?php


class Usuario{

	public $nome;//visivel para todos
	protected $email;//visivel para a classe e classes filhas
	private $senha;//visivel apenas para a classe
	


	function __construct($nome, $email, $senha) {
    	$this->nome = $nome;
    	$this->email = $email;
    	$this->senha = $senha;
  	}

  	function getNome() {
    	return $this->nome;
  	}


  	public function __toString(){
        return "Nome: ".$this->nome." Email: ". $this->email;
    }


}


$user1 = new Usuario("Gustavo","gustavo@gmail.com","123456");
print_r($user1);
echo "<br><br>";
echo $user1->getNome();//Não tem o set mas tem o método construct. getNome é public!
echo "<br><br>";
echo $user1;//chama o metodo __toString


?>