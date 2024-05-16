<?php

class Moto extends Vehiculo
{
    private $cilindrada;


    public function __construct($cilindrada, $matricula, $marca, $modelo)
    {
        parent::__construct($matricula, $marca, $modelo);
        $this->cilindrada = $cilindrada;
     
    }

    /**
     * Get the value of cilindrada
     */ 
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * Set the value of cilindrada
     *
     * @return  self
     */ 
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }
}