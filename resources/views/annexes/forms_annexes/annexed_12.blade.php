<!-- Ingresar Datos de Relación del Último Cheque Expedido por cada una de las Cuentas Bancarias -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-body">

          <!-- Cuerpo -->
          <div class="card">
            <div class="card-header">
              <h5>Relación del Último Cheque Expedido por cada una de las cuentas bancarias</h5>
            </div>
            <div class="card-body">

              <!-- Ingresar Información -->
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <label>Número de Cuenta Bancaria</label>
                    <input type="number" class="form-control" id="NumCuenta12">
                  </div>
                  <div class="col-md-6">
                    <label>Código Conforme al Listado de Cuentas (Hasta 5º Nivel)</label>
                    <input type="number" class="form-control" id="Codigo12">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Póliza de Registro del Documento Expedido</label>
                    <input type="number" class="form-control" id="Poliza12">
                  </div>
                  <div class="col-md-6">
                    <label>Concepto del Pago</label>
                    <input type="text" class="form-control" id="Concepto12">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Nombre de la Institución Bancaria</label>
                    <input type="text" class="form-control" id="Institucion12">
                  </div>
                  <div class="col-md-6">
                    <label>Fuente de Financiamiento</label>
                    <input type="text" class="form-control" id="Financiamiento12">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Clasificador por Objeto del Gasto</label>
                    <input type="text" class="form-control" id="Clasificador12">
                  </div>
                  <div class="col-md-6">
                    <label>Número del último cheque expedido</label>
                    <input type="number" class="form-control" id="Ultimo12">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Fecha:</label>
                    <input type="date" class="form-control" id="Fecha12">
                  </div>
                  <div class="col-md-6">
                    <label>Estatus del Documento</label>
                    <select id="Estatus12" class="form-control">
                      <option value="Transito">Transito</option>
                      <option value="Pagado">Pagado</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Importe:</label>
                    <input type="number" class="form-control" id="Importe12">
                  </div>
                  <div class="col-md-6">
                    <label>Tipo de Recurso</label>
                    <select id="Recurso12" class="form-control">
                      <option value="Recursos Propios">Recursos Propios</option>
                      <option value="Participaciones">Participaciones</option>
                      <option value="FISM">FISM</option>
                      <option value="FORTAMUN">FORTAMUN</option>
                      <option value="FONDEN">FONDEN</option>
                      <option value="Estatales">Estatales</option>
                      <option value="Reasignados">Reasignados</option>
                      <option value="Créditos">Créditos</option>
                      <option value="Ramo 20">Ramo 20</option>
                      <option value="Otros">Otros</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label>Beneficiario</label>
                    <textarea id="Beneficiario12" rows="10" class="form-control"></textarea>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12 text-right">
                    <button class="btn btn-success" onclick="AgregarTabla12()">Agregar</button>
                  </div>
                </div>
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
                            <th scope="col">Numero de cuenta bancaría</th>
                            <th scope="col">Código conforme al listado de cuentas</th>
                            <th scope="col">Póliza de registro</th>
                            <th scope="col">Concepto del pago</th>
                            <th scope="col">Institución bancaria</th>
                            <th scope="col">Fuente de financiamiento</th>
                            <th scope="col">Clasificador por Objeto del Gasto</th>
                            <th scope="col">Número del último cheque expedido</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Estatus del documento</th>
                            <th scope="col">Importe</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Beneficiario</th>
                          </tr>
                        </thead>
                        <tbody id="CuerpoTabla12">
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
<!-- Ingresar Datos de Relación del Último Cheque Expedido por cada una de las Cuentas Bancarias -->
