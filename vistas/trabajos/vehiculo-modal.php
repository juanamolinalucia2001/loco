<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
<body>
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-modal">
      <div class="modal-header">
      <h5 class="modal-title" id="modalLabel">Agregar vehiculo</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <form action=""></br>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Marca</label>
            <input type="text" name="vehiculo-marca" class="form-control" placeholder="Marca" required>
          </div>
          <div class="col-lg-5">
            <label>Modelo</label>
            <input type="text" name="vehiculo-modelo" class="form-control" placeholder="Modelo" required>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Patente</label>
            <input type="number" name="vehiculo-patente" class="form-control" placeholder="Patente" required>
          </div>
          <div class="col-lg-5">
            <label>Estado</label>
            <select name="vehiculo-estado" class="form-control" required>
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