<?php

// A partir de un nombre, un verbo, un adjetivo y un
// adverbio, crea una historia que contenga dichos elementos. Por ejemplo:

// Entrada: perro / caminar / azul / rápidamente
// Salida: ¿ Te gusta caminar con tu perro azul rápidamente ? 


$nombre = $_GET ["nombre"];
$verbo = $_GET ["verbo"];
$adje = $_GET ["adje"];
$adve = $_GET ["adve"];

echo "¿Te gusta "  . $verbo . " con tu "  . $nombre . " " . $adje . " " . $adve . "?"; 

?>