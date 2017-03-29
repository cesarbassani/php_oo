<?php

class Pessoa {

    public function getHello($name) {
        return "Hello {$name}!";
    }
}

$p = new Pessoa();

echo $p->getHello("Cesar");