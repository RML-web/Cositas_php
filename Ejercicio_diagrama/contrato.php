<?php

class Contrato
{
    private $fechaInicio;
    private $fechaFin;
    private $precioDia;

    public function __construct($fechaInicio, $fechaFin, $precioDia)
    {

        $this->fechaInicio =  new DateTime($fechaInicio);

        $this->fechaFin = new DateTime($fechaFin);

        $this->precioDia = $precioDia;
    }


    public function nDias()
    {
        return ($this->fechaInicio->diff($this->fechaFin))->days;
    }
    public function precioTotal()
    {
        return $this->precioDia * $this->nDias();
    }
    public function showContract()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Fecha de Inicio: " . $this->fechaInicio->format('d-m-Y') . "</p>";
        $informacion .= "<p>Fecha de Fin: " . $this->fechaFin->format('d-m-Y') . "</p>";
        $informacion .= "<p>Días: " . $this->nDias() . "</p>";
        $informacion .= "<p>Precio " . $this->precioTotal() . "</p>";
        return $informacion;
    }
}