<?php

require_once("config.php");

if(empty($_SESSION["id"])){
	header("Location:logar.php");
}

$user = new Usuario();

$usuarios = $user->searchByLogin($_POST["search"]);

if ($usuarios == null) {
	$usuarios = $user->searchByName($_POST["search"]);
}





include "views/usuarios.php";

?>