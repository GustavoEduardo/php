<?php

//+ - * /
//** %
//--v v-- ++v v++

$a = 10;
$b = 9;
$c = "5";
$d = $b + $c;
$e = null;

//Novos operadores PHP 7
var_dump($a <=> $b);//1 0 -1
echo "</br>";
echo $e ?? $a ?? $b;//imprime o primeiro valor diferente de nul e ignora os outros

echo "</br>";
var_dump($c);
echo "</br>";
echo "String mais int: ".$d."</br>";
echo $a + $b."</br>";
echo $a++."</br>";
echo ++$a;

?>