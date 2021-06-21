<!-- Ingresar Datos de Expediente Tributario -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Arqueo de Caja</h5>
        </div>
        <div class="card-body">

          <!-- Card de Datos Generales -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  Información General
                </div>
                <div class="col text-right">
                  <button class="btn btn-danger" onclick="EsconderCuerpoAnexo10(1)" id="EsconderCuerpoAnexo-1" style="display: none;">Minimizar</button>
                  <button class="btn btn-danger" onclick="MostrarCuerpoAnexo10(1)" id="MostrarCuerpoAnexo-1">Expandir</button>
                </div>
              </div>
            </div>
            <div class="card-body" id="CuerpoCardAnexo10-1">
              <form>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Código del Listado de Cuentas <strong>(Hasta 50º Nivel)</strong>:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Fuente de Financiamiento:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Fecha:</label>
                    <input type="date" class="form-control">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Unidad Administrativa:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Card de Datos Generales -->
          <br>

          <!-- Card Arqueo de Caja en Efectivo -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  Arqueo de Caja en Efectivo
                </div>
                <div class="col text-right">
                  <button class="btn btn-danger" onclick="EsconderCuerpoAnexo10(2)" id="EsconderCuerpoAnexo-2" style="display: none;">Minimizar</button>
                  <button class="btn btn-danger" onclick="MostrarCuerpoAnexo10(2)" id="MostrarCuerpoAnexo-2">Expandir</button>
                </div>
              </div>
            </div>
            <div class="card-body" id="CuerpoCardAnexo10-2">
              <!-- Card de Billetes -->
              <div class="card">
                <div class="card-header">
                  Billetes
                </div>
                <div class="card-body">

                  <!-- Cuerpo del card de Billetes -->
                  <form>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$1,000.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$500.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$200.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$100.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$50.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$20.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-12">
                        <label class="text-center" for="inputEmail4">Total:</label>
                        <input type="text" class="form-control" placeholder="$00.00" readonly>
                      </div>
                    </div>
                  </form>
                  <!-- Cuerpo del card de Billetes -->

                </div>
              </div>
              <!-- Card de Billetes -->
              <br>
              <!-- Card de Monedas -->
              <div class="card">
                <div class="card-header">
                  Monedas
                </div>
                <div class="card-body">

                  <!-- Cuerpo del card de Monedas -->
                  <form>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$10.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$5.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$2.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$1.00" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$00.50" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$00.20" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-4">
                        <label class="text-center" for="inputEmail4">Denominación:</label>
                        <input type="text" class="form-control" placeholder="$00.10" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Cantidad:</label>
                        <input type="number" class="form-control" placeholder="0">
                      </div>
                      <div class="col-md-4">
                        <label for="inputEmail4">Subtotal:</label>
                        <input type="text" class="form-control" placeholder="$0.00" readonly>
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-12">
                        <label class="text-center" for="inputEmail4">Total:</label>
                        <input type="text" class="form-control" placeholder="$00.00" readonly>
                      </div>
                    </div>
                  </form>
                  <!-- Cuerpo del card de Monedas -->

                </div>
              </div>
              <!-- Card de Monedas -->
            </div>
          </div>
          <!-- Card Arqueo de Caja en Efectivo -->
          <br>

          <!-- Card de Arqueo de Caja en Cheques -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  Arqueo de Caja en Cheque
                </div>
                <div class="col text-right">
                  <button class="btn btn-danger" onclick="EsconderCuerpoAnexo10(3)" id="EsconderCuerpoAnexo-3" style="display: none;">Minimizar</button>
                  <button class="btn btn-danger" onclick="MostrarCuerpoAnexo10(3)" id="MostrarCuerpoAnexo-3">Expandir</button>
                </div>
              </div>
            </div>
            <div class="card-body" id="CuerpoCardAnexo10-3">

              <!-- Datos generales de Arqueo de Caja en Cheque -->
              <form>
                <div class="form-row">
                  <div class="col-md-12">
                    <label>Total de Efectivo en Caja:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Fecha en que inicio el corte de caja:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Importe con el que inició el corte de caja:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Fecha en que terminó el corte de caja:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Importe con el que terminó el corte de caja:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
              <br>
              <!-- Datos generales de Arqueo de Caja en Cheque -->

              <!-- Tabla de las Entradas -->
              <form>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="inputEmail4">Fecha:</label>
                    <input type="date" class="form-control" placeholder="Fecha" id="Fecha5">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4">Folio CFDI:</label>
                    <input type="text" class="form-control" placeholder="Folio CFDI" id="FolioCFDI5">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="inputEmail4">RFC a quien se emitió:</label>
                    <input type="text" class="form-control" placeholder="RFC a quien se emitió" id="RFC5">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4">Código CRI:</label>
                    <input type="text" class="form-control" placeholder="Código CRI" id="CRI5">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="inputEmail4">Expedido a favor de:</label>
                    <input type="text" class="form-control" placeholder="Expedido a favor de" id="Expedido5">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4">Comprobante de Pago:</label>
                    <input type="text" class="form-control" placeholder="Comprobante de Pago" id="Comprobante5">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="inputEmail4">Concepto:</label>
                    <input type="text" class="form-control" placeholder="Concepto" id="Concepto5">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4">Importe:</label>
                    <input type="text" class="form-control" placeholder="Importe" id="Importe5">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="inputEmail4">Tipo:</label>
                    <select name="" id="Tipo5" class="form-control">
                      <option value="Entrada">Entrada</option>
                      <option value="Salida">Salida</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-danger" onclick="AgregarFila5()">Agregar</button>
                  </div>
                </div>
              </form>
              <br>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <th scope="col">Fecha</th>
                    <th scope="col">CFDI</th>
                    <th scope="col">Comprobante</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acción</th>
                  </thead>
                  <tbody id="CuerpoTabla5">
                  </tbody>
                  <tfoot>
                    <td colspan="12" class="text-right">
                      Total: $0.00
                    </td>
                  </tfoot>
                </table>
              </div>
              <!-- Tabla de las Entradas -->

            </div>
          </div>
          <!-- Card de Arqueo de Caja en Cheques -->
          <br>

          <!-- Card de Relación de Comprobantes Digitales por Internet como Comprobante de Pago -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  Relación de Comprobantes Digitales por Internet como Comprobante de Pago
                </div>
                <div class="col text-right">
                  <button class="btn btn-danger" onclick="EsconderCuerpoAnexo10(4)" id="EsconderCuerpoAnexo-4" style="display: none;">Minimizar</button>
                  <button class="btn btn-danger" onclick="MostrarCuerpoAnexo10(4)" id="MostrarCuerpoAnexo-4">Expandir</button>
                </div>
              </div>
            </div>
            <div class="card-body" id="CuerpoCardAnexo10-4">
              <form>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Fecha:</label>
                    <input type="date" class="form-control" id="Fecha6">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Documento:</label>
                    <input type="text" class="form-control" id="Documento6">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Folio CFDI:</label>
                    <input type="text" class="form-control" id="FolioCFDI6">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Fecha CFDI:</label>
                    <input type="date" class="form-control" id="FechaCFDI6">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Código del C.O.G.:</label>
                    <input type="text" class="form-control" id="COG6">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Tipo de Gasto:</label>
                    <input type="text" class="form-control" id="Gasto6">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Lista de Cuentas <strong>(Hasta 50º Nivel)</strong>:</label>
                    <input type="text" class="form-control" id="Cuentas6">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Expedido por:</label>
                    <input type="text" class="form-control" id="Expedido6">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="inputEmail4">Concepto:</label>
                    <input type="text" class="form-control" id="Concepto6">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">Importe:</label>
                    <input type="text" class="form-control" id="Importe6">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="button" onclick="AgregarFila6()">Agregar</button>
                  </div>
                </div>
              </form>
              <br>


              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <th scope="col">Fecha</th>
                    <th scope="col">Folio CFDI</th>
                    <th scope="col">C.O.G.</th>
                    <th scope="col">Gasto</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Acción</th>
                  </thead>
                  <tbody id="CuerpoTabla6">
                  </tbody>
                  <tfoot>
                    <td colspan="12" class="text-right">
                      Total: $0.00
                    </td>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!-- Card de Relación de Comprobantes Digitales por Internet como Comprobante de Pago -->
          <br>

          <!-- Card de Relación de Cheques de Caja -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  Relación de Cheques en Caja
                </div>
                <div class="col text-right">
                  <button class="btn btn-danger" onclick="EsconderCuerpoAnexo10(5)" id="EsconderCuerpoAnexo-5" style="display: none;">Minimizar</button>
                  <button class="btn btn-danger" onclick="MostrarCuerpoAnexo10(5)" id="MostrarCuerpoAnexo-5">Expandir</button>
                </div>
              </div>
            </div>
            <div class="card-body" id="CuerpoCardAnexo10-5">

              <!-- Cuerpo del card de Relacion de Cheques en Caja -->
              <form>
                <div class="form-row">
                  <div class="col-md-6">
                    <label class="text-center" for="inputEmail4">Fecha:</label>
                    <input type="date" class="form-control" id="Fecha7">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4">Número de Cheque:</label>
                    <input type="text" class="form-control" id="Cheque7">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <label class="text-center" for="inputEmail4">Expedido por o favor de:</label>
                    <input type="text" class="form-control" id="Expedido7">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4">Importe:</label>
                    <input type="text" class="form-control" id="Importe7">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="button" onclick="AgregarFila7()">Agregar</button>
                  </div>
                </div>
              </form>
              <br>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <th scope="col">Fecha</th>
                    <th scope="col">Número de Cheque</th>
                    <th scope="col">Expedido Por / a Favor de:</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Acción</th>
                  </thead>
                  <tbody id="CuerpoTabla7">
                  </tbody>
                  <tfoot>
                    <td colspan="12" class="text-right">
                      Total: $0.00
                    </td>
                  </tfoot>
                </table>
              </div>
              <!-- Cuerpo del card de Relacion de Cheques en Caja -->
              <br>

            </div>
          </div>
          <!-- Card de Relación de Cheques de Caja -->
          <br>

          <!-- Card para Observaciones -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  Observaciones
                </div>
                <div class="col text-right">
                  <button class="btn btn-danger" onclick="EsconderCuerpoAnexo10(6)" id="EsconderCuerpoAnexo-6" style="display: none;">Minimizar</button>
                  <button class="btn btn-danger" onclick="MostrarCuerpoAnexo10(6)" id="MostrarCuerpoAnexo-6">Expandir</button>
                </div>
              </div>
            </div>
            <div class="card-body" id="CuerpoCardAnexo10-6">

              <!-- Cuerpo del card de Relacion de Cheques en Caja -->
              <form>
                <div class="form-row">
                  <div class="col-md-12">
                    <label class="text-center" for="inputEmail4">Observaciones:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                  </div>
                </div>
                <br>
              </form>
              <br>
              <!-- Cuerpo del card de Relacion de Cheques en Caja -->
              <br>

            </div>
          </div>
          <!-- Card para Observaciones -->

        </div>
      </div>
</div>
<!-- Ingresar Datos de Expediente Tributario -->
