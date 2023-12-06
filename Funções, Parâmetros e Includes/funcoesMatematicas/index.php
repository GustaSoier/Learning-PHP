<?php
$numero = 12.598173;

echo floor($numero)."<br/>";  // arredondar para baixo

echo ceil($numero)."<br/>";  // arredondar para cima

echo round($numero)."<br/>";  // arredondar para o número mais próximo
//--------------------------------------------------------
$aleatorio = rand(3, 9);

echo $aleatorio."<br/>"; // gerar numero aleatorio entre os numero que eu coloquei
//--------------------------------------------------------
$lista = [1, 4, 9, 8];

echo max($lista)."<br/>";
echo min($lista);