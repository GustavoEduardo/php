<?php

require_once("config.php");


class Usuario{

	public $idUsuario;
	public $desLogin;
	public $desSenha;
	public $dtCadastro;


	function __construct($login = "", $pass = ""){
		$this->desLogin = $login;
		$this->desSenha = $pass;

	}//construtor não obrigatório




	function loadById($id){

		$sql = new Sql();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array("ID" => $id ));

		if(count($result)>0){

			$this->setData($result[0]);			

		}

	}//Procura um usuario pelo id




	public static function list(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");
		

	}//Lista todos os usuarios




	public static function searchByLogin($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH",array("SEARCH" => "%".$login."%" ));
	}//lista todos os usuarios pelo login correspondente a pesquisa




	function insert($login, $pass){
		$sql = new Sql();

		$sql->consulta("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASS);",array(':LOGIN' => $login, ':PASS' => $pass));

		echo "dasos inseridos com sucesso!";

	}//Insere um novo usuario no banco



	function update($login, $pass){
		$sql = new Sql();

		$sql->consulta("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID;",array(':LOGIN' => $login, ':PASS' => $pass, ':ID' => $this->idUsuario));

		echo "dasos alterados com sucesso!";

	}//Insere um novo usuario no banco



	function delete(){
		$sql = new Sql();

		$sql->consulta("DELETE FROM tb_usuarios WHERE idusuario = :ID;",array(':ID' => $this->idUsuario));
	
		$this->idUsuario= null;
		$this->desLogin = null;
		$this->desSenhas = null;
		$this->dtCadastro = new DateTime();

		echo "dasos deletados do banco";


	}//Insere um novo usuario no banco




	function setData($data){

		$this->idUsuario= $data["idusuario"];
		$this->desLogin= $data["deslogin"];
		$this->desSenha= $data["dessenha"];
		$this->dtCadastro= new DateTime($data["dtcadastro"]) ;

	}//Preenche os atributos com os resultados da busca




	function __toString(){
		return json_encode(array(
			"idusuario" =>$this->idUsuario,
			"deslogin"=>$this->desLogin,
			"dessenha"=>$this->desSenha,
			"dtcadastro"=>$this->dtCadastro->format("d/m/y")
		));
	}//retorna um json estruturado com os resultados


}
	
	


?>