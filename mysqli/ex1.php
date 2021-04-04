<?php

//conectando com o mysql
$conn = new mysqli("localhost","root","135790","dbphp7");

if ($conn->connect_error){
	echo "Error: ".$conn->$connect_error;
}

//inserindo no banco
$stmt  = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss",$login,$pass);//("tipotipo",variavel,variavel)

$login ="loren";
$pass = "321";

$stmt->execute();

$login ="maria";
$pass = "333";

$stmt->execute();

$login ="joão";
$pass = "111";

$stmt->execute();

?>