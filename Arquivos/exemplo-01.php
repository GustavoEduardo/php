<?php

$path = "img";

if(!is_dir($path)){
	mkdir("img");//cria
}
//rmdir("img")//remove

$dir = scandir($path);

$data = array();

var_dump($dir);
echo "<br><br>";

foreach ($dir as $img) {
	if(!in_array($img, array(".",".."))){

		$filename = "img".DIRECTORY_SEPARATOR.$img;
		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["date"] = date("d/m/Y, filemtime($filename)");
		array_push($data, $info);

	}
	
}


echo json_encode($data);



/*


//url concatena caminho com filename
str_repleace("\\","/", $fn)
*/

?>