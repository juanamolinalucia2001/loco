<?php
//require_once 'modelos/empresa.php';
class EmpresaController{
    public function index(){
        echo 'controladore empresa, accion index';
    }
    
    public function agregar() {
        require_once 'vistas/empresas/agenda.php';
    }
    public function guardar(){
            echo'funcion para guardar los datos';
        }
    }
    