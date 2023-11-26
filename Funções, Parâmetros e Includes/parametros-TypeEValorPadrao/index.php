<?php
function somar(int $n1, int $n2=0, int $n3=0 ){
    $total = $n1 + $n2 + $n3;
    return $total;
}

$z = somar (7, 3);

echo $z;