<?php

session_start();//não quero recriar as variaveis por isso não usei o require


if(isset($_SESSION["NOME"])){
	echo "Bem vindo ".$_SESSION["Usuario"]."<br>";
}else{
	echo "Nenhum usuraio logado.<br></br>";
}


session_regenerate_id();
echo "Id da sessão: ".session_id();

?>