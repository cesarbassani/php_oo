<?php

require_once("Veiculo.php");
class Motocicleta extends Veiculo {

    /**
     * Motocicleta constructor.
     */
    public function __construct($marca = "", $cor = "") {

        parent::__construct($marca, strtoupper($cor));
    }

    public function getMarca()
    {
        return $this->marca;
    }
}