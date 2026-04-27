

<?php

    if($_POST){
        
    // recibir informacion del formulario HTML (metodo POST)
    $nombre=$_POST['txtNombre'];
    echo "Hola ".$nombre;

    }
?>

<!--// incluir codigo html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Hola Mundo--> 

    <form action="02_ejercicio.php" method="post">
        Nombre: 
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">


    </form>


    
</body>
</html>