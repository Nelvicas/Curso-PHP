<?php

//  ó  #  COMENTARIO EN PHP EN LINEA
/*
COMENTARIO EN 
BLOQUE 
*/


// VARIABLES

$nombre = "Victor";
$texto = "Repaso de php";
$altura = $_GET["altura"];

// IMPRIMIR Y CONCATENAR

echo $texto." y su altura es : ".$altura."cm";

print("Hola");


# GET  solo por la url 

echo "<br>";
echo $_GET["nombre"];


# Condicionales   ( if )

echo "<br>";
if ($altura >= 180){
    echo "Eres una persona alta";

}else{
    echo "Eres una persona baja";
}


#  FUNCIONES 

function comparaNombre(){
    if(isset($_GET["NOMBRE"])){
        $nombre = $_GET["nombre"];
    }else{
        $nombre = "Victor";
    }
    return $nombre;
}

echo "<br>";
echo comparaNombre();

# ARRAYS

$personas = ["Victor", "Frank", "Paco"];echo "<br>";

echo $personas[1];


#BUCLES

foreach ($personas as $nombre) {
    echo "<li>$nombre</li>";
}

?>