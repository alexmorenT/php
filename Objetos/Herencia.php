<?php

class Producto
{
    public $codigo;
    public $nombre;
    public $nombreCorto;
    public $PVP;

    public function mostrarResumen()
    {
        echo "<p>Prod: " . $this->codigo . "</p>";
    }
}

class Tv extends Producto
{
    public $pulgadas;
    public $tecnologia;
}

$t = new Tv("33plg", "45");
$t->codigo = 33;
if ($t instanceof Producto) {
    echo $t->mostrarResumen();
}

$padre = get_parent_class($t);
echo "<br> La clase padre es: " . $padre;
$objetoPadre = new $padre;
$objetoPadre->codigo = 34;
echo $objetoPadre->mostrarResumen();

if (is_subclass_of($t, 'Producto')) {
    echo "<br> Soy un hijo de Producto";
}
