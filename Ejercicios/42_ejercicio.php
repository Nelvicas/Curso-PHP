<!--  Abrir un archivo en php  -->

<?php 

$archivo="contenido.txt";  // abriendo un archivo para leer el contenido

$archivoAbierto= fopen($archivo,"r");  // abrir el archivo en modo lectura ( fopen : es para abrir el archivo)

$contenido= fread($archivoAbierto,filesize($archivo));  // lo almacenamos en un variable   ( fread  : es para leer el archivo) 

echo $contenido;

?>