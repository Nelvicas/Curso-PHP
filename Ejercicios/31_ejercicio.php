<!--   Phpmyadmin crear base de datos   
   leer datos en mysql con php -->


<?php


$servidor="localhost";  // en local es 127.0.0.1
$usuario="root";
$contrasenia="";

try{     // try-catch ->  condicional de errores pueden se controlados 

    $conexion=new PDO("mysql:host=$servidor;port=3307;dbname=album",$usuario,$contrasenia);  //PDO es una clase para poder conectarse a la base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // leer datos

    $sql="SELECT * FROM `fotos`";              // consulta
    $sentencia=$conexion->prepare($sql);       // sentencia para que ejecute la consulta mediante PDO
    $sentencia->execute();                     // metodo de ejecucion

    $resultado=$sentencia->fetchAll();         // el resultado de sentencia se va a almacenar en resultado

    //print_r($resultado);


    ///  medainte un foreach

    foreach($resultado as $foto){
        echo $foto['nombre']."<br>";
    }

    echo "Conexion establecida!!";

}catch(PDOException $error){
    echo "Conexion erronea: " . $error->getMessage();

}
?>