<!DOCTYPE html>
<html lang="es">
     <?php
    require_once "header.php";
    ?>
    <head>
    <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Inicio</title>
        <link rel="stylesheet" href="<?=puta_vos?>/assets/css/escritorio.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    </head>
    <body>
    <link />
<div class="menuicon">
  <a href="#">
    <div class=""></div>
    <div class="title"><img src="<?=puta_vos?>assets/img/importar.png" width="30%" height="30%"><br/><button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
  Importar trabajo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <h5>seleccione empresa que desea importar trabajo</h5>
            <select name="empresa" class="form-control">

      <option>ejemplo1</option>

      <option >ejemplo2</option>

      <option>ejemplo3</option>

    </select>
           <h5>seleccione documento excel</h5>
          <td><input name="archivo"  type="file" class="form-control" ></td>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div></div>
  </a>
  <a href="#">
    <div class=""></div>
    <div class="title"><img src="img/map.png" width="40%" height="40%"><br/>Ver mapa</div>
  </a>
  <a href="#">
    <div class=""></div>
    <div class="title"><img src="img/ruta.png" width="40%" height="40%"><br/>Hojas de Ruta</div>
  </a>
  <a href="#">
    <div class=""></div>
    <div class="title"><img src="img/reclamo.png" width="45%" height="45%"><br/>Reclamos</div>
  </a>
  <a href="#">
    <div class=""></div>
    <div class="title"><img src="img/reportes.png" width="50%" height="50%"><br/>Reportes</div>
  </a>
      <a href="#">
    <div class=""></div>
    <div class="title"><img src="img/rut.png" width="40%" height="40%"><br/>Empleados</div>
  </a>
</div>
    </body>
</html>