<?php

require 'autoload.php';

use \matematica\MatematicaBasica;

$m = new MatematicaBasica();
echo $m -> somar(10, 20);

$upload = new \foto\Upload();