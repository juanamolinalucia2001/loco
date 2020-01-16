<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
<body>
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-modal">
      <div class="modal-header">
      <h5 class="modal-title" id="modalLabel">Agregar empresa</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <form action=""></br>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Nombre de la empresa</label>
            <input type="text" name="empresa-name" class="form-control" placeholder="Nombre" required>
          </div>
          <div class="col-lg-5">
            <label>Cuit</label>
            <input type="number" name="empresa-cuit" class="form-control" placeholder="Cuit" required>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="col-lg-5">
            <label>Telefono</label>
            <input type="number" name="empresa-tel" class="form-control" placeholder="Telefono" required>
          </div>
          <div class="col-lg-5">
            <label>E-mail</label>
            <input type="email" name="empresa-email" class="form-control" placeholder="E-mail" required>
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