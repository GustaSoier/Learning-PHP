<?php
date_default_timezone_set('America/Sao_Paulo');

$dias_da_semana = [
    'Domingo',
    'Segunda-feira',
    'Terça-feira',
    'Quarta-feira',
    'Quinta-feira',
    'Sexta-feira',
    'Sábado'
];
$data_banco_dados = '2023-10-30';

function diaDaSemana(string $data, array $array): void {
    $dia_Da_Semana = (int) date('w', strtotime($data));
    echo date('d/m/Y - ', strtotime($data)) . $array[$dia_Da_Semana];
};

diaDaSemana($data_banco_dados, $dias_da_semana);