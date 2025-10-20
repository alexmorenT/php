<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private int $sueldo;

    public function __construct(string $nom, string $ape, int $sueldo)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->sueldo = $sueldo;
    }

    public function setNombre(string $nom)
    {
        $this->nombre = $nom;
    }

    public function setApellido(string $ape)
    {
        $this->apellido = $ape;
    }

    public function setSueldo(int $sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    public function getNombreCompleto(): string
    {
        return $this->getNombre() . " " . $this->getApellido();
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > 3333) {
            return true;
        } else {
            return false;
        }
    }
}
// holaaaa

$emple1 = new Empleado("Miguel", "Hernandez", 3336);

echo $emple1->getNombreCompleto();
echo "<br>";
echo $emple1->debePagarImpuestos();
echo "<br>";

$emple2 = new Empleado("Victor", "Guerrero", 2050);

echo $emple2->getNombreCompleto();
echo "<br>";
echo $emple2->debePagarImpuestos();
