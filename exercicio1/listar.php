<?php

require_once("config.php");

if(empty($_SESSION["id"])){
	header("Location:logar.php");
}

$user = new Usuario();

$usuarios= $user->list();


include "views/usuarios.php";



?>


