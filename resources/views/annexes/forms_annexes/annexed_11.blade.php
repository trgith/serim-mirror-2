<!-- Ingresar Datos de Conciliación Bancaria -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-header">
          <h5>Conciliación Bancaria</h5>
        </div>
        <div class="card-body">

          <!-- Cuerpo -->
          <div class="col-md-12">
            <!-- Card de Datos Generales -->
            <div class="card">
              <div class="card-header">
                Datos Generales
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label>Banco:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Número de Cuenta:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Lista de Cuentas (Hasta 5º Nivel):</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Fuente de Financiamiento:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label>Saldo según el Estado de Cuenta Bancario:</label>
                    <input type="number" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <!-- Card de Datos Generales -->
            <br>

            <!-- Card Depositos Contables no registrados en el banco -->
            <div class="card">
              <div class="card-header">
                Depósitos Contables no registrados por el Banco
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Concepto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="CuerpoTabla1Anexo11">
                      <tr>
                        <td>
                          <input type="date" class="form-control" id="Fecha11-1">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="Concepto11-1">
                        </td>
                        <td>
                          <input type="number" class="form-control" id="Cantidad11-1">
                        </td>
                        <td>
                          <button class="btn btn-success" onclick="AgregarTabla111()">Agregar</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-12">
                    <label>Total:</label>
                    <input type="number" id="TotalTabla1" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <!-- Card Depositos Contables no registrados en el banco -->
            <br>

            <!-- Card Depositos Contables no registrados en el banco -->
            <div class="card">
              <div class="card-header">
                Cargos Bancarios no contabilizados
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Concepto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="CuerpoTabla2Anexo11">
                      <tr>
                        <td>
                          <input type="date" class="form-control" id="Fecha11-2">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="Concepto11-2">
                        </td>
                        <td>
                          <input type="number" class="form-control" id="Cantidad11-2">
                        </td>
                        <td>
                          <button class="btn btn-success" onclick="AgregarTabla112()">Agregar</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-12">
                    <label>Total:</label>
                    <input type="number" id="TotalTabla2" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <!-- Card Depositos Contables no registrados en el banco -->
            <br>

            <!-- Card Depositos Contables no registrados en el banco -->
            <div class="card">
              <div class="card-header">
                Cheques Expedidos y Contabilizados no Cobrados (En Tránsito):
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Concepto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="CuerpoTabla3Anexo11">
                      <tr>
                        <td>
                          <input type="date" class="form-control" id="Fecha11-3">
                        </td>
                        <td>
                          <input type="text" class="form-control" id="Concepto11-3">
                        </td>
                        <td>
                          <input type="number" class="form-control" id="Cantidad11-3">
                        </td>
                        <td>
                          <button class="btn btn-success" onclick="AgregarTabla113()">Agregar</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-12">
                    <label>Total:</label>
                    <input type="number" id="TotalTabla2" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <!-- Card Depositos Contables no registrados en el banco -->
            <br>

            <!-- Card Saldo segun Municipio -->
            <div class="card">
              <div class="card-header">
                Saldo según municipio
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <label>Total:</label>
                    <input type="number" id="TotalSegunMunicipio" class="form-control">
                  </div>
                </div>
              </div>

            </div>
            <!-- Card Saldo segun Municipio -->
            <br>

            <!-- Card Reglas -->
            <div class="card">
              <div class="card-header">
                Notas
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">
                    EL IMPORTE DE "SALDO SEGÚN MUNICIPIO" DEBE COINCIDIR AL PRESENTADO EN LA BALANZA DE COMPROBACIÓN
                  </li>
                  <li class="list-group-item">
                    LA SUMA DE LOS IMPORTES DE LOS TOTALES DEL ANEXO 10 MÁS LA SUMA DE LOS TOTALES DEL ANEXO 11, DEBE COINCIDIR CON LO PRESENTADO EN EL RUBRO DE EFECTIVO Y EQUIVALENTES DE: ESTADO DE SITUACIÓN FINANCIERA, ESTADO ANALÍTICO DEL ACTIVO Y BALANZA DE COMPROBACIÓN
                  </li>
                  <li class="list-group-item">
                    SE DEBERÁN ANEXAR ESTADO DE CUENTA BANCARIO AL 14 DE OCTUBRE DE 2018 Y AUXILIAR DE MAYOR, USUARIO Y CONTRASEÑA PARA ACCEDER A LA PÁGINA DEL BANCO, Y EN SU CASO EL TOKEN.
                  </li>
                  <li class="list-group-item">
                    SE DEBERÁ ENTREGAR EXCLUSIVAMENTE A LA ADMINISTRACIÓN ENTRANTE: ESTADOS DE CUENTA BANCARIOS, CONCILIACIONES BANCARIAS Y EN MEDIO MAGNÉTICO AUXILIARES DE MAYOR DE ENERO A OCTUBRE DE 2018.
                  </li>
                  <li class="list-group-item">
                    SE DEBERÁ ENTREGAR AL REPRESENTANTE DE LA AUDITORÍA SUPERIOR DEL ESTADO DE PUEBLA: ESTADOS DE CUENTA BANCARIOS, Y CONCILIACIONES BANCARIAS DE SEPTIEMBRE Y OCTUBRE DE 2018.
                  </li>
                </ul>
              </div>

            </div>
            <!-- Card Reglas -->
          </div>
          <!-- Cuerpo -->

        </div>
      </div>
</div>
<!-- Ingresar Datos de Conciliación Bancaria -->
