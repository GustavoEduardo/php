<?php
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");//traz um array dentro de outro



$header = array();

foreach ($usuarios[0] as $key => $value) {//cabeçalho só na posição 0 pra não repetir
	array_push($header, ucfirst($key));
	
}

$file = fopen("usuarios.csv", "w+");//modo de escrita cria se não existe

fwrite($file, implode(",", $header)."\r\n");//separo o array por virgula e pulo uma linha


//dados
foreach ($usuarios as $row) {//array das linhas
	$data = array();

	foreach ($row as $key => $value) {//array dos campos
		array_push($data, $value);
	}//end foreach de coluna

	fwrite($file, implode(",", $data)."\r\n");
}//end foreach de linha



fclose($file);

?>