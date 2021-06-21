<!-- Ingresar Datos de Documentación Justificativa y Comprobatoria  de la Fuente de Financiamiento de Ingresos  de Gestión -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" onload="Esconder()">
    <div class="card">
        <div class="card-header">
            <h5>Documentación Justificativa y Comprobatoria  de la Fuente de Financiamiento de Ingresos  de Gestión</h5>
        </div>
        <div class="card-body">

          <!-- Cuerpo -->
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-12">
                  Area
                  <select class="form-control" id="AreaAnexo5" onchange="CambiarAreasAnexo5(this)">
                    @foreach($areas as $area)
                        <option value="{{ $area['id'] }}">{{ $area['nombre'] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  Numero de Legajos para el año:
                  <select class="form-control" id="AnioAnexo5">
                        @foreach($anios as $anio)
                            <option value="{{ $anio }}">{{ $anio }}</option>
                        @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="card-body">

              <!-- Meses -->
              <div class="row">

                @foreach($areas as $area)
                    @foreach($months as $m)
                        <div class="col-md-3 Meses-{{ $area['id'] }}" style="{{ $area['id'] != 'addTable_Content_1' ? 'display: none' : '' }}">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">{{ $m }}</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" placeholder="Ingreso" value="10" id="Ingreso-{{ $m }}-{{ $area['id'] }}"><br>
                                <input type="number" class="form-control" placeholder="Egreso" value="10" id="Egreso-{{ $m }}-{{ $area['id'] }}">
                            </div>
                        </div>
                        </div>
                    @endforeach
                @endforeach

              </div>
              <!-- Meses -->

            </div>
          </div>
          <!-- Cuerpo -->

        </div>
      </div>
</div>
<!-- Ingresar Datos de Documentación Justificativa y Comprobatoria  de la Fuente de Financiamiento de Ingresos  de Gestión -->

<!-- Funciones JS -->
<script>
    var jsonComplete = {
        "nameFile": "Anexo5Generado.xlsx",
        "file": "anexo5.xlsx",
        "methods": [
            "addFormat",
            "addTablesInPages"
            //"saveFile"
        ],
        "content": {
            "beginRow": 10,
            "insertNewRows": null,
            "mergeCells": null,
            "addTable_Contents": {
                "addTable_Content_1": {
                    "Fila_1": [
                        "B10",
                        "C10",
                        "D10",
                        "E10",
                        "F10",
                        "G10",
                        "H10",
                        "I10",
                        "J10",
                        "K10",
                        "L10",
                        "M10",
                        "N10"
                    ]
                }
            },
            "addTable_Columns": [
                "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O"
            ],
            "sheetsToProcess" : [
                0, 1, 2, 3, 4, 5, 6
            ]
        }
    }

    function constructDataAnnexed5(){
        //Variables
        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var areas = ["addTable_Content_1", "addTable_Content_2", "addTable_Content_3", "addTable_Content_4", "addTable_Content_5", "addTable_Content_6", "addTable_Content_7"];
        var anios = ["2018", "2019", "2020", "2021", "2022"];
        var arrIngreso = [];
        var arrEgreso = [];

        //Se crean los espacios en los jsons
        for(var a = 0; a < areas.length; a++){
            jsonComplete['content']['addTable_Contents'][areas[a]] = {};
        }

        // Se recupera el mes y el area para la cual se esta construyendo el anexo
        var actualArea = $('#AreaAnexo5').val();
        var actualAnio = $('#AnioAnexo5').val();

        // Se almacena la info
        for(var k = 0; k < areas.length; k++){
            var numFila = 1;
            for(var i = 0; i < anios.length; i++){
                    var arrTemp1 = [];
                    for(var j = 0; j < meses.length; j++){
                        arrTemp1.push($('#Ingreso-' + meses[j] + '-' + areas[k]).val());
                    }
                    jsonComplete['content']['addTable_Contents'][areas[k]]['Fila_' + numFila] = arrTemp1;
                    numFila++;

                    var arrTemp2 = [];
                    for(var j = 0; j < meses.length; j++){
                        arrTemp2.push($('#Egreso-' + meses[j] + '-' + areas[k]).val());
                    }
                    jsonComplete['content']['addTable_Contents'][areas[k]]['Fila_' + numFila] = arrTemp2;
                    numFila++;
            }
        }

    }

    function CambiarAreasAnexo5(input){
        for(var i = 0; i < 7; i++){
            $('.Meses-addTable_Content_' + (i + 1)).hide();
        }
        $('.Meses-' + $(input).val()).show();
    }

    function Esconder(){
        for(var i = 0; i < 7; i++){
            $('.Meses-addTable_Content_' + (i + 1)).hide();
        }
    }


    function sendDataAnnexed5(){
        //constructDataAnnexed5();
        console.log(jQuery('meta[name="csrf-token"]').attr('content'));
        //console.log(jsonComplete);

        $('#Exportar').prop('disabled', true);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/create_annexed",
            data: { jsonComplete },
            xhrFields: {
                responseType: 'blob'
            },
            success: function(response) {
                console.log(response);
                $('#Exportar').prop('disabled', false);
                var blob = new Blob([response]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "Anexo 5 - " + getCurrentDate() + ".xlsx";
                link.click();
            },
            error: function(response) {
                console.log("Error");
                console.log(response);
            }
        });
    }
</script>
<!-- Funciones JS -->
