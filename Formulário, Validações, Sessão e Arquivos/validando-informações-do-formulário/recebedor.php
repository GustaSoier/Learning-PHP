<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome && $email && $idade) {
    echo 'NOME: '.$nome."<br/>";
    echo 'EMAIL: '.$email."<br/>";
    echo 'IDADE: '.$idade;
}
else {
    header("Location: index.php");
    exit;
}