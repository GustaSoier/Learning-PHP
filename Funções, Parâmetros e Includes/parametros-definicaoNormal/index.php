<?php
function somar( $n1, $n2 ){
    $total = $n1 + $n2;
    return $total;
}

$soma = somar(10, 5);

echo "TOTAL: ".$soma;