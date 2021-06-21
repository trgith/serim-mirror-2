<!-- Ingresar Datos de Presupuesto  de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- Contenido -->
    <br>
    <div class="card">
        <div class="card-header card__header-modified text-white">
            <h5>Presupuesto  de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación</h5>
        </div>
        <div class="card-body" id="MyGroup">

            <!-- Botones de Años -->
            <div class="row">
                @foreach($years as $year)
                <div class="col-md">
                    <button class="btn btn-danger btn-block" type="button" data-toggle="collapse" data-target="#Year-{{ $year }}" aria-expanded="false" aria-controls="collapseExample">
                        {{ $year }}
                    </button>
                </div>
                @endforeach
            </div>
            <br>
            <!-- Botones de Años -->

            <!-- Cards de Años -->
            @foreach($years as $year)
            <div class="collapse" id="Year-{{ $year }}" data-parent="#MyGroup">

                <!-- Card de Presupuestos de Ingresos y Egresos del año -->
                <div class="card">
                    <div class="card-header">
                    Presupuestos de Ingresos y Egresos del año: {{ $year }}
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Presupuestos-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Presupuestos-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Presupuestos-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Presupuestos de Ingresos y Egresos del año -->

                <!-- Card de Programas Presupuestarios Iniciales -->
                <div class="card">
                    <div class="card-header">
                    Programas Presupuestarios Iniciales
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Programas-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Programas-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Programas-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Programas Presupuestarios Iniciales -->

                <!-- Card de Informe de Cumplimiento al Programa Presupuestario -->
                <div class="card">
                    <div class="card-header">
                    Informe de Cumplimiento al Programa Presupuestario
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Cumplimiento-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Cumplimiento-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Cumplimiento-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Informe de Cumplimiento al Programa Presupuestario -->

                <!-- Card de Informe de Avance al Tercer Trimestre (Enero - Septiembre) del Programa Presupuestario $Year -->
                <div class="card">
                    <div class="card-header">
                    Informe de Avance al Tercer Trimestre (Enero - Septiembre) del Programa Presupuestario {{ $year }}
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Avance-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Avance-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Avance-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Informe de Avance al Tercer Trimestre (Enero - Septiembre) del Programa Presupuestario $Year -->

                <!-- Card de Informes de Gobierno -->
                <div class="card">
                    <div class="card-header">
                    Informes de Gobierno
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Gobierno-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Gobierno-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Gobierno-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Informes de Gobierno -->

                <!-- Card de Pliegos de Recomendaciones -->
                <div class="card">
                    <div class="card-header">
                    Pliegos de Recomendaciones
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Pliegos-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Pliegos-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Pliegos-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Pliegos de Recomendaciones -->

                <!-- Card de Plan Anual de Evaluación $Year -->
                <div class="card">
                    <div class="card-header">
                    Plan Anual de Evaluación {{ $year }}
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Anual-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Anual-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Anual-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Plan Anual de Evaluación $Year -->

                <!-- Card de Informes Derivados de las Evaluaciones Realizadas para el Cumplimiento del Plan Anual de Evaluación -->
                <div class="card">
                    <div class="card-header">
                    Informes Derivados de las Evaluaciones Realizadas para el Cumplimiento del Plan Anual de Evaluación
                    </div>
                    <div class="card-body">
                    <form>
                        <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" value="2021-06-14" id="Fecha-Derivados-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Medio(s) Magnético(s)" id="Medios-Derivados-{{ $year }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="Folio del Recibo" id="Folio-Derivados-{{ $year }}">
                        </div>
                        </div>
                    </form>
                    </div>
                </div><br>
                <!-- Card de Informes Derivados de las Evaluaciones Realizadas para el Cumplimiento del Plan Anual de Evaluación -->


            </div>
            @endforeach
            <!-- Cards de Años -->

        </div>
        <br>
        <!-- Cards de Años -->

        </div>
    </div>
    <!-- Contenido 1 -->
</div>
<!-- Ingresar Datos de Presupuesto  de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación -->

<!-- Ingresar Datos de Estructura Organica -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- Contenido 1 -->
    <br>
    <div class="card">
        <div class="card-header card__header-modified text-white">
            <h5>Anexar Archivos</h5>
        </div>
        <div class="card-body">

            <!-- Subir archivos -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Anexar Programa Operativo Anual</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                </div>
            </div>
            <!-- Subir archivos -->

        </div>
    </div>
    <!-- Contenido 1 -->
</div>
<!-- Ingresar Datos de Estructura Organica -->

<!-- Ingresar Observaciones -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- Contenido 1 -->
    <br>
    <div class="card">
        <div class="card-header card__header-modified text-white">
            <h5>Observaciones</h5>
        </div>
        <div class="card-body">

            <!-- Subir archivos -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control">...</textarea>
                      </div>
                </div>
            </div>
            <!-- Subir archivos -->

        </div>
    </div>
    <!-- Contenido 1 -->
</div>
<!-- Ingresar Observaciones -->

<!-- Funciones JS -->
<script>
    var jsonComplete = {
        "nameFile": "Anexo3Generado.xlsx",
        "file": "anexo3.xlsx",
        "methods": [
            "addFormat",
            "addTable",
            "addFormatToRows",
            "saveFile"
        ],
        "content": {
            "beginRow": 9,
            "insertNewRows": null,
            "mergeCells": null,
            "addTable_Contents": {
                "addTable_Content_1": {
                    "Fila_1": [
                        "B9",
                        "C9",
                        "D9",
                        "E9",
                        "F9",
                        "G9",
                        "H9",
                        "I9",
                        "J9",
                        "K9",
                        "L9",
                        "M9",
                        "N9",
                        "O9",
                        "P9"
                    ]
                }
            },
            "addTable_Columns": [
                "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P"
            ],
            "rowsRange": [
                "A9", "A10", "A11", "A12", "A13", "A14", "A15", "A16"
            ]
        }
    }

    function constructDataAnnexed3(){
        var categories = ["Presupuestos", "Programas", "Cumplimiento", "Avance", "Gobierno", "Pliegos", "Anual", "Derivados"];
        var years = ["2018", "2019", "2020", "2021", "2022"];

        /* Llenar JSON */
        var addTable_Content_1 = {};

        for(var j = 0; j < categories.length; j++){
            addTable_Content_1["Fila_" + (j + 1)] = {};
            var temp = [];
                for(var i = 0; i < years.length; i++){
                    temp.push($('#Fecha-' + categories[j] + '-' + years[i]).val());
                    temp.push($('#Medios-' + categories[j] + '-' + years[i]).val());
                    temp.push($('#Folio-' + categories[j] + '-' + years[i]).val());

                    addTable_Content_1["Fila_" + (j + 1)] = temp;
                }

        }

        jsonComplete.content.addTable_Contents["addTable_Content_1"] = addTable_Content_1;
    }

    function sendDataAnnexed3(){
        constructDataAnnexed3();
        console.log(jsonComplete);
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
                link.download = "Anexo 3 - " + getCurrentDate() + ".xlsx";
                link.click();
            },
            error: function(response) {
                console.log("ERROR");
                console.log(response);
            }
        });
    }

</script>
<!-- Funciones JS -->
