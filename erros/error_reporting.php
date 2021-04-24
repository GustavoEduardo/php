<?php

error_reporting(~E_ALL|E_NOTICE);

/*
Posso mudar direto no php.ini
; error_reporting
;   Default Value: E_ALL
;   Development Value: E_ALL
;   Production Value: E_ALL & ~E_DEPRECATED & ~E_STRICT*/

function trataNome($a, $b){
	
	return $a + $b;
}


echo trataNome(1,"");

?>