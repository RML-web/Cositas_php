<?php
require_once 'persona.php';

$persona1 = new persona("Plátano", "Mandarino", "160", 24);
$persona2 = new persona("Plátano", "Mandarino", "160", 24);
$persona3 = new persona("Plátano", "Mandarino", "160", 24);
$persona4 = new persona("Plátano", "Mandarino", "160", 24);

//Crear 3 coches más y mostrar su info 
echo $persona1->mostrarInfo();
echo $persona2->mostrarInfo();
echo $persona3->mostrarInfo();
echo $persona4->mostrarInfo();