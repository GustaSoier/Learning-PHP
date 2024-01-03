<?php
require 'Calculadora.php';

$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "A soma dos números é".$calc->total();

$calc->clear();