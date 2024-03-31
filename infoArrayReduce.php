<?php
/*
$numeros = [2, 4, 6, 8];

function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');

echo $total;
*/

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => '7'],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => '8'],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => '5'],
    ['nome' => 'Luana', 'sexo' => 'F', 'nota' => '9'],
    ['nome' => 'Bruno', 'sexo' => 'M', 'nota' => '2'],
    ['nome' => 'Sirlei', 'sexo' => 'F', 'nota' => '10'],
];

function contar_f($subtotal, $item) {
    if($item ['sexo'] === 'F') {
        $subtotal++;
    }
    return $subtotal;
}
$total_f = array_reduce($pessoas, 'contar_f');

//Soma das notas das mulheres
function soma_f($subtotal, $item) {
    if($item ['sexo'] === 'F' ) {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}
$soma_f = array_reduce($pessoas, 'soma_f');

//Media das mulheres
$media_f = $soma_f / $total_f;

echo "Total de nulheres: ".$total_f."<br/>";
echo "Soma das notas de mulheres ".$soma_f."<br/>";
echo "Media das mulheres: ".$media_f."<br/>";