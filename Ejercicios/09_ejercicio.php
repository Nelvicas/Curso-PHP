<!-- Operadores logicos  -->

<!--

AND  && 
OR   ||
NOT  !   -->


<?php 

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    
   if(($valorA != $valorB) && ($valorA > $valorB)){

    echo "El valor de A es diferente que el valor de  y tambien es mayor ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>
<body>

    <form action="09_ejercicio.php" method="post">

    valor A:
    <input type="text" name="valorA" id="">
    <br>
    valor B:
    <input type="text" name="valorB" id="">
    <br>
    Resultado:
    <input type="text" name="Resultado" id="">
    <br>
    <input type="submit" value="Calcular">

    </form>
    
</body>
</html>