<?php


if (!empty($_GET["nombre"]) && isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
}
if (!empty($_GET["email"]) && isset($_GET["email"])) {
    if(filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)){     
            $email = $_GET["email"];
    } else {
        $email = "Error, no se ha introducido un correo válido";
    }
}
if (!empty($_GET["url"]) && isset($_GET["url"])) {
    if(filter_var($_GET["url"], FILTER_VALIDATE_URL)){     
            $url = $_GET["url"];
    } else {
        $url = "Error, no se ha introducido una URL válida";
    }
}
if (!empty($_GET["sexo"]) && isset($_GET["sexo"])) {
    $sexo = $_GET["sexo"];
}
if (isset($_GET["numeroConvivientes"])) {
    $numeroConvivientes = $_GET["numeroConvivientes"];
}

$array_aficiones = ["Videojuegos", "Escalar", "Deportes", "Lectura"];

if (!empty($_GET["aficiones"]) && isset($_GET["aficiones"])) {
    if(empty(array_diff($_GET["aficiones"], $array_aficiones))){
        $aficiones = $_GET["aficiones"];
    } else {
        $aficiones = "Error, no se ha introducido una afición válida";
    }
    if (is_array($aficiones)) {
        $aficiones = implode(", ", $aficiones);
    }
}

$array_menu = ["Tostada con jamón", "Hamburguesa", "Pizza", "Lasaña"];

    if (!empty($_GET["menu"]) && isset($_GET["menu"])) {
    if(empty(array_diff($_GET["menu"], $array_menu))){
        $menu = $_GET["menu"];
    } else {
        $menu = "Error, no se ha introducido un menú válido";
    }
    if (is_array($menu)) {
        $menu = implode(", ", $menu);
    }
}

echo "<table border=\"1\" cellpadding=\"8\">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Url</th>
        <th>Sexo</th>
        <th>Número de convivientes</th>
        <th>Aficiones</th>
        <th>Menú</th>
    </tr>
    <tr>
    <td>$nombre</td>
    <td>$email</td>
    <td>$url</td>
    <td>$sexo</td>
    <td>$numeroConvivientes</td>
    <td>$aficiones</td>
    <td>$menu</td>
</tr>
</table>";
