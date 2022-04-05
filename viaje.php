<?php
//La empresa de transporte de pasajeros "viaje feliz" quiere registrar la informacion referente a sus viajes. De cada viaje se precisa almacenar el codigo del mismo, destino, cantidad maxima de pasajeros y los pasajeros del viaje

//realice la implementacion de la clase viaje e implemente los metodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene la informacion correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves "nombre","apellido" y "numero de documento"
//implementar un script testViaje.php que cree una instancia de la clase y presente un menu que permita cargar la informacion del viaje, modificar y ver sus datos.

class viaje{
    //atributos
    private $codViaje;
    private $destino;
    private $cantidadMaxima;
    private $pasajeros=["nombre"=>"","apellido"=>"","numero De documento"=>""];
    //metodo constructor
    public function __construct($cod,$des,$cantidad,$pasajero)
    {            
        $this->codViaje=$cod;
        $this->destino=$des;
        $this->cantidadMaxima=$cantidad;
        $this->pasajeros=$pasajero;
    }
    //metodos de acceso
    public function getCod(){
        return $this->codViaje;
    }
    public function setCod($codigoVia){
        $this->codViaje=$codigoVia;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function setDestino($destViaje){
        $this->destino=$destViaje;
    }
    public function getCant(){
        return $this->cantidadMaxima;
    }
    public function setCant($cantViajeros){
        $this->cantidadMaxima=$cantViajeros;
    }
    public function getPasajeros(){
        return $this->pasajeros;
    }
    public function setPasajeros($viajeros){

        $this->pasajeros=$viajeros;
    }
    

    //metodo magico
    public function __toString()
    {
      
        return    "codigo de viaje: ". $this->getCod()."\n"."destino: ". $this->getDestino()."\n"."cantidad de pasajeros:". $this->getCant()."\n"."nombre de pasajeros: ".$this->getPasajeros() ."\n"; 
    }




}







?>