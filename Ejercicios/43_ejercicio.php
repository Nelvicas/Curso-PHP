<!--  Escritura de archivos en php  -->

<?php 

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola , Saludos";
$archivoACrear= fopen($nombreArchivo,"w");
fwrite($archivoACrear,$contenidoArchivo);
fclose($archivoACrear);
?>