<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
<body>
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-modal">
      <div class="modal-header">
      <h5 class="modal-title" id="modalLabel">Agregar material</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <form action="">
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Nombre del material</label>
            <input type="text" name="material-name" class="form-control" placeholder="Nombre" required>
          </div>
          <div class="col-lg-5">
            <label>Ancho en mts</label>
            <input type="number" name="material-ancho" class="form-control" placeholder="Ancho" required>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Alto en mts</label>
            <input type="number" name="material-alto" class="form-control" placeholder="Alto" required>
          </div>
          <div class="col-lg-5">
            <label>Habilitado</label>
            <select name="material-estado" class="form-control" required>
              <option selected>SI</option>
              <option>NO</option>
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