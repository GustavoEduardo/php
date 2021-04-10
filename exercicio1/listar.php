<?php

require_once("config.php");

$user = new Usuario();

$usuarios= $user->list();


include "views/usuarios.php";



?>


