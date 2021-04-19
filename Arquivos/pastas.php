<?php

$path = "img";//variavel do tipo resource

if(!is_dir($path)){
	mkdir("img");//cria a pasta
}
//rmdir("img")//remove a pasta

$dir = scandir($path);//joga o conteudo da pasta em $dir
//var_dump($dir);
echo "<br><br>";


$data = array();//informações do conteudo pa pasta serão armazenadas aqui

foreach ($dir as $arquivo) {
	if(!in_array($arquivo, array(".",".."))){

		$caminho = $path.DIRECTORY_SEPARATOR.$arquivo;
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