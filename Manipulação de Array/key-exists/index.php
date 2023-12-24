<?php

$array = [
    'nome' => 'Gustavo',
    'age' => 90,
    'empresa' => 'Senac',
    'cor' => 'Vermelho',
    'profissao' => 'Desenvolvedor Web'
];

if (key_exists('idade', $array)) { 
    $idade = $array['idade'];
    echo $idade." anos";
}
else{
    echo "Não tem idade.";
}