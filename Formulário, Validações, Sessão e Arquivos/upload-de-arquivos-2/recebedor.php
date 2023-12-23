<?php
echo '<pre>';
print_r($_FILES);

$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $permitidos)) {
    $nome = md5(time().rand(0, 1000)).'.jpg'; //serve para receber imagens do usuário sem que as imagens sejam iguais
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

echo 'Arquivo enviado com sucesso!';
}
else {
    echo 'Arquivo não permitido!';
}

