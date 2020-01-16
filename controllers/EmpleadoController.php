<?php
//require_once 'modelos/empleados.php';
class EmpleadoController{
    public function index() {
        echo 'controladore empleados del sistema, accion index';
    }
    
    public function cargar() {
        require_once 'vistas/empleados/equipo-modal.php';
    }
    public function guardar(){
            
        }
        public function agregar_equipo(){
            echo'agregar equipo';
        }
    }
    
