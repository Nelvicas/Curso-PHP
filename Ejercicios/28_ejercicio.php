<!--  Metodos estaticos en php -->

<?php

class UnaClase{

    public static function unMetodo(){             // creacion de metodo estatico
        echo "Hola soy un metodo estatico"."<br>";
    }
}

// creacion de objeto 

$obj=new UnaClase();
$obj->unMetodo();          // se manda a llamar el metodo


// forma de llamar a metodos estaticos

UnaClase::unMetodo();

?>
