<?php

class Coche
{
    private $puertas;
    private $marca;
    private $modelo;

    public function __construct($puertas, $marca, $modelo)
    {

        $this->puertas =  $puertas;

        $this->marca = $marca;

        $this->modelo = $modelo;
    }


    public function coche()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Puertas: " . $this->puertas ."</p>";
        $informacion .= "<p>Marca: " . $this->marca . "</p>";
        $informacion .= "<p>Modelo: " . $this->modelo . "</p>";
        return $informacion;
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
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
}



