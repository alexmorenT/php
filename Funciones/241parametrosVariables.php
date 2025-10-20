<?php

// Funcion que devuelva el número mayor de todos los números recibidos como parámetros

function mayor(){
    $ar = func_get_args();
    $max = 0;
    foreach ($ar as $num) {
        if ($num > $max){
            $max = $num;
        }
    }
    echo "El número mayor es: $max";
}
mayor (12, 3, 12.4, 6, 7);

// Función que concatene todos los parámetros recibidos separándolos con un espacio

function concatena(){
    $array = func_get_args();
    foreach ($array as $p) {
        echo "$p" . " ";
    } 
}

concatena("<br>Almendra", "Manzana", "Lija", "Balón");

?>