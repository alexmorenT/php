<?php

abstract class Persona
{
    public string $nombre;
    public string $apellido;
    public int $edad;

    public function __construct(string $nombre, string $apellido, int $edad = 18)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad(int $edad)
    {
        $this->edad = $edad;
    }

    public static function toHTML(Persona $p) {}

    public function __toString(): string
    {
        return "Nombre: " . $this->nombre .  " " . $this->apellido . " Edad: "
            . $this->edad;
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
        if ($this->sueldo > self::$sueldoTope && $this->edad >= 21) {
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


    public static function toHTML(Persona $emp): string
    {
        if ($emp instanceof Empleado) {

            function telefonos(Empleado $emp): string
            {

                $telefonos = $emp->getTelefonos();
                $text = "";
                $text .= "<strong>Me llamo: " . $emp->getNombre() . " " . $emp->getApellido();
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
        }
        return Persona::toHTML($emp) . "<strong>, gano: </strong> "
            . $emp->getSueldo() . " y tengo estos contactos: " . telefonos($emp);
    }

    public function __toString(): string
    {

        $text = "";
        $text .= Persona::__toString();
        $text .= " Sueldo: " . $this->sueldo . " ";
        if (!empty($this->telefonos)) {
            $text .= "<ol>";
            foreach ($this->telefonos as $tel) {
                $text .= "<li>" . $tel . "</li>";
            }
            $text .= "</ol>";
        }
        return $text;
    }
}


$emple = new Empleado("Alex", "Guerrero", 100000);
$emple->setEdad(20);

$emple->anyadirTelefono(631599750);
$emple->anyadirTelefono(631599751);
$emple->anyadirTelefono(631599752);
echo $emple->toHTML($emple);

echo $emple->debePagarImpuestos() ? "debe pagar impuestos" : "no debe pagar impuestos";
echo $salto = "<br>";
echo $emple->__toString();
