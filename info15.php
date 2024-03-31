<?php

/*
$lista = ['Fernanda', 'Gabriel', 'Davi', 'Vitoria'];
$aprovados = ['Fernanda', 'Davi', 'Vitoria'];

$reprovados = array_diff($lista, $aprovados);

print_r($reprovados);
*/

/*
$numeros = [24, 56, 37, 18, 61];

$filtrados = array_filter($numeros, function($item){
  if($item < 60){
    return true;
  } else {
    return false;
  }
});

print_r($filtrados);
*/


/*
$numeros = [24, 56, 37, 18, 61];

$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);

print_r($dobrados);
*/


/*$numeros = [24, 56, 37, 18, 61];

array_pop($numeros)."<br/>";
array_shift($numeros);

print_r($numeros);*/

/*$numeros = [24, 56, 37, 18, 61];

/*if(in_array(56, $numeros)) {
  echo 'Este numero existe!';
} else {
  echo 'Este numero não existe!';
}*/

/*$pos = array_search(56, $numeros);

echo $pos;*/

/*sort($numeros);*/
/*rsort($numeros);*/
/*asort($numeros);*/
/*arsort($numeros);
echo "A chave 1 é: ".$numeros[1];
print_r($numeros);*/


$nomes = ['anna', 'caroline', 'fernandes'];

$nome = implode(' ', $nomes);

echo $nome;