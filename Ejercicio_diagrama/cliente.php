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

    /**
     * Get the value of nombre
     */ 
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

    /**
     * Get the value of nif
     */ 
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set the value of nif
     *
     * @return  self
     */ 
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }
}