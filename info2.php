<?php
$bolo1= [
    'leite', 
    'ovo', 
    'oleo', 
    'açucar', 
    'nescau', 
    'farinha de trigo', 
    'fermento em pó'
  ];

$bolo2 = [
    'vasilha',
    'batedeira',
    ...$bolo1,
    'corante alimentício'
  ];
  
 echo $bolo2[0];