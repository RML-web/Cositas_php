<?php
require_once 'vehiculosRent.php';
require_once 'coche.php';
require_once 'cliente.php';
require_once 'camion.php';
require_once 'moto.php';
require_once 'contrato.php';
require_once 'flota.php';

//cargar datos
$VR = new VehiculosRent("11223344A","Vehículos para alquilar");

function cargarDatosFlotas(){
    global $VR;
    $flotaRoja = new Flota("Zona Roja");
    $flotaVerde = new Flota("Zona Verde");
    $flotaAmarilla = new Flota("Zona Amarilla");

    $VR->addFlota($flotaRoja);
    $VR->addFlota($flotaVerde);
    $VR->addFlota($flotaAmarilla);
}
function cargarDatosVehiculos(){
    $coche = new Coche("1122ABC", "Audi", "TT", 2, 4);
    $moto = new Moto("2233LML", "Piaggio", "Liberty", 125);
    $camion = new Camion("3344HJK", "Renault", "Jumpy", 560);
    global $VR;
    $VR->getFlotas()[0]->addVehiculo($coche);
    $VR->getFlotas()[0]->addVehiculo($moto);
    $VR->getFlotas()[1]->addVehiculo($moto);
    $VR->getFlotas()[2]->addVehiculo($camion);
}


function cargarDatosAgencias()
{
    //TODO falta la clase agéncia
    $agencia1 = new Agencia("Agencia 1");
    $agencia2 = new Agencia("Agencia 2");
    $agencia3 = new Agencia("Agencia 3");
    global $VR;
    $VR->addAgencia($agencia1);
    $VR->addAgencia($agencia2);
    $VR->addAgencia($agencia3);

}

function cargarDatos(){
    cargarDatosFlotas();
    cargarDatosVehiculos();
    cargarDatosAgencias();
}
//Carga inicial de datos -> se hará desde una consulta a la BBDD

cargarDatos();
//var_dump($VR);
$salir = false;


do{
    print "************************************************\n";
    print "*                 Menú principal               *\n";
    print "************************************************\n";
    print "Elige una opción: (1,2...):\n";
    print "1. Añadir vehiculos a una flota\n";
    print "2. Mostrar vehículos de una flota\n";
    print "3. Quitar un vehículo de una flota\n";
    print "4. Mostrar Agéncias\n";
    print "0. Salir de la aplicación\n";

    fscanf(STDIN, "%d\n", $opcion);
    switch ($opcion){
        case 1:
            addVehiculoToFlota();
            break;
        case 2:
            mostrarVehiculosFlota();
            break;
        case 3:
            quitarVehiculoFlota();
            break;
        case 4:
            mostrarAgencias();
            break;
        case 0:
            $salir = true;
    }
}while(!$salir);

function addVehiculoToFlota()
{
    echo "Añadir una vehiculo a la flota\n";
    do{
        //Mostrar las flotas
        //Selecciona una flota
        //Pedir y guardar datos el Vehiculo
        //Añadir el vehiculo

    }while(true);
}

function mostrarVehiculosFlota()
{
    print "************************************************\n";
    print "*     Vista de los vehiculos de la flota       *\n";
    print "************************************************\n";
    print "Elige una flota (0,1...)\n";
    global $VR;
    foreach ($VR->getFlotas() as $key => $flota){
        echo $key.': '.$flota->getNombre()."\n";
    }
    //Preguntar por la opción de la flota
    fscanf(STDIN, "%d\n", $opcion);
    if($opcion < 0 || $opcion > count($VR->getFlotas())){
        print "Opción incorrecta!\n";
        return;
    }
    //listar los vehiculos de la flota que tenga el indice de la opción
    $listaVehiculos = $VR->getFlotas()[$opcion]->listVehiculos();
    echo "$listaVehiculos\n";
}

function quitarVehiculoFlota()
{
    echo "Quitar un vehiculo de la flota\n";
}

function mostrarAgencias()
{
    echo "Vista de agencias\n";
}
