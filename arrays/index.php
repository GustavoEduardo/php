<?php

$funcionarios = array();//array

array_push($funcionarios, ["Nome","Gustavo","idade",27]);//vetor
array_push($funcionarios, ["Nome","Paulo","idade",53]);

print_r( $funcionarios);//exibe um array
echo "</br></br>";
print_r( $funcionarios[1]);
echo "</br></br>";
print_r( $funcionarios[0][1]);
echo "</br></br>";

echo json_encode($funcionarios);//transforma um array em um json
echo "</br></br>";
$json_string = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$json_array = json_decode($json_string, true);//tranforma um json em um array, true para adicionar valores e não objeto

print_r($json_array);

echo "</br></br></br>------------------------Constantes---------------------------------</br></br></br>";
define("CONSTANT", "Olá Constantes.");
echo CONSTANT."</br>";

define("BANCO_DE_DADOS", ['127.0.0.1','root','password132','bdname']);

echo "Usuario: ".BANCO_DE_DADOS[1]."</br>";
print_r(BANCO_DE_DADOS[1])



?>



