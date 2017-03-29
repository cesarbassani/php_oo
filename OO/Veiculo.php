<?php

require_once("IVeiculo.php");
abstract class Veiculo implements IVeiculo {

    public $marca;
    public $cor;
    public $motor;

    /**
     * Veiculo constructor.
     * @param $marca
     * @param $cor
     */
    public function __construct($marca = "", $cor = "")
    {
        $this->marca = $marca;
        $this->cor = $cor;
    }


    public function getMotor($type = "Cavalos de potência") {
        return "{$this->motor} {$type}";
    }

    abstract public function getMarca();

    public function getCor()
    {
        return $this->cor;
    }


}