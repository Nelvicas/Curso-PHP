<?php
 // conexion a la base de datos 
    $host="localhost";
    $bd="sitio";
    $usuario="nelvi";
    $contraseña="1234";

    try{
        $conexion=new PDO("mysql:host=$host;port=3307;dbname=$bd",$usuario,$contraseña);
        //if($conexion){echo "Conectado.... a sistema";}

    }catch(Exception $ex){
            echo $ex->getMessage();
    }

?>