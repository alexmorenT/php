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

    public static function toHTML(Persona $p)
    {
        return "<strong>Me llamo: " . $p->getNombre() . " " . $p->getApellido();
    }

    public function __toString(): string
    {
        return "Nombre: " . $this->nombre .  " " . $this->apellido . " Edad: "
            . $this->edad;
    }
}

abstract class Trabajador extends Persona
{
    private array $telefonos;

    public function __construct(string $nombre, string $apellido, int $edad)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->telefonos = [];
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

    abstract public function calcularSueldo();

    abstract public function debePagarImpuestos();
}

class Gerente extends Trabajador
{

    private int $salario;
    public static $sueldoTope = 1999;

    public function __construct(string $nombre, string $apellido, int $edad, int $salario)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->salario = $salario;
    }

    public function calcularSueldo(): int
    {
        return $this->salario + $this->salario * $this->getEdad() / 100;
    }

    public function debePagarImpuestos()
    {
        if ($this->calcularSueldo() > self::$sueldoTope && $this->getEdad() >= 21) {
            return true;
        } else {
            return false;
        }
    }
}

class Empleado extends Trabajador
{
    private static $sueldoTope = 3333;
    private float $sueldo;
    public int $horasTrabajadas;
    public int $precioPorHora;
    private array $telefonos = [];

    public function __construct(
        string $nombre,
        string $apellido,
        int $edad,
        float $sueldo,
        int $horasTrabajadas = 0,
        int $precioPorHora = 0
    ) {
        parent::__construct($nombre, $apellido, $edad);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
        $this->sueldo = $this->calcularSueldo();
    }

    public function setSueldoTope(int $tope)
    {
        self::$sueldoTope = $tope;
    }

    public function setSueldo(int $sueldo)
    {
        $this->sueldo = $sueldo;
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

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > self::$sueldoTope && $this->getEdad() >= 21) {
            return true;
        } else {
            return false;
        }
    }

    public function calcularSueldo(): int
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    private function telefonos(): string
    {
        $telefonos = $this->getTelefonos();
        $text = "";

        if (!empty($telefonos)) {
            $text .= "<ul>";
            foreach ($telefonos as $tel) {
                $text .= "<li>" . $tel . "</li>";
            }
            $text .= "</ul>";
        } else {
            echo "No se han encontrado números de teléfono";
        }
        return $text;
    }


    public static function toHTML(Persona $emp): string
    {
        if ($emp instanceof Empleado) {
            return Persona::toHTML($emp) . "<strong>, gano: </strong> "
                . $emp->getSueldo() . " y tengo estos contactos: " . $emp->telefonos($emp);
        }
        return Persona::toHTML($emp);
    }
}

$empleado1 = new Empleado("Laura", "Pérez", 30, 25, 160, 15); // 160h * 15€/h = 2400€
$empleado2 = new Empleado("Carlos", "García", 30, 19, 100, 10); // 1000€

$empleado1->anyadirTelefono(666111222);
$empleado1->anyadirTelefono(666333444);

// Crear gerentes
$gerente1 = new Gerente("María", "López", 40, 2000);
$gerente2 = new Gerente("Pedro", "Sánchez", 30, 1500);

// Mostrar datos
echo "<h2>=== Empleados ===</h2>";
echo Empleado::toHTML($empleado1);
echo "<p>¿Debe pagar impuestos? " . ($empleado1->debePagarImpuestos() ? "Sí" : "No") . "</p>";
echo "<hr>";
echo Empleado::toHTML($empleado2);
echo "<p>¿Debe pagar impuestos? " . ($empleado2->debePagarImpuestos() ? "Sí" : "No") . "</p>";

echo "<h2>=== Gerentes ===</h2>";
echo "<p>{$gerente1}</p>";
echo "<p>Sueldo calculado: {$gerente1->calcularSueldo()}</p>";
echo "<p>¿Debe pagar impuestos? " . ($gerente1->debePagarImpuestos() ? "Sí" : "No") . "</p>";
echo "<hr>";
echo "<p>{$gerente2}</p>";
echo "<p>Sueldo calculado: {$gerente2->calcularSueldo()}</p>";
echo "<p>¿Debe pagar impuestos? " . ($gerente2->debePagarImpuestos() ? "Sí" : "No") . "</p>";
