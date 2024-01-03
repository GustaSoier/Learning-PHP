<?php

Class Matematica {

    public static string $nome = 'Gustavo';

    public function somar($x, $y) {
        return $x + $y;
    }
}

echo Matematica::$nome;