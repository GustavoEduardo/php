<?php

require_once('config.php');

$login = $_POST['login'];

$usuarios = new Usuario();

$usuarios->searchByLoginAjax($login);



?>