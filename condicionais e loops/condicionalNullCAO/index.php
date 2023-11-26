<?php
$nome = 'Gustavo';
$sobrenome = 'Soier';










$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;