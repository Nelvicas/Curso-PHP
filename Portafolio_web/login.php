<?php

if($_POST){

    if(($_POST['usuario']=="develoteca") && ($_POST['contrasenia']=="12345")){

       header("location:index.php");
    }else{
        echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
    }
}

?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="container"> 
                <br>
                <div class="card">
                    <div class="card-header">Iniciar sesión</div>
                    <div class="card-body">
                        <form action="login.php" method="post">

                            Usuario: <input class="form-control" type="text" name="usuario" id="">
                            <br>
                            Contraseña: <input class="form-control" type="password" name="contrasenia" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-body-secondary"></div>
                </div>
                
            </div>

        </div>
        <div class="col-md-4">

        </div>
       
    </div>
    

    
    

    
       
    </body>
</html>
