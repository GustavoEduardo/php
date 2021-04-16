<?php

$path = "pasta1";

if(!is_dir($path)) mkdir($path);

$itens = scandir($path);


foreach ($itens as $iten) {
	if(!in_array($iten, array(".",".."))){

		unlink($path.DIRECTORY_SEPARATOR.$iten);
		echo "Arquivo ".$iten." excluido"."<br>";
	}
	
}



?>