<br>
<?php  include('cabecera.php');  ?>

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
                                    <th scope="col">Nombre del proyecto</th>
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