<!--  Herencia

-->

<?php

class persona{

    public $nombre;      // propiedades
    private $edad;
    protected $altura;


    public function asignarNombre($nuevoNombre){       // acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad; 
    }
}

class trabajador extends persona{

    public $puesto;    // nueva propiedad

    public function presentarseComoTrabajador(){          /// metodo nuevo 
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto. " y tengo ".$this->mostrarEdad(). " años"."<br>";
    }
}


$objTrabajador= new trabajador();       // instancia o creacion de un objeto
$objTrabajador->asignarNombre("Oscar Perez");      // llamando un metodo
$objTrabajador->puesto ="Profesor";
//$objTrabajador->mostrarEdad();

$objTrabajador->presentarseComoTrabajador();

$objTrabajador->imprimirNombre();


?>