<?php

require 'matematica.php';

echo "RESULTADO: ";
$m = new MatematicaBasica();
echo $m->somar(10, 20);
echo "VERSAO: ".MatematicaBasica::VERSION;