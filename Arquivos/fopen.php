<?php

$file= fopen("log.txt","a+");//a escreve junto com o conteudo, w sobrepõe, + cria se não existir

fwrite($file, date("Y-m-d H:i:s")."\r\n");//(resource,string)

fclose($file);

echo "Arquivo criado e/ou alterado";

?>