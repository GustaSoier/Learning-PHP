<?php
$idade = 14;

// EXIBINDO COM TERNARIO
echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';


// ARMAZENANDO EM UMA VARIAVEL
$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';


// ARMAZENANDO EM UM BOOLEAN
$menorDeIdade = ($idade < 18) ? true : false;
if($menorDeIdade) {
    echo 'MENOR';
}
else{
    echo 'MAIOR';
}



// (Condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;