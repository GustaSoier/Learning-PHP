<?php
$nome = '   Gustavo   ';
echo trim($nome)."<br/>"; //trim serve para tirar os espaços colocados antes e depois da palavra

echo strtolower($nome)."<br/>"; //colocando todos os caracteres em minusculo

echo strtoupper($nome)."<br/>"; //colocando todos os caracteres em maiuscula



$NomeSujo = '   Gustavo   '; //nome com os espaços colocados pelo usuarios
$nomeLimpo = trim($NomeSujo);

echo "NOME SUJO: ".strlen($NomeSujo)."<br/>"; //exibindo o nome com os espaços colocados pelo usuario

//exibindo o nome sem os espaços colocados pelo usuario
echo "NOME LIMPO: ".strlen($nomeLimpo)."<br/>";



$nomeSobrenome = 'Gustavo Soier';
$nomeAlterado = str_replace('Soier', 'Sampaio', $nomeSobrenome);

echo $nomeAlterado;
