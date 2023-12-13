<?php
$numeros = [10, 20, 24, 91, 18];

array_pop($numeros); //serve para remover o ultimo item do array

array_shift($numeros); //serve para retirar o primeiro item do array

print_r($numeros);
//---------------------------------------------

if(in_array(91, $numeros)) {
    echo 'EXISTE';
}
else{
    echo 'NÃO EXISTE';
} //esse bloco de código serve para passar em cada item do array e procurar se existe o número 91 dentro array

//-----------------------------------------------

$pos = array_search(17, $numeros);
echo $pos; //serve para procurar pelo posição dentro do array

//-----------------------------------------------

sort($numeros); //ordena os numeros em ordem crescente

rsort($numeros); //ordena os numeros em ordem decrescente

print_r($numeros);


//-------------------------------------------------

$nomes = ['gustavo', 'sampaio', 'soier'];

$nome = implode(' ', $nomes); //serve para juntar os itens do array

echo $nome;