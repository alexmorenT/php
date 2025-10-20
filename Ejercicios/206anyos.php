<?php

// Tras leer la edad de una persona, mostrar la edad que tendrá dentro de
// 10 años y hace 10 años. Además, muestra qué año será en cada uno de los casos. Finalmente,
// muestra el año de jubilación suponiendo que trabajarás hasta los 67 años.


$edad = $_GET["id"];

$anyoActual = date ("Y");

$sumaEdad = $edad + 10;
$restaEdad = $edad - 10;

function confEdad($restaEdad) {
if ($restaEdad < 0 ){
    return 0;
} else {
    return $restaEdad;
}
}

echo "<p>Tu edad dentro de 10 años será " . "(" . ($anyoActual + 10) . ")" .": <strong>" . $sumaEdad . "</strong></p>";
echo "<p>Tu edad hace 10 años era " . "(" . ($anyoActual - 10) .")". ": <strong>".  confEdad($restaEdad) . "</strong></p>";

$jub = 67 - $edad;

$anyosFaltan = $anyoActual + $jub;

if ($jub <= 0) {
    echo "<p> Ya te has jubilado</p>";
} elseif ($jub == 1) {
    echo "<p>Toca jubilarse este año</p>";
} else {
    echo "<p>Te jubilarás en el... " . $anyosFaltan ."</p>";
}






?>