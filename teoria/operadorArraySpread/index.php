<?php
$bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

$bolo2 = [
    'vasilha',
    'agua morna',
    ...$bolo1,
    'corante'
];

echo $bolo2[1]."<br/>";

$lista1 = ['Gustavo', 'Pedro', 'João'];
$lista2 = ['Patricia', 'Ana', 'Melissa'];
$lista3 = [...$lista1, ...$lista2];

print_r($lista3);