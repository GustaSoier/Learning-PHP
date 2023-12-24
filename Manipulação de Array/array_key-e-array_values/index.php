<?php

$array = [
    'nome' => 'Gustavo',
    'age' => 17,
    'empresa' => 'Senac',
    'cor' => 'Vermelho',
    'profissao' => 'Desenvolvedor Web'
];

$chaves = array_keys($array); //serve para criar um novo array só com as chaves, sem os valores

$valores = array_values($array); //serve para criar um novo array só com os valores, sem as chaves

print_r($chaves); 

print_r($valores);