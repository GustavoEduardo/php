<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);//obj pq não passei true no segundo parametro

	echo $obj->prod1;


}


?>