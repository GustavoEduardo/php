<?php

require_once "connection.php";

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
//Para maior segurança passo apelidos e não as variaveis

$login ="usuario4";
$password ="4444";
$id = "4";

//atribuindo variaveis aos apelidos
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados do usuario de ID: ".$id." alterados no banco.";


?>