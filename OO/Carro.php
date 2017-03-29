<?php

require_once("Veiculo.php");

class Carro extends Veiculo {

    public $portas;

    public function getMarca()
    {
        return $this->marca;
    }
}