<!--  destruccion de la variable de sesion -->


<?php
session_start();
session_destroy();

echo "se destruyo la sesion de ususario";

?>