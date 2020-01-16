<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
<body>
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-modal">
      <div class="modal-header">
      <h5 class="modal-title" id="modalLabel">Agregar trabajo al mapa</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <form action=""></br>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>ODT</label>
            <input type="text" name="odt" class="form-control" placeholder="ODT" required>
          </div>
          <div class="col-lg-5">
            <label>Latitud</label>
            <input type="number" name="latitud" class="form-control" placeholder="Latitud" required>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Longitud</label>
            <input type="number" name="longitud" class="form-control" placeholder="Longitud" required>
          </div>
          <div class="col-lg-5">
            <label>Estado del trabajo</label>
            <select name="estado" class="custom-select" required>
              <option>Prioridad</option>
              <option selected>Programado</option>
              <option>Finalizado</option>
              <option>Pendiente</option>
            </select>
          </div>
          </div></br>
          <div class="form-row justify-content-end">
            <div class="col-lg-6">
            <button class="btn btn-secondary" type="button" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
            <button class="btn btn-primary" type="submit">Guardar</button>
          </div>
        </div></br>
      </form>
    </div>
  </div>
</body>
</html>