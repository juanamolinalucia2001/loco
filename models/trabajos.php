<?php

class Trabajo{
    private $id;
    private $odt;
    private $T;
    private $numero;
    private $L;
    private $medida;
    private $tipo;
    private $cantidad;
    private $dist;
    private $observaciones;
    private $vto_permiso;
    private $entre_calle;
    private $eqM;
    private $id_empresa;
    
        public function __construct(){
        $this->db= Database::connect();  
    }
    function getId() {
        return $this->id;
    }

    function getOdt() {
        return $this->odt;
    }

    function getT() {
        return $this->T;
    }

    function getNumero() {
        return $this->numero;
    }

    function getL() {
        return $this->L;
    }

    function getMedida() {
        return $this->medida;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getDist() {
        return $this->dist;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function getVto_permiso() {
        return $this->vto_permiso;
    }

    function getEntre_calle() {
        return $this->entre_calle;
    }

    function getEqM() {
        return $this->eqM;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setOdt($odt) {
        $this->odt = $odt;
    }

    function setT($T) {
        $this->T = $T;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setL($L) {
        $this->L = $L;
    }

    function setMedida($medida) {
        $this->medida = $medida;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setDist($dist) {
        $this->dist = $dist;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    function setVto_permiso($vto_permiso) {
        $this->vto_permiso = $vto_permiso;
    }

    function setEntre_calle($entre_calle) {
        $this->entre_calle = $entre_calle;
    }

    function setEqM($eqM) {
        $this->eqM = $eqM;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }
    
    public function getAll($limit) {
        $trabajo= $this->db->query("SELECT * FROM trabajo ORDER BY id ASC LIMIT $limit");//muestra los ultimos 30 trabajos
        return $trabajo;
        
    }
     public function guardar(){
    $sql= "INSERT INTO usuarios VALUES(NULL,'{$this->getOdt()}','{$this->getT()}','{$this->getCalle()}','{$this->getNumero()}'"
    . ",'{$this->getL()}','{$this->getMedida()}','{$this->getTipo()}','{$this->getCantidad()}','{$this->getDist()}','{$this->getObservaciones()}',"
    . "'{$this->getVto_permiso()}','{$this->getEntre_calle()}','{$this->getEqM()}','{$this->getId_empresa()}',null);";

    $guardar = $this->db->query($sql);
    
    
    $result = false;
    if($guardar){
        $result=true;
        
    } else {
        
    }
}
    

}