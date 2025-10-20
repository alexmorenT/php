<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private int $sueldo;
    private array $telefonos;

    public function __construct(string $nom, string $ape, int $sueldo = 1000)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->sueldo = $sueldo;
        $this->telefonos = [];
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

    public function anyadirTelefono(int $tel): void
    {
        array_push($this->telefonos, $tel);
    }

    public function listarTelefonos(): string
    {
        if (empty($this->telefonos)) {
            return "Está vacío";
        }
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }
}


$emple = new Empleado("Victor", "Guerrero", 15000);

$emple2 = new Empleado("Luis", "Garcia");

echo $emple->getNombreCompleto();
echo $emple->getSueldo();
echo "<br>";
echo $emple2->getNombreCompleto();
echo $emple2->getSueldo();
