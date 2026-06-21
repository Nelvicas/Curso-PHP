<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/Curso%20PHP/Sitio_Web" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del ditio web</a>
            <a  class="nav-item nav-link" href="<?php echo $url; ?>/administrador/inicio.php">inicio</a>
            <a  class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">Libros</a>
            <a  class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">Cerrar</a>
            <a  class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
            
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="row">



    