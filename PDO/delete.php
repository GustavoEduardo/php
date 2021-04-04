<?php

require_once "connection.php";

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Usuario de ID: ".$id." excluido no banco.";


?>