<?php

require_once("config.php");

if(empty($_SESSION["id"])){
	header("Location:logar.php");
}

$login = $_POST['search'];

if ($login) {
    $usuarios = new Usuario();

    $usuarios->searchByLoginAjax($login);
}


?>
