<?php

require_once 'Miembro.php';
require_once 'Asignatura.php'; 

class Alumno extends Miembro
{
    private int $edad;
    private array $asignaturas = [];
    private bool $cursoAbonado = false;

    
    public function __construct(int $id, string $name, string $apellidos, string $email, int $edad)
    {

        parent::__construct($id, $name, $apellidos, $email);


        $this->edad = $edad;
    }
  
    public function abonarCurso(): void
    {
        $this->cursoAbonado = true;
    }


    public function matricularseEnAsignatura(string $asignatura): void
    {
        if (!in_array($asignatura, $this->asignaturas)) {
            $this->asignaturas[] = $asignatura;
        } 
    }
    public function getAsignaturas(): array
    {
        return $this->asignaturas;
    }


    public function getEdad(): int
    {
        return $this->edad;
    }

    
    public static function crearAlumnosDeMuestra(): array
    {
        $alumnos = [
            new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
            new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
            new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
            new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
            new Alumno(8, "Jorge", "Perez", "jorge.perez@email.com", 22),
            new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
            new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),
        ];

        $asignaturas = Asignatura::crearAsignaturaDeMuestra();
        $alumnos[0]->matricularseEnAsignatura($asignaturas[0]->getName());
        $alumnos[1]->matricularseEnAsignatura($asignaturas[0]->getName());
        $alumnos[1]->matricularseEnAsignatura($asignaturas[1]->getName());
        $alumnos[2]->matricularseEnAsignatura($asignaturas[0]->getName());
        $alumnos[2]->matricularseEnAsignatura($asignaturas[2]->getName());
        $alumnos[3]->matricularseEnAsignatura($asignaturas[0]->getName());
        $alumnos[4]->matricularseEnAsignatura($asignaturas[0]->getName());
        $alumnos[4]->matricularseEnAsignatura($asignaturas[1]->getName());
        $alumnos[4]->matricularseEnAsignatura($asignaturas[2]->getName());
        $alumnos[5]->matricularseEnAsignatura($asignaturas[0]->getName());
        $alumnos[6]->matricularseEnAsignatura($asignaturas[1]->getName());
        $alumnos[6]->matricularseEnAsignatura($asignaturas[1]->getName());
        $alumnos[7]->matricularseEnAsignatura($asignaturas[2]->getName());
        $alumnos[8]->matricularseEnAsignatura($asignaturas[1]->getName());
        $alumnos[9]->matricularseEnAsignatura($asignaturas[0]->getName());


        return $alumnos;
    }
}
