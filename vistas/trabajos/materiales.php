<!DOCTYPE html>
<html lang="es">
    <?php
        require_once "../includes/header.php";
    ?>
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Materiales</title>
        <link rel="stylesheet" type="text/css" href="../css/libreria.css">
    </head>
    
    <body>
        <div class="navbar navbar-light bg-light">
          <!--TITULO DE LA VISTA-->
          <h2><a class="navbar-brand">Materiales</a></h2>
          <form class="form-row justify-content-end">
            <!--FUTURO BUSCADOR A TIEMPO REAL-->
            <div class="col-lg-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            </div>
            <!--BOTON QUE DESPLAZA LA TABLA PARA FILTRAR LOS SEGUIMIENTOS-->
            <div class="col-lg-auto">
              <a class="btn btn-primary" data-toggle="modal" href="#materialModal" role="button" aria-expanded="false" aria-controls="materialModal">Agregar Material</a>
            </div>
          </form>
        </div> 
        <div class="modal fade" id="materialModal">
          <?php require_once "../includes/modals/material-modal.php"; ?>
        </div>

        <!--TABLA DE MATERIALES-->
        <div>
          <?php require_once "tablas/material-tabla.php"; ?>
        </div>


    </body>
</html>