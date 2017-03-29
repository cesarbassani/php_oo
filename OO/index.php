<?php

require_once("Carro.php");
require_once("Motocicleta.php");

$ferrari = new Carro("Ferrari", "Vermelho");
$ferrari->motor = 300;
$ferrari->portas = 2;

//echo "Marca: " . $ferrari->marca . "<br/>";
//echo "Cor: " . $ferrari->cor . "<br/>";
//echo "Portas: " . $ferrari->portas . "<br/>";

//echo $ferrari->getMotor("hp") . "<br/>";

$moto = new Motocicleta("Honda", "Azul");
$moto->motor = 150;


echo $moto->getMarca();

