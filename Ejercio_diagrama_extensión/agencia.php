<?php

class Agencia
{
    private $nombre;

    public function __construct($nombre)
    {

        $this->nombre =  $nombre;

    }


    public function agencia()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Nombre: " . $this->nombre ."</p>";

        return $informacion;
    }

    /**
     * Get the value of puertas
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of puertas
     *
     * @return  self
     */
    public function setNombre($nombres)
    {
        $this->nombre = $nombre;

        return $this;
    }

}



