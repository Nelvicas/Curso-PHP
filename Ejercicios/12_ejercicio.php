<!-- Switch  -->


<?php

if($_POST){      // para evaluar si ahi un envio

$boton= $_POST['btnValor'];

switch($boton){

    case 1:
        echo "presiono el boton 1";
    break;

    
    case 2:
        echo "presiono el boton 2";
    break;

    
    case 3:
        echo "presiono el boton 3";
    break;
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

<form action="12_ejercicio.php" method="post">

    <input type="submit" name="btnValor" value="1">
    <br>
    <input type="submit" name="btnValor" value="2">
    <br>
    <input type="submit" name="btnValor" value="3">

</form>
    
</body>
</html>