<?php
//1° maneira
$nomeCompleto = 'gustavo sampaio soier';

$posicao = strpos($nomeCompleto, 'a'); //serve para procurar a posição da palavra que eu procurar, começando do 0

echo $posicao."<br/>";


//2° maneira
$nomeCompleto = 'Gustavo Soier';

$posicao = strpos($nomeCompleto, 'w'); //serve para procurar a posição da palavra que eu procurar, começando do 0

if($posicao > -1) {
    echo "ACHOU!!";
}
else {
    echo "NÃO ACHOU!!"."<br/>";
}

//--------------------------------------------------

echo ucfirst($nomeCompleto); //colocando a primeira letra em maiuscula

echo ucwords($nomeCompleto)."<br/>"; //colocando todas as primeiras letras das palavras em maiuscula

//-------------------------------------------------

$nomes = explode(' ', $nomeCompleto); //serve para pegar os nomes 
print_r($nomes);

//----------------------------------------------
$numero = 12913.12;

echo 'R$ '. number_format($numero, 1, ',', '.');