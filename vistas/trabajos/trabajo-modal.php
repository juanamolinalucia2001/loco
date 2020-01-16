<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
<body>
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content bg-modal">
      <div class="modal-header">
      <h5 class="modal-title" id="modalLabel">Agregar empresa</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div>
 <!--FORMULARIO PADRE-->
		<form class="form-father">
<!--FILA NUMERO 1-->
        <div class="form-row justify-content-center">
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
        </div></br>
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
	              <div class="form-row justify-content-center">
	                <div class="col-md-3">
	                  <label>Solado</label>
	                  <input type="text" class="form-control" placeholder="Solado" required>
	                </div>

	                <div class="col-md-3">
	                  <label>Aclaracion solado</label>
	                  <input type="text" class="form-control" placeholder="Aclaracion" required>
	                </div>

	                <div class="col-md-3">
	                  <label>Cant solado presupuestado</label>
	                  <input type="number" class="form-control" placeholder="Presupuestado" required>
	                </div>

	                <div class="col-md-3">
	                  <label>Cant solado reales</label>
	                  <input type="number" class="form-control" placeholder="Reales" required>
	                </div>
	            </div>
<!----------------------FILA NUMERO 2----------------------------->
	             <div class="form-row justify-content-center">
	                <div class="col">
	                  <label>Metros presupuestados</label>
	                  <input type="number" class="form-control" placeholder="Presupuestados" required>
	                </div>

	                <div class="col">
                  		<label>Metros reales</label>
                  		<input type="number" class="form-control" placeholder="Reales" required>
                	</div>

                	<div class="col">
	                  <label>Metros diferencia</label>
	                  <input type="number" class="form-control" placeholder="Diferencia" required>
	                </div>

	                <div class="col">
	                  <label>Largo</label>
	                  <input type="number" class="form-control" placeholder="Largo" required>
	                </div>

	                <div class="col">
	                  <label>Ancho</label>
	                  <input type="number" class="form-control" placeholder="Ancho" required>
	                </div>
	            </div>

<!--------------------------FILA NUMERO 3---------------------------->
             	<div class="form-row justify-content-center">
                	<div class="col">
                  		<label>Observaciones CLIENTE</label>
                  		<textarea class="form-control" placeholder="Observaciones del cliente..."></textarea>
                	</div>

                	<div class="col">
                  		<label>Observaciones PROPIAS</label>
                  		<textarea class="form-control" placeholder="Observaciones del equipo..."></textarea>
                	</div>
              	</div>
	        </div></br>

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
	          </div> </br>                 	


		<!--BOTONES DE FINAL DE FORMULARIO-->
		      <div class="form-row justify-content-center">
		        <div class="col-md-1">
		          	<button type="button" class="close btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
		        </div>


		        <div class="col-md-1">
		          <button class="btn btn-primary" type="submit">Guardar</button>
		        </div>
		      </div></br>
			</div>
		</div>
		</form>	
    </div>
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