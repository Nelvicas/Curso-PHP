<?php

$mount = 5;

switch ($mount) {
    case 1:
    case 2:
    case 12:
        echo " Es invierno";
        break;
    
    case 3:
    case 4:
    case 5:
        echo " Es Primavera";
        break;

    case 6:
    case 7:
    case 8:
        echo " Es verano";
        break;

    case 9:
    case 10:
    case 11:
        echo " Es otoño";
        break;
    
    default:
        echo "Dato invalido";
        break;
}