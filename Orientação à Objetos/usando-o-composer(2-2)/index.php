<?php
require 'vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Level::Warning));

use \classes\matematica\Basica;

$m = new Basica();
echo $m->somar(10, 10);

$log->warning('Foo');
$log->error('Bar');