<?php
$ingredientes = [
    'açucar',
    'ovo',
    'leite',
    'essencia de baunilha',
    'farinha de trigo',
    'fermento em pó'
  ];
  
echo '<h2>Ingredientes do bolo</h2>';
  
echo '<ul>';
foreach($ingredientes as $valor) {
    echo '<li>'.$valor.'</li>';
}
echo '</ul>';