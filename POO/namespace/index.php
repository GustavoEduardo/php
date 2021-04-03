<?php

require_once "Google/Login.php";
require_once "Facebook/Login.php";
require_once "Login.php";

use \Google\Login as LoginGoogle;
use \Facebook\Login as LoginFace;



class Sistema{
	function realizaLoginGoogle($usuario,$senha){ 
	    $login = new LoginGoogle(); // popula o login e realiza as verificações
	    LoginGoogle::realizaLogin($usuario,$senha);
	}

	function realizaLoginFace($usuario,$senha){ 
	    $login = new LoginFace(); 
	    LoginFace::realizaLogin($usuario,$senha);// realiza a lógica de validação da api do Face
	}
	function realizaLoginLocal($usuario,$senha){ 
	    $login = new Login();
	    Login::realizaLogin($usuario,$senha);// realiza a lógica de validação do siste
	}
}


$sistema = new Sistema();

$sistema->realizaLoginGoogle("gustavo@gmail.com","123");
$sistema->realizaLoginFace("@gustavo","123");
$sistema->realizaLoginLocal("Gustavo","123");

?>