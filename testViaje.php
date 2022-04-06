<?php 
include "viaje.php";


$datos= new viaje(0,"0",0,"0");

echo "codigo de viaje:\n";
$datos->setCod(trim(fgets(STDIN)));
echo"lugar de destino:\n";
$datos->setDestino(trim(fgets(STDIN)));
echo "cantidad pasajeros:\n";
$datos->setCant(trim(fgets(STDIN)));

echo"debe ingresar nombre, apellido y dni de los pasajeros___ (presione S para seguir)\n";
$seguir=trim(fgets(STDIN));

    if ($seguir=="s") {
        
        do {
            echo "nombre\n";
            $nom=trim(fgets(STDIN));
            echo "apellido\n";
            $apellido=trim(fgets(STDIN));
            echo "dni\n";
            $dni=trim(fgets(STDIN));
            echo"cargar otro pasajero?-- s para seguir .\n";
            
            $seguir=trim(fgets(STDIN));
        } while ($seguir <> "s");

        $info[]=["nombre"=>$nom,"apellido"=>$apellido,"dni"=>$dni ];

    }else {
        echo"debe llenar los campos obligatorios\n";
    }

    $datos->setPasajeros($info);

echo "--------------------------\n";
echo "  VIAJE 1:\n" . $datos . "\n";
echo "--------------------------\n";


?>