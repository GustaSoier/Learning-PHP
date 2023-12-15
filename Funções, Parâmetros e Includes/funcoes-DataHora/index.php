<?php

echo time()."<br/>"; //tempo em milisegundos que passou desde 1970

echo date('d/m/Y')."<br/>"; //serve para mostrar a data no formato brasileiro

echo date('d/m/Y H:i:s')."<br/>"; // serve para mostrar a data, horas, minutos e segundos (se estiver errado é por causa do horario que e padrão europeu

echo date('Y-m-d')."<br/>"; //serve para mostrar a data no formato internacional (sempre usar esse padrão)

$data = '2020-03-07';
echo date('d/m/Y', strtotime($data));
//esse codigo serve para transformar um horario padrão europeu para o formato brasileiro