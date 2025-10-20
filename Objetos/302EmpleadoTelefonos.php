<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private int $sueldo;
    private array $telefonos;

    public function __construct(string $nom, string $ape, int $sueldo)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->sueldo = $sueldo;
        $this->telefonos = [];
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
$emple1 = new Empleado("Miguel", "Hernandez", 3336);

echo $emple1->getNombreCompleto() . "<br>";
echo $emple1->anyadirTelefono(111111);
echo $emple1->anyadirTelefono(222222);
echo $emple1->anyadirTelefono(333333);
echo $emple1->anyadirTelefono(444444);

echo $emple1->listarTelefonos() . "<br>";


$emple2 = new Empleado("Alexander", "Moreno", 3336);

echo $emple2->getNombreCompleto() . "<br>";
echo $emple2->anyadirTelefono(111111);
echo $emple2->anyadirTelefono(222222);
echo $emple2->anyadirTelefono(333333);
echo $emple2->anyadirTelefono(444444);

echo $emple2->listarTelefonos();
