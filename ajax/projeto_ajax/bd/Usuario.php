<?php

require_once("config.php");


class Usuario{

	public $desNome;
	public $idUsuario;
	public $desLogin;
	public $desSenha;
	public $dtCadastro;


	function __construct($nome = "", $login = "", $pass = ""){
		$this->desNome = $nome;
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



	function authUser($login, $senha){
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA",
			array(':LOGIN' => $login ,':SENHA' => $senha ));

		if (count($result)>0) {
			$_SESSION["id"] = $result[0]["idusuario"];
			return true;
		}else{
			return false;
		}

	}//altentica




	public static function list(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY desnome");
		

	}//Lista todos os usuarios




	public static function searchByLogin($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH",array("SEARCH" => "%".$login."%" ));
	}//lista todos os usuarios pelo login correspondente a pesquisa


	public static function searchByLoginAjax($login){

		$sql = new Sql();

		$users = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH",array("SEARCH" => "%".$login."%" ));

		foreach ($users as $user) {
			echo "<tr>
		  		<td>".$user["idusuario"]."</th>
			    <td>".$user["desnome"]."</td>
			    <td>".$user["deslogin"]."</td>
			    <td>".$user["dessenha"]."</td>
				</tr>";
		}

			
		
	}//lista todos os usuarios pelo login correspondente a pesquisa Ajax



	public static function searchByName($nome){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE desnome LIKE :SEARCH",array("SEARCH" => "%".$nome."%" ));
	}//lista todos os usuarios pelo Nome



	function insert($nome, $login, $pass){
		$sql = new Sql();

		$sql->consulta("INSERT INTO tb_usuarios(desnome, deslogin, dessenha) VALUES(:NOME, :LOGIN, :PASS);",array(':NOME' => $nome,':LOGIN' => $login, ':PASS' => $pass));

		echo "dasos inseridos com sucesso!";

	}//Insere um novo usuario no banco



	function update($nome, $login, $pass, $id){
		$sql = new Sql();

		$sql->consulta("UPDATE tb_usuarios SET desnome= :NOME, deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID;",array(':NOME' => $nome, ':LOGIN' => $login, ':PASS' => $pass, ':ID' => $id));

	}//Altera usuario pelo id



	function delete(){
		$sql = new Sql();

		$sql->consulta("DELETE FROM tb_usuarios WHERE idusuario = :ID;",array(':ID' => $this->idUsuario));
		
		$this->desNome=null;
		$this->idUsuario= null;
		$this->desLogin = null;
		$this->desSenhas = null;
		$this->dtCadastro = new DateTime();

		echo "dasos deletados do banco";


	}//Deleta um usuario prlo id




	function setData($data){

		$this->desNome= $data["desnome"];
		$this->idUsuario= $data["idusuario"];
		$this->desLogin= $data["deslogin"];
		$this->desSenha= $data["dessenha"];
		$this->dtCadastro= new DateTime($data["dtcadastro"]) ;

	}//Preenche os atributos com os resultados da busca




	function __toString(){
		return json_encode(array(
			"desnome" =>$this->desNome,
			"idusuario" =>$this->idUsuario,
			"deslogin"=>$this->desLogin,
			"dessenha"=>$this->desSenha,
			"dtcadastro"=>$this->dtCadastro->format("d/m/y")
		));
	}//retorna um json estruturado com os resultados


}
	
	


?>