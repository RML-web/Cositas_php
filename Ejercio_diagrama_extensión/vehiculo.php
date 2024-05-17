<?php

abstract class Vehiculo
{
    private $matricula;
    private $marca;
    private $modelo;

    public function __construct($matricula, $marca, $modelo)
    {

        $this->puertas =  $matricula;

        $this->marca = $marca;

        $this->modelo = $modelo;
    }


    public function vehiculo()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Matricula: " . $this->matricula ."</p>";
        $informacion .= "<p>Marca: " . $this->marca . "</p>";
        $informacion .= "<p>Modelo: " . $this->modelo . "</p>";
        return $informacion;
    }

    /**
     * Get the value of puertas
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of puertas
     *
     * @return  self
     */ 
    public function setPuertas($matricula)
    {
        $this->matricula = $matricula;

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



