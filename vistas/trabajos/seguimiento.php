<!DOCTYPE html>
<html lang="es">
    <?php
        require_once "../includes/header.php";
    ?>
    <head>
        <title>Seguimiento</title>
    </head>
    
    <body>
        <div class="navbar navbar-light bg-light">
          <!--TITULO DE LA VISTA-->
          <h2><a class="navbar-brand">Seguimientos</a></h2>
          <form class="form-row justify-content-end">
            <!--FUTURO BUSCADOR A TIEMPO REAL-->
            <div class="col-lg-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            </div>
            <!--BOTON QUE DESPLAZA LA TABLA PARA FILTRAR LOS SEGUIMIENTOS-->
            <div class="col-lg-auto">
              <a class="btn btn-primary" data-toggle="collapse" href="#reclamosForm" role="button" aria-expanded="false" aria-controls="reclamosForm">Agregar reclamo</a>
            </div>
          </form>
        </div> 

        <!--FORMULARIO DE RECLAMO-->
        <div class="collapse multi-collapse container" id="reclamosForm">
          <?php require_once "forms/seguimiento-form.php"; ?>
        </div>



        <!--TABLA DE RECLAMOS-->
        <div>
          <?php require_once "tablas/trabajo-tabla.php"; ?>
        </div>


    </body>
</html>