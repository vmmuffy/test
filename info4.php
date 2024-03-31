<?php
$listaDeNome1 = ['Matheus', 'Thiago', 'Pedro'];
$listaDeNome2 = ['Carol', 'Julia', 'Fernanda'];
$listaDeNome3 = [...$listaDeNome1, 'Joceli', ...$listaDeNome2];

print_r($listaDeNome3);

?>