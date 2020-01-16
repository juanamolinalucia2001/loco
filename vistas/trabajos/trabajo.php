<!DOCTYPE html>
<html lang="es">
    <?php
      require_once "../includes/header.php";
    ?>
    <head>
      <title>Trabajos</title>
      <link rel="stylesheet" href="../css/trabajo.css" >
    </head>
  <body>
    <!--CABECERA DE LA PAGINA-->
    <div class="navbar navbar-light bg-light">
      <!--TITULO DE LA VISTA-->
      <h2><a class="navbar-brand">Trabajos</a></h2>
      <div class="form-row justify-content-end">
        <!--FUTURO BUSCADOR A TIEMPO REAL-->
        <div class="col-lg-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        </div>
        <!--BOTON QUE DESPLAZA LA TABLA PARA FILTRAR LOS TRABAJOS-->
        <div class="col-lg-auto">
          <a class="btn btn-primary" data-toggle="collapse" href="#tablaFiltrar" role="button" aria-expanded="false" aria-controls="tablaFiltrar">Filtrar</a>
        </div>
        <!--BOTON QUE DESPLAZA EL FORMULARIO DE EDICION-->
        <div class="col-lg-auto">
            <a class="btn btn-primary" data-toggle="collapse" href="#formAgregar" role="button" aria-expanded="false" aria-controls="formAgregar">Agregar</a>
        </div>
      </div>
    </div>  
    
    <!--TABLA QUE SE DESPLIEGA PARA FILTRAR-->
    <div class="collapse multi-collapse container-center" id="tablaFiltrar">
      <?php
        require_once "tablas/filtrar-trabajo-tabla.php";
      ?>
    </div>

    <!--DESPLIEGUE DEL FORMULARIO DE EDICION O AGREGAR-->
    <section class="collapse multi-collapse" id="formAgregar">
      <!--FORMULARIO PADRE-->
      <form class="form-father"></br>
        <!--FILA NUMERO 1-->
        <div class="form-row justify-content-md-center">
          <div class="col-md-2">
            <label>Codigo</label>
            <input class="form-control" type="number" name="codigo" placeholder="Codigo" required>
          </div>
          <div class="col-md-2">
            <label>ODT</label>
            <input class="form-control" type="text" name="odt" placeholder="ODT" required>
          </div>
          <div class="col-md-2">
            <label>Cliente</label>
            <input class="form-control" type="text" name="cliente" placeholder="Cliente" required>
          </div>
          <div class="col-md-2">
            <label>Calle</label>
            <input class="form-control" type="text" name="calle" placeholder="Calle" required>
          </div>
          <div class="col-md-2">
            <label>Altura</label>
            <input class="form-control" type="number" name="altura" placeholder="Altura" required>
          </div>
        </div>
        <!--FILA NUMERO 2-->
        <div class="form-row justify-content-md-center">
          <div class="col-md-2">
            <label>Entrecalle1</label>
            <input class="form-control" type="text" name="entrecalle1" placeholder="Entrecalle 1" required>
          </div>
          <div class="col-md-2">
            <label>Entrecalle2</label>
            <input class="form-control" type="text" name="entrecalle2" placeholder="Entrecalle 2" required>
          </div>
          <div class="col-md-3">
            <label>Barrio</label>
            <input class="form-control" type="text" name="barrio" placeholder="Barrio" required>
          </div>
          <div class="col-md-3">
            <label>Localidad</label>
            <input class="form-control" type="text" name="localidad" placeholder="Localidad" required>
          </div>
        </div>
        <!--FILA NUMERO 3-->
        <div class="form-row justify-content-md-center">
          <div class="col-md-3">
            <label>Partido</label>
            <input class="form-control" type="text" name="entrecalle1" placeholder="Partido" required>
          </div>
          <div class="col-md-3">
            <label>Provincia</label>
            <input class="form-control" type="text" name="entrecalle2" placeholder="Provincia" required>
          </div>

          <div class="col-md-2">
            <label>Estado</label>
            <select class="custom-select" required>
              <option selected>PENDIENTE</option>
              <option>PROGRAMADA</option>
              <option>FINALIZADA</option>
              <option>PRIORIDAD</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>No se lee</label>
            <input class="form-control" type="text" name="" placeholder="?????" required>
          </div>
        </div>
      </br>
      <!--FORMULARIO HIJO-->
      <div class="container bg-white form-child">
        <!--PESTAÑAS PARA DESPLIEGUE DE FORMULARIOS-->
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-solado-tab" data-toggle="tab" href="#nav-solado" role="tab" aria-controls="nav-solado" aria-selected="true">Solado</a>
            <a class="nav-item nav-link" id="nav-seguimiento-tab" data-toggle="tab" href="#nav-seguimiento" role="tab" aria-controls="nav-seguimiento" aria-selected="false">Seguimiento/Fechas</a>
            <a class="nav-item nav-link" id="nav-equipo-tab" data-toggle="tab" href="#nav-equipo" role="tab" aria-controls="nav-equipo" aria-selected="false">Equipo</a>
            <a class="nav-item nav-link" id="nav-foto-tab" data-toggle="tab" href="#nav-foto" role="tab" aria-controls="nav-foto" aria-selected="false">Fotografias</a>
          </div>
        </nav>
        <!--DESPLIEGUE DE FORMULARIOS-->
        <div class="tab-content container" id="nav-tabContent">
          <!--PESTAÑA NUMERO 1-->
          <div class="tab-pane fade show active" id="nav-solado" role="tabpanel" aria-labelledby="nav-solado-tab">
              <!--FILA NUMERO 1-->
              <div class="form-row justify-content-md-center">
                <div class="col-md-3">
                  <label for="validationCustom01">Solado</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Solado" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom02">Aclaracion solado</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Aclaracion" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom02">Cant solado presupuestado</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="Presupuestado" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom02">Cant solado reales</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="Reales" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
              </div>
              <!--FILA NUMERO 2-->
              <div class="form-row justify-content-md-center">
                <div class="col">
                  <label for="validationCustom02">Metros presupuestados</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="Presupuestados" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col">
                  <label for="validationCustom02">Metros reales</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="Reales" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col">
                  <label for="validationCustom05">Metros diferencia</label>
                  <input type="number" class="form-control" id="validationCustom05" placeholder="Diferencia" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col">
                  <label for="validationCustom02">Largo</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="Largo" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col">
                  <label for="validationCustom02">Ancho</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="Ancho" required>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
              </div>
              <!--FILA NUMERO 3-->
              <div class="form-row justify-content-md-center">
                <div class="col">
                  <label for="validationCustom02">Observaciones CLIENTE</label>
                  <textarea class="form-control" id="validationCustom02" placeholder="Observaciones del cliente..."></textarea>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
                <div class="col">
                  <label>Observaciones PROPIAS</label>
                  <textarea class="form-control" id="validationCustom02" placeholder="Observaciones del equipo..."></textarea>
                  <div class="valid-feedback">
                    Ok!
                  </div>
                </div>
              </div></br>
          </div>
          <!--PESTAÑA NUMERO 2-->
          <div class="tab-pane fade" id="nav-seguimiento" role="tabpanel" aria-labelledby="nav-seguimiento-tab">
            SIN CONTENIDO
          </div>
          <!--PESTAÑA NUMERO 3-->
          <div class="tab-pane fade" id="nav-equipo" role="tabpanel" aria-labelledby="nav-equipo-tab">
            SIN CONTENIDO
          </div>
          <!--PESTAÑA NUMERO 4-->
          <div class="tab-pane fade" id="nav-foto" role="tabpanel" aria-labelledby="nav-foto-tab">
            <div class="form-row justify-content-center">
              <div class="col-lg-12">
                <label>Cargar Fotografias:</label>
                <input class="form-control" type="file" name="imagen">
              </div>
              <div class="col-lg-auto">
                <label>Fecha de creacion</label><br>
                <label class="bg-label">
                  <script type="text/javascript">
                    var fecha = new Date();
                    var mes = fecha.getMonth()+1;
                    document.write(fecha.getDate(),'/'+mes+'/'+fecha.getFullYear());
                  </script>
                </label>
              </div>
              <div class="col-lg-auto">
                <label>Fecha de modificacion</label><br>
                <label class="bg-label">
                  <script type="text/javascript">
                    var fecha = new Date();
                    var mes = fecha.getMonth()+1;
                    document.write(fecha.getDate(),'/'+mes+'/'+fecha.getFullYear());
                  </script>
                </label>
              </div>
              <div class="col-lg-auto">
                <label>Usuario</label><br>
                <label class="bg-label">User</label>
              </div>
              <div class="col-lg-auto">
                <label>Archivo lote</label><br>
                <label class="bg-label">Lorem ipsum dolor sit amet</label>
              </div>
              <div class="col">
                <label>Editable</label>
                <input class="form-control" type="text"></br>
              </div>
            </div>
          </div>
        </div>
      </div></br>
      <!--BOTONES DE FINAL DE FORMULARIO-->
      <div class="form-row justify-content-md-center">
        <div class="col-md-1">
          <button class="btn btn-primary" data-toggle="collapse" href="#formAgregar" aria-expanded="false" aria-controls="formAgregar">Cancelar</button>
        </div>
        <div class="col-md-1">
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
      </div></br>
      </form>
    </section>
    
    
    
    <div>
      <?php require_once "tablas/trabajo-tabla.php"; ?>
    </div>


<!--ACTIVE AUTOMATICO-->
    <script>
      $('#myTab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
      })
    </script>
    
  </body>
</html>