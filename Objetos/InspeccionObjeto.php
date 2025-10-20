<?php

include_once("claseEstatica.php");


$p = new Producto("PS5");
if ($p instanceof Producto) {
    echo "Es un producto" . "<br>";
    echo "La clase es " . get_class($p) . "<br>";

    class_alias("Producto", "Articulo");
    $c = new Producto("Producto", "Articulo");
    echo "Un artículo es un " . get_class($c) . "<br>";

    print_r(get_class_methods("Producto"));
    print_r(get_class_vars("Producto"));
    print_r(get_object_vars($p));

    if (method_exists($p, "mostrarResumen")) {
        $p->mostrarResumen();
    }
}
