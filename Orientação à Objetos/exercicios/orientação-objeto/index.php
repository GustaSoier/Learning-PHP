<?php
class Calculadora
{
    private float $value;

    public function __construct()
    {
        $this->clear();
    }

    public function add(float $value): void
    {
        $this->value += $value;
    }

    public function sub(float $value): void
    {
        $this->value -= $value;
    }

    public function multiply(float $value): void
    {
        $this->value *= $value;
    }

    public function divide(float $value): void
    {
        $this->value /= $value;
    }

    public function total(): float
    {
        return $this->value;
    }

    public function clear(): void
    {
        $this->value = 0;
    }
}