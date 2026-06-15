<br>
<?php  include('cabecera.php');  ?>
<?php  include('conexion.php');  ?>


<?php
if($_POST){

    print_r($_POST);

    $nombre= $_POST['nombre'];  // insertar datos
    $descripcion=$_POST['descripcion'];

    $fecha= new DateTime();
    $imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    $objConexion = new conexion();
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);



}

if($_GET){

    $id= $_GET['borrar'];
    $objConexion = new conexion();    // obtener datos con get y eliminarlos 

    $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    $sql= "DELETE FROM proyectos WHERE `proyectos`.`id` = ".$id;
    $objConexion->ejecutar($sql);
}



$objConexion= new conexion();    // consultar datos 
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

//print_r($proyectos);

?>

    <br><br>   <!--// formulario -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Datos del proyecto
                    </div>
                    <div class="card-body">

                 
                            <form action="portafolio.php" method="post"  enctype="multipart/form-data">
                                    Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                                    <br>
                                    Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
                                    <br>
                                    Descripción:
                                    <textarea class="form-control" name="descripcion" id="" row="3"></textarea>
                                    <br>
                                    <input class="btn btn-success" type="submit" value="Enviar proyecto">
                                    
                            </form>
                            
                            </div>
                    </div>
                </div>
                            <div class="col-md-6">
                                <br>
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
                                                    <th scope="col">Descripción</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($proyectos as $proyecto){ ?>
                                                    <tr class="">
                                                        <td> <?php echo $proyecto['id']; ?> </td>
                                                        <td> <?php echo $proyecto['nombre']; ?></td>
                                                        <td> <?php echo $proyecto['imagen']; ?></td>
                                                        <td> <?php echo $proyecto['descripcion']; ?></td>
                                                        <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" role="button" >Eliminar</a> </td>
                                                    </tr>
                                                <?php } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
            
        </div>
    </div>
    

    
    


<?php  include('pie.php');  ?>