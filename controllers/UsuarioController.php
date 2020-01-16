
<?php
require_once "models/usuario.php";
class UsuarioController{
    public function index() {
        require_once 'vistas/usuario/login.php';
    }
    
    public function login() {
        if(isset($_POST));
        //IDENTIFICAR USUARIOS
        $user=new User();
        $user->setUsuario($_POST['usuario']);
        $user->setClave($_POST['clave']);
       $identity = $user->login();
        //crear una sesion
        var_dump($identity);
        die();
    }
    public function cerrar(){
            echo'cerrar sesion';
        }
    }
    
    


