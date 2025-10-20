<?php

// Función que devuelve la cantidad de dígitos de un número

// function digitos (int $num){
//     echo "$num";

//     $digitos = strlen((string)$num);

//     echo "<br>Tiene: " . $digitos . " dígitos";
// }

function digitos (int $num){
    $cantDigitos = 0;
    $numAbs = abs($num);

    if ($numAbs === 0){
        $cantDigitos = 1;
    }

    while ($numAbs > 0){
        $cantDigitos++;
        $numAbs = (int)($numAbs/10);
    }
    return $cantDigitos;
}

echo digitos(51514581);


function digitoN (int $num, int $pos){
    $numAbs = abs($num);
    $array = [];

    while ($numAbs > 0){
        $numAbs = (int)($numAbs/10);
        array_push($array, $numAbs);
    }
    return $array[$pos];
}

echo "<br>Posición: " . digitoN(123445, 5);

?>