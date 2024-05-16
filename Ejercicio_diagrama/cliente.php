<?php

class Cliente
{
    private $nif;
    private $nombre;
    

    public function __construct($nif, $nombre)
    {

        $this->nif =  $nif;

        $this->nombre = $nombre;

    }


    public function Cliente()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Nif: " . $this->nif ."</p>";
        $informacion .= "<p>Nombre: " . $this->nombre . "</p>";
        return $informacion;
    }


    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNif($nombre)
    {
        $this->nif = $nif;

        return $this;
    }
    
    

    
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


}





