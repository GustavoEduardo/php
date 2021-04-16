<?php

$path = "img";//variavel do tipo resource

if(!is_dir($path)){
	mkdir("img");//cria a pasta
}
//rmdir("img")//remove a pasta

$dir = scandir($path);
//var_dump($dir);
echo "<br><br>";


$data = array();

foreach ($dir as $name) {
	if(!in_array($name, array(".",".."))){

		$caminho = $path.DIRECTORY_SEPARATOR.$name;
		$info = pathinfo($caminho);

		$info["size"] = filesize($caminho);
		$info["modified"] = date("d-m-Y H:i:s", filemtime($caminho));
		$info["url"] = "http://localhost/Arquivos/".str_replace("\\", "/", $caminho);//A barrra invertida não sai 
		array_push($data, $info);

	}
	
}
//echo str_replace("world","Peter","Hello world!");
echo json_encode($data);



?>