<?php

$filename = "java.jpg";

$base64 = base64_encode(file_get_contents($filename));
//file_get... le o arquivo retorna um conteudo binario e converto para base64 com o base64_encode

$finfo = new finfo(FILEINFO_MIME_TYPE);//peço o tipo do arquivo passando a constante para a classe

$mimetype = $finfo->file($filename);//método file retorna o tipo do arquivo

$b64encode = "data:".$mimetype.";base64,".$base64;
//echo "data:".$mimetype.";base64,".$base64;
echo $b64encode;
?>

<a href="<?=$b64encode?>" target="_blank">Link para a imagem <?=$filename?></a></br>

<img src="<?=$b64encode?>"><!--renderizando a imagem em base64-->