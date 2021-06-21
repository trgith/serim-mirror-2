<!-- Ingresar Datos de Relación de Padrones Actualizados de Usuarios y Contribuyentes -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-body">

          <!-- Cuerpo -->
          <div class="card">
            <div class="card-header">
              <h5>Relación padrones actualizados de usuarios y contribuyentes</h5>
            </div>
            <div class="card-body">

              <!-- Ingresar Información -->
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <label>Número</label>
                    <input type="number" class="form-control" id="Numero15">
                  </div>
                  <div class="col-md-6">
                    <label>Nombre del padrón</label>
                    <input type="text" class="form-control" id="Nombre15">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Existe</label>
                    <select id="Existe15" class="form-control">
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label>Nombre del responsable</label>
                    <input type="text" class="form-control" id="Responsable15">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Medios mágneticos entregados</label>
                    <input type="number" class="form-control" id="Medios15">
                  </div>
                  <div class="col-md-6">
                    <label>Área</label>
                    <input type="text" class="form-control" id="Area15">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12 text-right">
                    <button class="btn btn-success" onclick="AgregarTabla15()">Agregar</button>
                  </div>
                </div>
                <br>
              </div>
              <!-- Ingresar Información -->

              <!-- Tabla de Información -->
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Nombre del padrón</th>
                            <th scope="col">Existe</th>
                            <th scope="col">Nombre del responsable</th>
                            <th scope="col">Medios magnéticos entregados</th>
                            <th scope="col">Área</th>
                          </tr>
                        </thead>
                        <tbody id="CuerpoTabla15">
                          <!-- Cuerpo de tabla -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tabla de Información -->

            </div>
          </div>
          <!-- Cuerpo -->

        </div>
      </div>
</div>
<!-- Ingresar Datos de Relación de Padrones Actualizados de Usuarios y Contribuyentes -->
