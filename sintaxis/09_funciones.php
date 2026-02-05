<?php

// funciones 

function hi($name) {
    echo "Hola $name <br>";
}

echo hi("juan");   // asi se manda a llamra la funcion 



// funcion con parametros 

function add($a, $b){
    $result = $a + $b;
    return $result;
}

echo add(11, 20);