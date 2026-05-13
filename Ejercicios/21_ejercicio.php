<!-- Arreglos asociativos en php -->


<?php

$frutas =array("f"=>"fresa", "m"=>"Manzana", "p"=>"Pera");

print_r($frutas);


echo $frutas["m"]."<br>";

foreach($frutas as $indice=>$valor){

    echo $frutas[$indice]."<br>";


    echo "El valor ".$valor." Tiene el indice: ".$indice."<br>";

}

?>