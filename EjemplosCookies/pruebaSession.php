<?php
session_start(); // inicializamos
$_SESSION["ies"] = "IES Severo Ochoa"; // asignación
$instituto = $_SESSION["ies"]; // recuperación
echo "Estamos en el $instituto ";
?>
<br />
<a href="sesion2.php">Y luego</a>