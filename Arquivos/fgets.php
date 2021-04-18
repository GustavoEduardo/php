<?php
$filename = "usuarios.csv";

if(file_exists($filename)){

	 $file = fopen($filename, "r");//apenas leitura

	 $header = explode(",", fgets($file));//fgets traz a primeira linha, explode separa pelo delimitador

	 $data = array();//array que terá todo o conteudo do arquivo.

	 while ($row = fgets($file)) {//fgets executa e vai pra próxima linha. Se não existir retorna false
	 	
	 	$rowData = explode(",", $row);
	 	$linha = array();

	 	for ($i=0; $i < count($header); $i++) { 

	 		$linha[$header[$i]] = $rowData[$i];

	 	}

	 	array_push($data,$linha);

	 }

	 fclose($file);


	 echo json_encode($data);


}

?>