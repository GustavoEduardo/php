<?php

require_once("config.php");

class Usuario{

	public $idUsuario;
	public $desLogin;
	public $desSenha;
	public $dtCadastro;


	function loadById($id){

		$sql = new Sql();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array("ID" => $id ));

		if(count($result)>0){

			$row = $result[0];

			$this->idUsuario= $row["idusuario"];
			$this->desLogin= $row["deslogin"];
			$this->desSenha= $row["dessenha"];
			$this->dtCadastro= new DateTime($row["dtcadastro"]) ;

		}

	}


	function __toString(){
		return "Login: ".$this->desLogin."<br>Data do Cadastro: ".$this->dtCadastro->format("d/m/y");
	}


}
	
	


?>