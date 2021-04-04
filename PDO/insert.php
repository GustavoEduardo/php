<?php

require_once "connection.php";

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");
//No values passo apelidos para maior segurança

$login ="Jose";
$password ="54321";

//atribuindo variaveis aos apelidos
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);


$stmt->execute();

echo "Dados inseridos no banco";


?>