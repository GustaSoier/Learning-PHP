<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',
    'corante'
];

echo "<h2>Ingredientes</h2>";

foreach($ingredientes as $chave => $valor) {
    echo "ITEM ".( $chave + 1 ).": ".$valor."<br/>";
}

echo '<ul>';
foreach($ingredientes as $valor) {
    echo '<li>'.$valor.'</li>';
}

echo '</ul>';