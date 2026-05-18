<!--  Constructor

-->

<?php

class persona2{

    public $nombre;      // propiedades
    private $edad;
    protected $altura;


    function __construct($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
    }


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


$objAlumno= new persona2("Oscar Juares");       // instancia o creacion de un objeto
//$objAlumno ->asignarNombre("Oscar");      // llamando un metodo
$objAlumno->imprimirNombre();


?>