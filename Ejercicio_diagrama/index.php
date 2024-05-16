<?php
require_once 'contrato.php';
require_once 'coche.php';
require_once 'moto.php';
require_once 'cliente.php';
require_once 'camion.php';
require_once 'vehiculo.php';

$contrato1 = new Contrato(Date('d-m-Y'), "15-06-2024", 17);
echo $contrato1->showContract();


 $coche = new Coche(5,'Audi', 'Audiguay');
 echo $coche->getModelo();

 $moto = new moto(49);
 echo "<br>";
 echo $moto->getCc();

 $cliente = new Cliente(1234567, 'Germán');
 echo $cliente->Cliente();

 $camion = new Camion(800);
 echo $camion->Camion();

 $vehiculo = new Vehiculo(123589641, 'Audi', 'guay');
 echo $vehiculo->Vehiculo();


 