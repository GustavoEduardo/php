<?php

require_once("config.php");
if(empty($_SESSION["id"])){
	header("Location:index.php");
}

include "views/AddUsuario.php";


if(empty($_SESSION["id"])){
    header("Location:logar.php");
}else{

	if((!empty($_POST['nome'])) && (!empty($_POST['login'])) && (!empty($_POST['senha']))){

		$user = new Usuario();

		$user->insert($_POST['nome'],$_POST['login'],$_POST['senha']);

		header("Location:listar.php");
	}

}

?>