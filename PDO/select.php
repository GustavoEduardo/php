<?php

require_once "connection.php";

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);//"fatia" todo o array


foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<b>".$key."</b>: ". $value."<br>";
	}

	echo "----------------------------------------------<br>";
}

//var_dump($results);


?>

