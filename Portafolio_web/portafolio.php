<br>
<?php  include('cabecera.php');  ?>
<?php  include('conexion.php');  ?>

<?php
$objConexion = new conexion();
$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, 'Proyecto 1', 'imagen.jpg', 'Es un proyecto de hace mucho tiempo');";
$objConexion->ejecutar($sql);


?>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                 <form action="portafolio.php" method="post">
                    Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                    <br>
                    Imagen del proyecto: <input class="form-control" type="text" name="archivo" id="">
                    <br>
                    <input class="btn btn-success" type="submit" value="Enviar proyecto">
                    
                </form>
               
            </div>
            <div class="col-md-6">
                 <br><br>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-primary"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>3</td>
                                    <td>Aplicacion web</td>
                                    <td>imagen.jpg</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
            </div>
            
        </div>
    </div>
    

    
    


<?php  include('pie.php');  ?>