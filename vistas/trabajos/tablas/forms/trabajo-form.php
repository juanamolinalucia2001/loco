<!DOCTYPE html>
<html>
<body>
  <form class="form-general"></br>
            <div class="form-row justify-content-center">
              <div class="col-lg-7">
                <label>Trabajo</label>
                <input class="form-control" type="text" name="trabajo" placeholder="Trabajo" required>
              </div>
              <div class="col-lg-2">
                <label>Fecha de incio</label>
                <input class="form-control" type="date" name="fecha_inicio" placeholder="Inicio" required>
              </div>
              <div class="col-lg-2">
                <label>Fecha de fin</label>
                <input class="form-control" type="date" name="fecha_fin" placeholder="Fin" required>
              </div>
            </div>
            <div class="form-row justify-content-center">
              <div class="col-lg-5">
                <label>Descripcion</label>
                <textarea class="form-control" name="descripcion" placeholder="Descripcion" required></textarea>
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
              <div class="col-lg-auto">
                <label>Fecha creacion</label></br>
                <label class="campo-date">
                  <script type="text/javascript">
                    var fecha = new Date();
                    var mes = fecha.getMonth()+1;
                    document.write(fecha.getDate(),'/'+mes+'/'+fecha.getFullYear());
                  </script>
                </label>
              </div>
              <div class="col-lg-auto">
                <label>Fecha modificacion</label></br>
                <label class="campo-date">
                  <script type="text/javascript">
                    var fecha = new Date();
                    var mes = fecha.getMonth()+1;
                    document.write(fecha.getDate(),'/'+mes+'/'+fecha.getFullYear());
                  </script>
                </label>
              </div>
              <div class="col-lg-auto">
                <label>Usuario</label></br>
                <label class="campo-date">Supongamos</label>
              </div>
            </div></br>
            <div class="form-row justify-content-center">
              <div class="col-md-1">
                <button class="btn btn-primary" data-toggle="collapse" href="#formReclamos" aria-expanded="false" aria-controls="formReclamos">Cancelar</button>
              </div>
              <div class="col-md-1">
                <button class="btn btn-primary" type="submit">Guardar</button>
              </div>
            </div>
          </br>
          </form>
</body>
</html>