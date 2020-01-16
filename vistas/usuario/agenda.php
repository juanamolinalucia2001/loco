<!DOCTYPE html>
<html lang="es">
    <?php
      require_once "../includes/header.php";
    ?>
    <head>
      <title>Agenda</title>
      <link rel="stylesheet" href="../css/trabajo.css" >
    </head>
  <body>
  	<div class="navbar navbar-light bg-light">
      <!--TITULO DE LA VISTA-->
      <h2><a class="navbar-brand">Agenda</a></h2>
      <div class="form-row justify-content-end">
        <!--FUTURO BUSCADOR A TIEMPO REAL-->
        <div class="col-lg-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        </div>
        <!--BOTON QUE DESPLAZA EL MODAL PARA AGREGAR EMPRESAS-->
        <div class="col-lg-auto">
          <a class="btn btn-primary" data-toggle="modal" href="#agendaModal" role="button" aria-expanded="false" aria-controls="agendaModal">Agregar empresa</a>
        </div>
      </div>
    </div>


    <!--MODAL CON FORMULARIO PARA AGREGAR EMPRESA-->
    <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" >
      <?php
        require_once "../includes/modals/agenda-modal.php";
      ?>
    </div>

    <!--TRABLA DE EMPRESAS-->
    <div class="form-group container-center">
        <table class="table table-striped table-primary table-hover">
          <thead>
            <tr>
              
              <th scope="col">Nombre empresa</th>
              <th scope="col">Cuit</th>
              <th scope="col">Telefono</th>
              <th scope="col">E-mail</th>
              <th scope="col">Ejemplo</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Cosugas</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              
            </tr>
            <tr>
          
              <td>xxx</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
            </tr>
            <tr>
              
              <td>xxx</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
            </tr>
                <tr>
              
              <td>xxx</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
            </tr>
                <tr>
              
              <td>xxx</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
            </tr>
                <tr>
              
              <td>xxx</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
              <td>ejemplo</td>
            </tr>
          </tbody>
        </table>
      </div>
  </body>
</html>