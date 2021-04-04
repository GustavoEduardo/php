<?php

//conectando com o mysql
$conn = new mysqli("localhost","root","135790","dbphp7");

if ($conn->connect_error){
	echo "Error: ".$conn->$connect_error;
}

//executando select direto no banco

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$dados = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){//parametros para trazer apenas os nomes dos indices. fatch_assoc sem parametros faz a mesma coisa.
	var_dump($row);
	array_push($dados, $row);
}

echo  json_encode($dados);//jason com o array trazido do banco


?>