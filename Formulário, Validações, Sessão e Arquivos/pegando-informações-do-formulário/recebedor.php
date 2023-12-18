<?php
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');

if($nome && $idade) {
    echo 'NOME: '.$nome."<br/>";
    echo 'IDADE: '.$idade;
}
else {
    header("Location: index.php");
    exit;
}