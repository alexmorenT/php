<?php

class Empleado
{
    // se colocan las propiedades public, protected o private directamtente dentro de los parámetros
    public function __construct(protected string $nombre = "", protected string $apellido = "", protected int $sueldo = 2000) {}


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


$emple = new Empleado("Alexander", "Moreno", 1000);
$emple2 = new Empleado("Fernando", "Apellido-conjunto");

echo $emple->getNombreCompleto();
echo $emple2->getNombreCompleto();
