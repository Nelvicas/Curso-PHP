<!-- Operadores aritmeticos -->


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
    echo "<br>". $multiplicacion;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>

    <form action="" method="post">

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