<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
  <body>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content bg-modal">
        <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Exportar trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div>
          <form action="" method="">
            <div class="form-row justify-content-center">
              <div class="col-lg-4">
                <label>Seleccione empresa</label>
                <select name="empresa" class="form-control">
                   <option selected="">Cosugas SA</option>
                  <option>Inarteco SA</option>
                   <option>CIMA SA</option>
                    <option>ARGENCOBRA</option>
                  <option>URBASER</option>
                </select>
              </div>
              <div class="col-lg-3">
                <label>Fecha desde</label>
                <input type="date" class="form-control" required>
              </div>
              <div class="col-lg-3">
                <label>Fecha fin</label>
                <input type="date" class="form-control" required>
              </div>
            </div>
            <div class="form-row justify-content-center">
              <div class="col-lg-10">
                <label>Seleccione el estado</label>
                <select name="estado" class="custom-select" required>
                  <option selected>PENDIENTE</option>
                  <option>PROGRAMADA</option>
                  <option>FINALIZADA</option>
                  <option>PRIORIDAD</option>
                </select>
              </div>
            </div></br>
            <div class="form-row justify-content-end">
              <div class="col-lg-6">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Descargar</button>
              </div>
            </div></br>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>