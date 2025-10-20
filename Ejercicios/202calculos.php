<?php

$x = 166;
$y = 999;

echo "Variable X: " . $x . " <br> Variable Y: " . $y;
#Suma 

echo "<br><strong>Suma</strong>";

$suma = $x + $y;

printf("<br>La suma de X e Y es: " . $suma);

echo "<br><strong>Resta</strong>";
$resta = $x - $y;

printf("<br>La resta de X e Y es: " . $resta);

if ($resta < 0) {

    printf("<br>La resta es menor que 0");
}

echo "<br><strong>División</strong>";

$division = $y / $x;

printf("<br>La división de X e Y es: " . $division);

echo "<br><strong>Multiplicación</strong>";

$multiplicacion = $y * $x;

printf("<br>La multiplicación de X e Y es: " . $multiplicacion);
