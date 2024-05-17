<?php

class Camion
{
    private $kg;

    public function __construct($kg)
    {
        $this->kg =  $kg;
        

    }


    public function camion()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>kg: " . $this->kg ."</p>";
        return $informacion;
    }

    /**
     * Get the value of puertas
     */ 
    public function getkg()
    {
        return $this->kg;
    }

    /**
     * Set the value of puertas
     *
     * @return  self
     */ 
    public function setkg($kg)
    {
        $this->kg = $kg;

        return $this;
    }

    /**    */ 

}



