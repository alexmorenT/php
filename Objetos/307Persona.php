<?php

class Persona
{
    public string $nombre;
    public string $apellido;

    public function __construct(string $nombre, string $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
}

class Empleado extends Persona
{
    private static $sueldoTope = 3333;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellido, float $sueldo = 1000)
    {
        parent::__construct($nombre, $apellido);
        $this->sueldo = $sueldo;
    }

    public function setSueldoTope(int $tope)
    {
        self::$sueldoTope = $tope;
    }

    public function setSueldo(int $sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    public function getNombreCompleto(): string
    {
        return parent::getNombre() . " " . parent::getApellido();
    }

    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > self::$sueldoTope) {
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

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }


    public static function toHTML(Empleado $emp): string
    {

        function telefonos(Empleado $emp): string
        {

            $telefonos = $emp->getTelefonos();
            $text = "";
            if (!empty($telefonos)) {
                $text .= "<ol>";
                foreach ($telefonos as $tel) {
                    $text .= "<li>" . $tel . "</li>";
                }
                $text .= "</ol>";
            } else {
                echo "No se han encontrado números de teléfono";
            }
            return $text;
        }
        return "<p><strong> Me llamo: </strong> " . $emp->getNombreCompleto() . "<strong>, gano: </strong> "
            . $emp->getSueldo() . " y tengo estos contactos: " . telefonos($emp);
    }
}


$emple = new Empleado("Alex", "Guerrero", 100000);
$emple->anyadirTelefono(631599750);
$emple->anyadirTelefono(631599751);
$emple->anyadirTelefono(631599752);
echo $emple->toHTML($emple);
