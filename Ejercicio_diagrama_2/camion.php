<?php
class Coche
{
    private $puertas;
    private $plazas;
    

    public function __construct($puertas, $marca, $modelo)
    {

        $this->puertas =  $puertas;

        $this->plazas = $plazas;

    }



/**
     * Get the value of puertas
     */ 
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * Set the value of puertas
     *
     * @return  self
     */ 
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getPlazas()
    {
        return $this->plazas;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;

        return $this;
    }
    
}



