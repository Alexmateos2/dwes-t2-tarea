<?php
require_once 'Miembro.php';
class Profesor extends Miembro {
    private bool $titular = false;
    private string $asignatura;
    
    public function __construct(int $id, string $name, string $apellidos, string $email,string $asignatura)  {

        parent::__construct($id, $name, $apellidos, $email);
        $this->asignatura = $asignatura;
    }
    public static function crearProfesoresDeMuestra(){
        $profesores = [
            new Profesor(1,"Steve", "Wozniak", "steve@apple.com", "DWES"),
            new Profesor(2,"Ada", "Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3,"Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4,"Rasmus", "Lerdoff", "rasmus@php.com", "DAW"),
        ];
        return $profesores;
    }
}

?>