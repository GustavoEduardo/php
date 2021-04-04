<?php

require_once "connection.php";

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
//? é o dado do array passado como parametro no execute. Posso passar quantos eu quiser.

$id = 4;

$stmt->execute(array($id));//se der erro cancela a transação
//$conn->commit();//se der certo executa o comando no banco

$conn->rollback();

echo "Usuario de ID: ".$id." excluido no banco.";


?>