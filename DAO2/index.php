<?php

require_once("config.php");


$sql = new Sql();




$usuarios = $sql->fetchAll("SELECT * FROM usuario");


include "front/usuarios.php";
