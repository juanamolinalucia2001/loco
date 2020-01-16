<?php

class User extends Database{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $usuario;
    private $nivel;
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

 function getEmail() {
    return $this->email;
}

 function getClave() {
    return $this->clave;
}
 function getUsuario() {
    return $this->usuario;
}
 function getNivel() {
    return $this->nivel;
}



 function setId($id) {
    $this->id = $id;
}

 function setNombre($nombre) {
    $this->nombre = $this->db->real_escape_string($nombre);
}

 function setApellido($apellido) {
    $this->apellido = $this->db->real_escape_string($apellido);
}

 function setEmail($email) {
    $this->email = $this->db->real_escape_string($email);
}

 function setClave($clave) {
    $this->clave=$this->db->real_escape_string($clave);
}
function setUsuario($usuario) {
    $this->usuario = $usuario;
}
 function setNivel($nivel) {
    $this->nivel = $nivel;
}

 
/*public function guardar(){
    $sql= "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}',,'{$this->getUsuario()}','user');";

    $guardar = $this->db->query($sql);
    
    
    $result = false;
    if($guardar){
        $result=true;
        
    } else {
        
    }
}*/
public function login(){
    $result=false;
    $user= $this->getUsuario();
    $clave= $this->getclave();
    $sql="SELECT * FROM usuario WHERE usuario='$user' clave='$clave'";
    $login=$this->db->query($sql);
    
    if($login && $login->num_rows == 1){
        $user = $login->fetch_object();
        
        //verifica contraseña$
   
   
        if($user){
            $result=$user;
            
    }else{
        return $result;
    }
    
}
}

}