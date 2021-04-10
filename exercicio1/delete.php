<?php
require_once("config.php");

$user = new Usuario();
$user->loadById($_GET["id"]);
$user->delete();
header("Location:listar.php");

?>