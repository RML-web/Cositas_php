<?php

class Camion extends Vehiculo
{
    private $kilos;


    public function __construct($kilos, $matricula, $marca, $modelo)
    {
        parent::__construct($matricula, $marca, $modelo);
        $this->kilos = $kilos;
    }
}