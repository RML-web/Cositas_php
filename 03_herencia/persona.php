<?php
/*
crear una clase Persona con los siguientes atributos
nombre
apellidos
altura
edad

con su constructor y getters y setters

métodos: hablar y caminar
*/


/*
//Definir una clase (un "molde" para crear instancias o objetos)*/
class persona
{
    //atributos o propiedades (variables)
    private $nombre;
    private $apellidos;
    private $altura;
    private $edad;
    

public function __construct($nombre, $apellidos, $altura, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->altura = $altura;
        $this->edad = $edad;
    }
//Métodos, funciones o acciones
public function getNombre()
{
    return $this->nombre;
}
public function setNombre($nombre)
{
    $this->nombre = $nombre;
}
public function getApellidos()
{
    return $this->apellidos;
}
public function setApellidos($apellidos)
{
    $this->apellidos = $apellidos;
}
public function getAltura()
{
    return $this->altura;
}
public function getEdad()
{
    return $this->edad;
}
public function setEdad($edad)
{
    $this->edad = $edad;
}
public function hablar()
    {
        return "Programa";
        
    }
    public function caminar()
    {
        return "Estoy caminando";
    }
    public function mostrarInfo()
    {
        $informacion = "<h2>Información</h2>";
        $informacion .= "<p>Nombre: " . $this->nombre. "</p>";
        $informacion .= "<p>Apellidos: " . $this->apellidos . "</p>";
        $informacion .= "<p>Altura: " . $this->altura . "</p>";
        $informacion .= "<p>Edad " . $this->edad . "</p>";
        return $informacion;
    }
}
