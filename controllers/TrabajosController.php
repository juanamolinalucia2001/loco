
<?php
require_once 'modelos/trabajos.php';
class TrabajosController{
    public function index() {
        $trabajo= new Trabajo();
        $trabajo->getAll(30);
       
    }
    
    public function importar() {
        echo 'funcion de importar EXCEL vista(model-import)';
        
    }
    public function exportar(){
            echo'Exportar trabajo';
        }
    
    public function agregar() {
        require_once 'vistas/trabajo/';
    }
    public function guardar(){
        if(isset($_POST)){
            $trabajo=new Trabajo();
            $trabajo->setOdt($_POST['odt']);
            $trabajo->setT($_POST['T']);
            $trabajo->setCalle($_POST['calle']);
            $trabajo->setNumero($_POST['numero']);
            $trabajo->setL($_POST['L']);
            $trabajo->setMedida($_POST['medida']);
            $trabajo->setTipo($_POST['tipo']);
            $trabajo->setCantidad($_POST['cantidad']);
            $trabajo->setDist($_POST['dist']);
            $trabajo->setObservaciones($_POST['observaciones']);
            $trabajo->setVto_permiso($_POST['vto_permiso']);
            $trabajo->setEntre_calle($_POST['entre_calle']);
            $trabajo->setEqM($_POST['eqM']);
            $trabajo->id_empresa($_POST['id_empresa']);
            
            var_dump($trabajo);
            
        }
    }}

