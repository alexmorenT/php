<?php

class Empleado
{
    const SUELDO_TOPE = 3333;
    // se colocan las propiedades public, protected o private directamtente dentro de los parámetros
    public function __construct(protected string $nom, protected string $ape, protected int $sueldo)
    {
        $nombre = $nom;
        $apellido = $ape;
        $sueldo = $sueldo;
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
        if ($this->sueldo > self::SUELDO_TOPE) {
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

$emple = new Empleado("Victor", "Guerrero", 4000);
echo $emple->debePagarImpuestos();
