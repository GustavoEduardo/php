<?php

	function processoLento($callback){

		//executa o processo lento e chama o callback após o termino da execução

		$terminou = true;

		if(true){
			$callback();
		}

	}

	processoLento(function(){
		echo "O processo Lento terminou!";
	});









?>