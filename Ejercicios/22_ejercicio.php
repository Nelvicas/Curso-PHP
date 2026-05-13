<!-- Leer archivos en php -->


<?php

$frutas=array("fresa", "Manzana", "Pera");

print_r($frutas)."<br>";

echo $frutas[0]."<br>";
echo $frutas[2]."<br>";

for($indice=0; $indice<3;$indice++){
    
    echo $frutas[$indice]."<br>";
}

?>