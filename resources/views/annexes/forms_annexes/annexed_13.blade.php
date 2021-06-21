<!-- Ingresar Datos de Relación Cheques Expedidos por Entregar o Transferencias por Realizar a Beneficiarios -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-body">

          <!-- Cuerpo -->
          <div class="card">
            <div class="card-header">
              <h5>Relación Cheques Expedidos por entregar o Transferencias por Realizar a beneficiarios</h5>
            </div>
            <div class="card-body">

              <!-- Ingresar Información -->
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <label>Fecha:</label>
                    <input type="date" class="form-control" id="Fecha13">
                  </div>
                  <div class="col-md-6">
                    <label>Número de Cheque</label>
                    <input type="number" class="form-control" id="Cheque13">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Número de Cuenta</label>
                    <input type="number" class="form-control" id="Numero13">
                  </div>
                  <div class="col-md-6">
                    <label>Banco</label>
                    <input type="text" class="form-control" id="Banco13">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Código conforme al listado de Cuentas</label>
                    <input type="text" class="form-control" id="Codigo13">
                  </div>
                  <div class="col-md-6">
                    <label>Póliza de Registro del Documento expedido</label>
                    <input type="text" class="form-control" id="Poliza13">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Concepto de Pago</label>
                    <input type="text" class="form-control" id="Concepto13">
                  </div>
                  <div class="col-md-6">
                    <label>Fuente de Financiamiento</label>
                    <input type="text" class="form-control" id="Fuente13">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Clasificador por Objeto</label>
                    <input type="text" class="form-control" id="Clasificador13">
                  </div>
                  <div class="col-md-6">
                    <label>Fecha del cheque</label>
                    <input type="date" class="form-control" id="Fecha213">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Concepto</label>
                    <input type="text" class="form-control" id="Concepto213">
                  </div>
                  <div class="col-md-6">
                    <label>Importe</label>
                    <input type="number" class="form-control" id="Importe13">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Beneficiario</label>
                    <textarea id="Beneficiario13" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="col-md-6">
                    <label>Observaciones</label>
                    <textarea id="Observaciones13" rows="5" class="form-control"></textarea>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12 text-right">
                    <button class="btn btn-success" onclick="AgregarTabla13()">Agregar</button>
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
                            <th scope="col">Fecha</th>
                            <th scope="col">Número de Cheque</th>
                            <th scope="col">Número de Cuenta</th>
                            <th scope="col">Banco</th>
                            <th scope="col">Código conforme al Listado</th>
                            <th scope="col">Póliza de registro</th>
                            <th scope="col">Concepto de Pago</th>
                            <th scope="col">Fuente de Financiamiento</th>
                            <th scope="col">Clasificador por Objeto</th>
                            <th scope="col">Fecha del cheque</th>
                            <th scope="col">Concepto</th>
                            <th scope="col">Beneficiario</th>
                            <th scope="col">Importe</th>
                            <th scope="col">Observaciones</th>
                          </tr>
                        </thead>
                        <tbody id="CuerpoTabla13">
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
<!-- Ingresar Datos de Relación Cheques Expedidos por Entregar o Transferencias por Realizar a Beneficiarios -->
