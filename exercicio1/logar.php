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


?>