<!-- Ingresar Datos de Relación de Cancelación de Cuentas Bancarias -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-body">

          <!-- Cuerpo -->
          <div class="card">
            <div class="card-header">
              <h5>Relación de Cancelación de Cuentas Bancarias</h5>
            </div>
            <div class="card-body">

              <!-- Ingresar Información -->
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <label>Lista de cuentas (5º Nivel)</label>
                    <input type="text" class="form-control" id="Lisa14">
                  </div>
                  <div class="col-md-6">
                    <label>Fuente de financiamiento</label>
                    <input type="text" class="form-control" id="Fuente14">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Número de cuenta bancaria</label>
                    <input type="number" class="form-control" id="Cuenta14">
                  </div>
                  <div class="col-md-6">
                    <label>Banco</label>
                    <input type="text" class="form-control" id="Banco14">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Nombre del titular que cancela su cuenta</label>
                    <input type="text" class="form-control" id="Nombre14">
                  </div>
                  <div class="col-md-6">
                    <label>Fecha de cancelación</label>
                    <input type="date" class="form-control" id="Fecha14">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12 text-right">
                    <button class="btn btn-success" onclick="AgregarTabla14()">Agregar</button>
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
                            <th scope="col">Lista de Cuentas</th>
                            <th scope="col">Fuente de financiamiento</th>
                            <th scope="col">Número de cuenta bancaria</th>
                            <th scope="col">Banco</th>
                            <th scope="col">Nombre del titular que cancela su cuenta</th>
                            <th scope="col">Fecha de cancelación</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody id="CuerpoTabla14">
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
<!-- Ingresar Datos de Relación de Cancelación de Cuentas Bancarias -->
