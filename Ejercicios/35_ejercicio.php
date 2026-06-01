<!-- Valores input file   -->

<?php

    if($_POST){
        print_r($_POST); 

        print_r($_FILES['archivo']['name']);         // para recuperar la informacion (obtener el nombre )
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="35_ejercicio.php" enctype="multipart/form-data" method="post">

    Imagen:
    <input type="file" name="archivo" id="">
    <br>
    <input type="submit" name="enviar" value="Enviar informacion">
    </form>
    
</body>
</html>