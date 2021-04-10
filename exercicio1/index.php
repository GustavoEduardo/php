<?php

require_once("config.php");

if(!empty($_SESSION["id"])){
	header("Location:listar.php");
}else{
	header("Location:logar.php");
	
}


?>