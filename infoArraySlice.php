<?php
/*
$array = ['a', 'b', 'c', 'd', 'e'];

$retorno = array_slice($array, 0, 3);

print_r($retorno);
*/

$array = ['a', 'b', 'c', 'd', 'e'];

array_splice($array, 2, 1, 'G');

print_r($array);