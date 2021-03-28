<?php

class Pessoa{
        public $nome;
        public $sobrenome;

}


$pessoa = new Pessoa();
$pessoa->nome = 'Gustavo';
$pessoa->sobrenome = 'Ferraz';

echo '<pre>';
print_r($pessoa);


?>