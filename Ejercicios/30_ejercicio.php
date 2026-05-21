<!--   Phpmyadmin crear base de datos   
   insertar datos en mysql con php -->


<?php


$servidor="localhost";  // en local es 127.0.0.1
$usuario="root";
$contrasenia="";

try{     // try-catch ->  condicional de errores pueden se controlados 

    $conexion=new PDO("mysql:host=$servidor;port=3307;dbname=album",$usuario,$contrasenia);  //PDO es una clase para poder conectarse a la base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la pelota', 'pelota.jpg');";

    $conexion->exec($sql);

    echo "Conexion establecida!!";

}catch(PDOException $error){
    echo "Conexion erronea: " . $error->getMessage();

}
?>