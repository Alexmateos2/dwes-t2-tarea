<?php
class Asignatura
{
    private int $id;
    private string $name;
    private string $creditos;
    public function __construct(int $id, string $name, string $creditos)
    {
        $this->id = $id;
        $this->name = $name;
        $this->creditos = $creditos;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getId(): int{
        return $this->id;
    }
    public function getCreditos(): string
    {
        return $this->creditos;
    }
    public static function crearAsignaturaDeMuestra()
    {
        $asignaturas = [
            new Asignatura(1, "DWES", "7 créditos"),
            new Asignatura(2, "DWEC", "6 créditos"),
            new Asignatura(3, "DIW", "4 créditos"),
            new Asignatura(4, "DAW", "4 créditos"),
        ];

        return $asignaturas;
    }
}
