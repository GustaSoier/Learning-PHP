<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1, 'K'); //serve para remover itens do array, 1°parâmetro serve para colocar o array, 2°parâmetro serve para colocar a posição que irá ser retirada do array, 3°parâmetro serve para selecionar quantos itens irão ser cortados do array, 4°parâmetro serve para escolher oque irá no lugar do array que foi excluído.

print_r($array);