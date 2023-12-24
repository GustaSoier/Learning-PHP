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
    <tr>
    <?php foreach($array as $chave => $valor): ?>
    
        <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>

    <tr>
    <?php foreach($array as $chave => $valor): ?>
        <td><?php echo $valor; ?></td>
    <?php endforeach; ?>
    </tr>
</table>