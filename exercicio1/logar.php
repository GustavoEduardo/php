<?php

require_once("config.php");

if((isset($_POST['login'])) && (!empty($_POST['login']))){

	$user = new Usuario();
	if($user->authUser($_POST['login'],$_POST['senha'])){
		header("Location:listar.php");
	}else{
		echo "Login e senha incorretos";
	}

}else {
	include "views/login.php";
}


/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/



//busca um usuario pelo id
//$user = new Usuario();
//$user->loadById(6);
//echo $user;


//lista todos os usuarios
//$lista = Usuario::list();
//echo json_encode($lista);


//Pesquisa pelo login
//$lista = Usuario::searchByLogin("us");
//echo json_encode($lista);


//insere um novo usuario
//$user = new Usuario();
//$user->insert("Algusto","333");


//Altera um usuario pelo id
//$user = new Usuario();
//$user->loadById(6);
//$user->update("Ricardo","9999");


//Deleta um usuario pelo id
//$user = new Usuario();
//$user->loadById(21);
//$user->delete();
//echo "<br>".$user;










?>