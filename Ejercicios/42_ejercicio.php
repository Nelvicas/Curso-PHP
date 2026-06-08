<!--  Abrir un archivo en php  -->

<?php 

$archivo="contenido.txt";  // abriendo un archivo para leer el contenido

$archivoAbierto= fopen($archivo,"r");  // abrir el archivo en modo lectura

$contenido= fread($archivoAbierto,filesize($archivo));  // lo almacenamos en un variable 

echo $contenido;

?>