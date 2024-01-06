<?php

interface Forma {
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma {
    private $largura;
    private $altura;

    public function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;
    }
    public function getTipo() {
        return 'quadrado';
    }

    public function getArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($r){
        $this->raio = $r;
    }

    public function getTipo() {
        return 'circulo';
    }

    public function getArea() {
        return pi() * ( $this->raio * $this->raio );
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
        $quadrado,
        $circulo
];

foreach($objetos as $objeto) {
    $tipo = $objeto -> getTipo();
    $area = $objeto -> getArea();
}

echo "AREA ".$tipo." : ".$area."<br/>";