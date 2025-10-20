<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$email = $_GET["email"];
$anyo = $_GET["anyo"];
$tlf = $_GET["tlf"];

echo "<table style='border: 1px solid black'>
    <tr>
        <td>Nombre:</td>
        <td>$nombre</td>
    </tr>
    <tr>
        <td>Apellido:</td>
        <td>$apellido</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>$email</td>
    </tr>
    <tr>
        <td>Año de nacimiento:</td>
        <td>$anyo</td>
    </tr>
     <tr>
        <td>Teléfono:</td>
        <td>$tlf</td>
    </tr>
</table>";

?>