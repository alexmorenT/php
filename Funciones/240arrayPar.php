<?php


// Números pares

$num = $_GET["id"];
esPar($num);
function esPar(int $num) {

    if ($num % 2 == 0){
        echo "<p>Es par</p>";
    } else {
        echo "<p>No es par</p>";
    }

}

//Números aleatorios dentro de un array

$tam = $_GET["tam"];
$min = $_GET["min"];
$max = $_GET["max"];

function arrayAleatorio (int $tam, int $min, int $max){
       $ar = [];
   
       for ($i=0; $i < $tam; $i++) { 
            array_push($ar, rand($min, $max));
            echo "$ar[$i]" . " ";
       }
       return $ar;
}
$array = arrayAleatorio($tam, $min, $max);

// Función que recibe array y devuelve la cantidad de números pares almacenados



function tienePares($array){

    $contador = 0;
    foreach ($array as $num) {
        if ($num % 2 == 0){
        $contador++;
    }
    }
    echo "<br>Cantidad de números pares: $contador"; 
}

tienePares($array);

?>