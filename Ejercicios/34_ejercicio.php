<!--  Valores del input radio  

//  isset --<  si existe 

--->



<?php

    $txtNombre="";
    $rdgLenguaje="";

    $chkphp="";
    $chkhtml="";
    $chkcss="";


    $lsAnime="";
    $txtComentario="";


    if($_POST){
        $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";   // if ternario 

        //print_r($rdgLenguaje);

         $chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
         $chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
         $chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";

         $lsAnime=(isset($_POST['lsAnime']))?$_POST['lsAnime']:"";

         $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:""; 

         //print_r($lsAnime);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST){ ?>
    <strong> Hola </strong>: <?php echo $txtNombre;?><br>       <!--   -->
    <strong> Tu lenguaje es: </strong> <?php echo $rdgLenguaje;?>      <!--  radio -->
    </br>
    <strong> Estas aprendiendo: </strong><br>
    -<?php echo ($chkphp=="checked")?"PHP":"";?><br>
    -<?php echo ($chkhtml=="checked")?"HTML":"";?><br>             <!-- checkbox  -->
    -<?php echo ($chkcss=="checked")?"CSS":"";?>
    <br>
    <strong>Tu anime favorito es :</strong><br/>                   <!-- option  -->
    <?php echo $lsAnime; ?>
    <br>
    <strong>Tu mensaje es: </strong> <?php  echo $txtComentario; ?>
    <br>
    <br>
    <strong> ////////////////////////////// </strong> <?php ?><br>
    <?php } ?>
    </br>
    </br>
    
    <form action="34_ejercicio.php" method="post">


        Nombre:</br>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        </br>
        ¿Te gusta?</br>
        </br> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""></br>     
        </br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""></br>   <!-- input tipo radio -->
        </br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""></br>
        </br>
        </br>
        <!-- uso del checkbox  -->

        Estas aprendiendo...

        </br> php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        </br> html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        </br> css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">
        </br>
        </br>

        <!---  valores select option  -->

        ¿Que anime te gusta?... </br>
        <select name="lsAnime" id="" >
            <option value="">[Ninguna Serie]</option>
            <option value="naruto" <?php  echo ($lsAnime=="naruto")?"selected":""; ?> >Naruto</option>
            <option value="bleach" <?php  echo ($lsAnime=="bleach")?"selected":""; ?>>Bleach</option>
            <option value="dragon" <?php  echo ($lsAnime=="dragon")?"selected":""; ?>>Dragon Ball</option>
        </select>
        </br>
        </br>


        <!-- textarea  -->

        ¿Tienes alguna duda? <br>
        <textarea name="txtComentario" id="" cols="30" rows="10" >
            <?php echo $txtComentario; ?>
        </textarea>
        <br>
        <br>


        <input type="submit" value="Enviar Informacion">

    </form>
    
</body>
</html>