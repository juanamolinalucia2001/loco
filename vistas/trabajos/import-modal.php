<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="..//css/modals.css">
</head>
  <body>
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-modal">
        <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Importar trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div>
          <form action="" method="">
            <div class="form-row justify-content-center">
              <div class="col-lg-10">
                <label>Seleccione empresa que desea importar trabajo</label>
                <select name="empresa" class="form-control">
                  <option>Cosugas SA</option>
                  <option>Inarteco SA</option>
                   <option>CIMA SA</option>
                    <option>ARGENCOBRA</option>
                  <option>URBASER</option>
                </select>
              </div>
            </div>
            <div class="form-row justify-content-center">
              <div class="col-lg-10">
                <label>Seleccione el documento Excel</label>
                <input type="file" name="doc-excel" class="form-control">
              </div>
            </div></br>
            <div class="form-row justify-content-end">
              <div class="col-lg-6">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div></br>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>