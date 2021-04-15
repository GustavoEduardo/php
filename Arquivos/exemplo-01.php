<?php

$path = "img";

if(!is_dir($path)){
	mkdir("img");//cria
}
//rmdir("img")//remove

$dir = scandir($path);
//var_dump($dir);
echo "<br><br>";


$data = array();

foreach ($dir as $img) {
	if(!in_array($img, array(".",".."))){

		$filename = "img".DIRECTORY_SEPARATOR.$img;
		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/Arquivos/".str_replace("\\", "/", $filename);
		array_push($data, $info);
	}
	
}
//echo str_replace("world","Peter","Hello world!");
echo json_encode($data);



?>