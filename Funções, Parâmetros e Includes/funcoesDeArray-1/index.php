<?php
$lista = ['Gustavo', 'Pedro', 'Paulo', 'Lucas', 'João'];

echo "TOTAL: ".count($lista)."<br/>"; //serve para contar quantos itens tem dentro do array

//-------------------------------

$aprovados = ['Gustavo', 'Pedro', 'Lucas'];

$reprovados = array_diff($lista, $aprovados); //vai verificar quem esta na $lista e nao esta na variavel $aprovados para ver quem sao os reprovados

print_r($reprovados);

//--------------------------------------------

$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function($item){
    if($item < 30){
        return true;
    }
    else{
        return false;
    }
}); //serve para filtrar o numeros abaixo de 30

print_r($filtrados);

//-----------------------------------------------

$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);
print_r($dobrados);

