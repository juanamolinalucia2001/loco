<!DOCTYPE html>
<html>
	<?php
      require_once "../includes/header.php";
  ?>
  <head>
  	<title>Vehiculos</title>
  </head>
  <body>
	 <div class="navbar navbar-light bg-light">
      <!--TITULO DE LA VISTA-->
      <h2><a class="navbar-brand">Vehiculos</a></h2>
      <div class="form-row justify-content-end">
        <!--FUTURO BUSCADOR A TIEMPO REAL-->
        <div class="col-lg-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        </div>
        <!--BOTON QUE DESPLAZA EL MODAL PARA AGREGAR EUIPOS-->
        <div class="col-lg-auto">
          <a class="btn btn-primary" data-toggle="modal" href="#vehiculoModal" role="button" aria-expanded="false" aria-controls="vehiculoModal">Agregar vehiculo</a>
        </div>
      </div>
    </div>


    <!--MODAL CON FORMULARIO PARA AGREGAR EMPRESA-->
    <div class="modal fade" id="vehiculoModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
      <?php
        require_once "../includes/modals/vehiculo-modal.php";
      ?>
    </div>


    <!--TRABLA DE EMPRESAS-->
    <div class="form-group container-center">
      <table class="table table-bordered table-primary table-hover">
        <thead>
          <th scope="col">Posicion</th>
            <th scope="col">Titulo</th>
            <th scope="col">Habilitado</th>
            <th scope="col">Acciones</th> 
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mercedes 122</td>
            <td>SI</td>
            <td>
              <button class="btn btn-primary">EDITAR</button>
              <button class="btn btn-danger">ELIMINAR</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ejemplo</td>
            <td>NO</td>
            <td>
              <button class="btn btn-primary">EDITAR</button>
              <button class="btn btn-danger">ELIMINAR</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ejemplo</td>
            <td>NO</td>
            <td>
              <button class="btn btn-primary">EDITAR</button>
              <button class="btn btn-danger">ELIMINAR</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ejemplo</td>
            <td>NO</td>
            <td>
              <button class="btn btn-primary">EDITAR</button>
              <button class="btn btn-danger">ELIMINAR</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ejemplo</td>
            <td>NO</td>
            <td>
              <button class="btn btn-primary">EDITAR</button>
              <button class="btn btn-danger">ELIMINAR</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ejemplo</td>
            <td>NO</td>
            <td>
              <button class="btn btn-primary">EDITAR</button>
              <button class="btn btn-danger">ELIMINAR</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>