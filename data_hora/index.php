<?php
  echo 'date()<br>';
  echo date("l, d/m/Y H:i:s");//ecebe apenas um parâmetro: o formato de data.


  echo '<br><br><br>time()<br>';
  //time() Retorna a hora atual medida no número de segundos desde a Era Unix (January 1 1970 00:00:00 GMT).
  $nextWeek = time() + (7 * 24 * 60 * 60);//SEGUBDOS DE UNIX ATÉ AGR + segundo de uma semana (+1 semana)
  echo 'Now: '. date('d-m-Y') ."<br>";
  echo 'Next Week: '. date('d-m-Y', $nextWeek) ."<br>";
  echo 'Next Week: '. date('d-m-Y', strtotime('+1 week'));


  echo '<br><br><br>strtotime()<br>';
  /*A função strtotime() recebe como parâmetro uma string de formato de data em inglês e tenta analisar esse formato. É como tentar transformar uma frase que possui possíveis informações de data em uma data real, como mostra o código a seguir:*/
  echo 'Next Month: '. date('d-m-Y', strtotime('+1 year')) ."<br>";//Data atual + 1
  echo strtotime('+1 month')."<br>";//timestamp de +1 mês
  echo strtotime('+1 year');//timestamp de +1 mês



  
  echo '<br><br><br>DateTime()<br>';
  /* DateTime permite trabalhar com data e hora como se fossem objetos que podem ser facilmente manipulados através de diversos métodos, facilitando a criação de regras de negócio com base em datas, além da conversão e a manipulação de diferentes formatos. A criação de um objeto da classe DateTime é a maneira mais fácil de manipular datas na sua aplicação.*/
  $atual = new DateTime();
  $especifica = new DateTime('1990-01-22');
  $texto = new DateTime(' +1 month');

  print_r($atual);
  echo "<br>";
  print_r($especifica);
  echo "<br>";
  print_r($texto);


  echo '<br><br><br>DateTime() -> format()<br>';
  $data = new DateTime();//Data atual
  echo $data->format('d-m-Y H:i:s')."<br>";
  $dataM = new DateTime('+1 month');//Data atual +1 mes
  echo $dataM->format('d-m-Y H:i:s')."<br>";



  echo '<br><br><br>setlocale()<br>';
  setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
  date_default_timezone_set('America/Sao_Paulo');

  $date = '2021-04-08';
  echo strftime("%A, %d de %B de %Y", strtotime("now"));//poderia passar a variavel $date

  

?>