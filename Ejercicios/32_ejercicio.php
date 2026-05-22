<!--  Variables de sesion con php 
  sesiones_start ---- para matener datos en las paginas 
                      para guardae sesiones en logueos
-->



<?php

session_start();

$_SESSION["usuario"]= "develoteca";
$_SESSION["estatus"]="logueado";

echo "Sesion Iniciada"."<br>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];


?>