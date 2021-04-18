<?php

$data = array('prod1' => "iphone");//carrinho de usuario não autenticado por exemplo

setcookie("NOME_DO_COOKIE",json_encode($data),time() + 3600);//nome, string com conteudo, tempo para expirar

echo "Cookie criado";

?>