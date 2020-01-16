<?php

class Empleado{
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $cargo;
    private $celular;
    private $email;
    
    
    public function __construct(){
        $this->db= Database::connect();  
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    



}