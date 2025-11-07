<?php


if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
}
if (isset($_GET["email"])) {
    $email = $_GET["email"];
}
if (isset($_GET["url"])) {
    $url = $_GET["url"];
}
if (isset($_GET["sexo"])) {
    $sexo = $_GET["sexo"];
}
if (isset($_GET["numeroConvivientes"])) {
    $numeroConvivientes = $_GET["numeroConvivientes"];
}
if (isset($_GET["aficiones"])) {
    $aficiones = $_GET["aficiones"];
    if (is_array($aficiones)) {
        $aficiones = implode(", ", $aficiones);
    }
}
if (isset($_GET["menu"])) {
    $menu = $_GET["menu"];
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
