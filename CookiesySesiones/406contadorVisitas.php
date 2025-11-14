<form method="GET" action="406contadorVisitas.php">
    Resetear <input type="submit" name="reset" value="reset" />
</form>

<?php

$reinicio = false;

if (isset($_GET["reset"])) {
    setcookie("contadorVisitas", "", time() - (60 * 60 * 24 * 30));
    $reinicio = true;
}

if (isset($_COOKIE["contadorVisitas"]) && $reinicio == false) {
    $accesos = $_COOKIE["contadorVisitas"];
    $accesos++;
    setcookie("contadorVisitas", $accesos, time() + (60 * 60 * 24 * 30));
} else {
    $accesos = 1;
    setcookie("contadorVisitas", $accesos, time() + (60 * 60 * 24 * 30));
}
