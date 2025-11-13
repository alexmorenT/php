<?php
if (isset($_POST["enviar"])) {
    if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
    } else {
        $error = "Debe introducir un usuario y una contraseña";
        include "autenticacion.php";
    }
}
if ($usuario == "alex" && $pass == "1234") {
    session_start();
    if (isset($_COOKIE["ultima_conexion"])) {
        $visita_anterior = $_COOKIE["ultima_conexion"];
        $visita_anterior_formateada =  date("d-m-Y H:i:s", $visita_anterior);
        echo "<p>Bienvenido de nuevo, " . $usuario . "</p> <br>";
        echo "<p>Última conexión: " . $visita_anterior_formateada . "</p> <br>";
    } else {
        echo "<h2> Bienvenido por primera vez </h2>";
    }
    setcookie("ultima_conexion", time(), time() + (60 * 60 * 24 * 30));
} elseif ($usuario !== "alex" && $pass !== "1234") {
    $error = "Debe introducir un usuario y una contraseña";
    include "autenticacion.php";
} else {
    $error = "Debe introducir un usuario y una contraseña";
    include "autenticacion.php";
}
