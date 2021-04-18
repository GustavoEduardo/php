<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);//recebe um filename ou um link. Retorna oconteudodo arquivo

//var_dump($content);

$parse = parse_url($link);//divide a string da url em scheme, host e path

//var_dump($parse);
$basename = basename($parse["path"]);//basename retorna apenas o nome do arquivo

$file = fopen($basename, "w+");//cria o arquivo. Nome = base name, mas poderia ser qualquer string

fwrite($file, $content);//escrevo no arquivo que eu criei o conteudo do arquivo que eu copiei

fclose($file);


?>

<img src="<?=$basename?>"><!-- = substitui echo -->