<?php
function diaDaSemana(string $data){
  $dia = date('w', strtotime($data));
  switch($dia) {
    case 0:
      echo 'Domingo';
      break;
    case 1:
      echo 'Segunda-feira';
      break;
    case 2:
      echo 'Terça-feira';
      break;
    case 3:
      echo 'Quarta-feira';
      break;
    case 4:
      echo 'Quinta-feira';
      break;
    case 5:
      echo 'Sexta-feira';
      break;
    case 6:
      echo 'Sabado';
      break;
  }
}

$selectedData = '13/07/2023';

echo $selectedData.'-';

echo diaDaSemana($selectedData);

?>