<?php
/*$dizimo = function(int $valor) {
  return $valor * 0.1;
};

$funcao = $dizimo;

echo $funcao (76);
*/


$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(453);
