<?php

$cep = "03137020";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

//configurando opções nas constantes da blibioteca
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Quero um retorno
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//não precisa validar o certificado https com cainfo

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);//true para virar array e não ficar como objeto

print_r($data);
print_r($data["localidade"]);

?>