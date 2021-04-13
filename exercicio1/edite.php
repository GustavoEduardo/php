<?php

require_once("config.php");

$user = new Usuario();
$user->loadById($_GET["id"]);



if((!empty($_POST["nome"]))&&(!empty($_POST["login"]))&&(!empty($_POST["senha"]))){

	$user->update($_POST["nome"],$_POST["login"],$_POST["senha"],$_POST["id"]);
	header("Location:listar.php");

}

include "views/EditarUsuario.php";


?>