<!--  Clases :  es como una plantilla  -->

<?php

class persona{

    public $nombre;      // propiedades

    public function asignarNombre($nuevoNombre){       // acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }
}


$objAlumno= new persona();       // instancia o creacion de un objeto
$objAlumno ->asignarNombre("Oscar");      // llamando un metodo

$objAlumno2= new persona();
$objAlumno2 ->asignarNombre("Pedro");
$objAlumno2 ->imprimirNombre();


echo $objAlumno-> nombre;     // imprimir una propiedad
echo $objAlumno2-> nombre;


?>