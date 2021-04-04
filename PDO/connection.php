<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "135790");
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa", "135790");
//server=localhost\nomedaestancia;Conn... <-- SQLSERVER dlls no php/ext e em php/phpini Extensions extension=nomedadll


if ($conn){
	echo "Conexão Ok.<br><br>";	
}

?>