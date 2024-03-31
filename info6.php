<?php
$nome = 'Fernanda';
$sobrenome = 'Fernades';







$nomeCompleto = $nome ?? 'Fantasma';
/*
$nomeCompleto .= isset($sobrenome) ? $sobrenome :
  '';
*/
$nomeCompleto .= $sobrenome ?? '';
echo $nomeCompleto;