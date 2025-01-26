<?php
abstract class Miembro {
    protected int $id;
    protected string $name;
    protected string $apellidos;
    protected string $email;

     function __construct(int $id, string $name, string $apellidos, string $email) {
        $this->id = $id;
        $this->name = $name;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($name) {
        $this->name = $name;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


    public function __toString() {
        return "ID: {$this->id}, Nombre: {$this->name}, Apellidos: {$this->apellidos}, Email: {$this->email}";
    }
}
?>