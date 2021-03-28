<?php

$nome = "Gustavo";
$sobreNome = "Lima";

$nomeCompleto = $nome." ".$sobreNome;

echo $nomeCompleto."</br>";
echo 'O nome completo é $nome $sobreNome </br>';
var_dump($nomeCompleto);

//unset($nomeCompleto);

if (isset($nomeCompleto)) {
	echo "</br>".$nomeCompleto;
};




?>