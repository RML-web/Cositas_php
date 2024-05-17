<?php

class Moto{

    private $cc;

    public function __construct($cc)
    {

        $this->cc =  $cc;
    }


    public function moto()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Cc: " . $this->cc ."</p>";
        return $informacion;
    }

    /**
     * Get the value of puertas
     */ 
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set the value of puertas
     *
     * @return  self
     */ 
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    
}
    

    



