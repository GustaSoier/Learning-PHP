<?php

//$array = range(1, 20, 2); //colocando número de 1 até o 20 pulando de 2 em 2

$array = range('a', 'g');

foreach($array as $item) {
    echo $item."<br/>";
}