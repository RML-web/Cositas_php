<?php

class VehiculosRent
{
    private $nif;
    private $nombre;

    private array $flotas;
    private array $agencias;

    private array $clientes;

    public function __construct($nif, $nombre)
    {

        $this->nif =  $nif;

        $this->nombre = $nombre;
        $this->flotas = array();
        $this->agencias = array();
        $this->clientes = array();

    }


    public function vehiculosRent()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Nif: " . $this->nif ."</p>";
        $informacion .= "<p>Nombre: " . $this->nombre . "</p>";
        return $informacion;
    }


    public function getNif()
    {
        return $this->Nif;
    }

    /**
     * Set the value of puertas
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFlotas(): array
    {
        return $this->flotas;
    }

    public function setFlotas(array $flotas): void
    {
        $this->flotas = $flotas;
    }

    public function getAgencias(): array
    {
        return $this->agencias;
    }

    public function setAgencias(array $agencias): void
    {
        $this->agencias = $agencias;
    }

    public function getClientes(): array
    {
        return $this->clientes;
    }

    public function setClientes(array $clientes): void
    {
        $this->clientes = $clientes;
    }

public function addFlota($flota)
{
    foreach($this->flotas as $f){
        if($f ->getNombre()== $flota->getNombre()){
            return false;
        }
    }$this->flotas[] = $flota;
    return true;
}
    public function addAgencia($agencia)
    {
        foreach($this->agencias as $a){
            if($a ->getNif()== $agencia->getNif()){
                return false;
            }
        }$this->agencias[] = $agencia;
        return true;
    }
    public function addClientes($clientes)
    {
        foreach($this->clientes as $c){
            if($c->getNif()== $clientes->getNif()){
                return false;
            }
        }$this->clientes[] = $clientes;
        return true;
    }
}




