<!-- Funcion para JSON  decode  
JSON  = es informacion que nos envian algunas API´s  para consultar 

-->

<?php 

$jsonContenido='[
    {"nombre":"Oscar", "apellido":"Uh"},
    {"nombre":"Jose", "apellido":"Perez"}
    ]';

    $resultado = json_decode($jsonContenido);
    //print_r($resultado); 
    
    foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br>";
    }

?>