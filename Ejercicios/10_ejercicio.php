<!-- if anidados  -->


<?php 

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    
    // Suma 
    $suma= $valorA + $valorB;
    // Resta
    $resta= $valorA - $valorB;
    // Divicion 
    $divicion= $valorA / $valorB;
    // Multiplicacion 
    $multiplicacion= $valorA * $valorB;

    echo "<br>". $suma;
    echo "<br>". $resta;
    echo "<br>". $divicion;
    echo "<br>". $multiplicacion ."<br>";

    if($valorA==$valorB){
        echo "El valor de A es igual a el valor de B <br>";
        if($valorA==4){
            echo "El valor es 4 <br>";
        }
        if($valorA==5){
            echo "El valor es 5 <br>";
        }

    }

    if(($valorA==$valorB) && ($valorA==4)){

        echo "El valor de A es igual a B y es un numero 4";
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if anidados</title>
</head>
<body>

    <form action="10_ejercicio.php" method="post">

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