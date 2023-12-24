<?php

$array = [
    'nome' => 'Gustavo',
    'age' => 17,
    'empresa' => 'Senac',
    'cor' => 'Vermelho',
    'profissao' => 'Desenvolvedor Web'
];
?>

<table border="1">

    <?php foreach($array as $chave => $valor): ?>
    <tr>
        <th><?php echo $chave; ?></th>
        <td><?php echo $valor; ?></td>
    </tr>
    <?php endforeach; ?>
</table>