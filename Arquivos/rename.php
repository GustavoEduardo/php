<?php
$dir1 = "pasta1";
$dir2 = "pasta2";
$filename = "mover.txt";

if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){

	$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");

	fwrite($file, "arquivo para a aula do rename.php");
}

rename($dir1.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$filename);
//Renomeia o caminho. Move para outra pasta.
?>