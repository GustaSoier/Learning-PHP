<?php
$dizimo = function($valor) {
    return $valor * 0.1;
};

echo $dizimo(90)."<br/>";

// outra maneira

$funcao = $dizimo;

echo $funcao(85);
