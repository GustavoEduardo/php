<?php
//include('conexao.php');

require_once('config.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$user = new Usuario();

$user->insert($nome, $login, $senha);

?>