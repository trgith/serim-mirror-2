<!-- Ingresar Datos de Plan de desarrollo Municipal -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Plan de Desarrollo Municipal</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Período</label>
                    <input type="text" class="form-control" id="Periodo1" value="Test">
                </div>
                <div class="col-md-6">
                    <label>Fecha de Presentación en ASEP</label>
                    <input type="date" class="form-control" id="FechaPresentacion" value="08/08/2021">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Folio de Recibo ASEP</label>
                    <input type="text" class="form-control" id="Folio" value="Test">
                </div>
                <div class="col-md-6">
                    <label>Fecha de Publicación (Períodico Oficial)</label>
                    <input type="date" class="form-control" id="FechaPublicacion" value="08/08/2021">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-danger" onclick="addBody1Annexed1()" style="background-color: #2E3950">Agregar</button>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Período</th>
                        <th scope="col">Fecha de Presentación en ASEP</th>
                        <th scope="col">Folio del Recibo ASEP</th>
                        <th scope="col">Fecha de Publicación (Períodico Oficial)</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="Cuerpo1Anexo1">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Ingresar Datos de Plan de desarrollo Municipal -->

<!-- Ingresar Cumplimiento al Plan de Desarrollo Municipal al 2018-2021 -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Cumplimiento al Plan de Desarrollo Municipal 2018-2021</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <label>Período</label>
                    <input type="text" class="form-control" id="Periodo12" value="08/08/2021">
                </div>
                <div class="col-md-4">
                    <label>Cumple con las Especifícaciones de la Ley Orgánica Municipal 2018-2021</label>
                    <select class="form-control" id="Cumple11">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Cumple con la Metodología de Marco Lógico</label>
                    <select class="form-control" id="Cumple12">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-danger" onclick="addBody2Annexed1()">Agregar</button>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Período</th>
                        <th scope="col">Cumple con las Especifícaciones de la Ley Orgánica Municipal 2018-2021</th>
                        <th scope="col">Cumple con la Metodología de Marco Lógico</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="Cuerpo2Anexo1">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Ingresar Cumplimiento al Plan de Desarrollo Municipal al 2018-2021 -->

<!-- Funciones JS -->
<script>
    var jsonComplete = {
        "nameFile": "Anexo1.xlsx",
        "file": "anexo1.xlsx",
        "methods": [
            "addFormat",
            "addTable",
            "addNewTable",
            "saveFile"
        ],
        "content": {
            "beginRow": 9,
            "insertNewRows": false,
            "mergeCells": null,
            "addTable_Contents": {
                "addTable_Content_1": {
                    "Fila_1": [
                        "A9",
                        "B9",
                        "C9",
                        "D9"
                    ],
                    "Fila_2": [
                        "A10",
                        "B10",
                        "C10",
                        "D10"
                    ],
                    "Fila_3": [
                        "A11",
                        "B11",
                        "C11",
                        "D11"
                    ],
                    "Fila_4": [
                        "A12",
                        "B12",
                        "C12",
                        "D12"
                    ],
                    "Fila_5": [
                        "A13",
                        "B13",
                        "C13",
                        "D13"
                    ],
                    "Fila_6": [
                        "A14",
                        "B14",
                        "C14",
                        "D14"
                    ],
                    "Fila_7": [
                        "A15",
                        "B15",
                        "C15",
                        "D15"
                    ]
                }
            },
            "addNewTable_Content": {
                "Fila_1": [
                    "Periodo 1",
                    "SI",
                    "NO"
                ],
                "Fila_2": [
                    "Periodo 2",
                    "NO",
                    "NO"
                ],
                "Fila_3": [
                    "Periodo 3",
                    "NO",
                    "NO"
                ],
                "Fila_4": [
                    "Periodo 4",
                    "NO",
                    "NO"
                ],
                "Fila_5": [
                    "Periodo 5",
                    "NO",
                    "NO"
                ]
            },
            "addTable_Columns": [
                "A", "B", "C", "D"
            ],
            "addNewTable_Columns": [
                "A", "B", "C"
            ],
            "addNewTable_Title": {
                "title": "CUMPLIMIENTO AL PLAN DE DESARROLLO MUNICIPAL 2018-2021"
            },
            "addNewTable_Headers": [
                "PERIODO",
                "CUMPLE CON LAS ESPECIFICACIONES DE LA LEY ORGANICA MUNICIPAL",
                "CUMPLE CON LAS ESPECIFICACIONES DE MARCO LOGICO"
            ]
        }
    }

    function addBody1Annexed1(){
        var Periodo1 = $('#Periodo1').val();
        var FechaPresentacion = $('#FechaPresentacion').val();
        var Folio = $('#Folio').val();
        var FechaPublicacion = $('#FechaPublicacion').val();

        $('#Cuerpo1Anexo1').append("<tr>" +
                                    "<td>" + Periodo1 + "</td>" +
                                    "<td>" + FechaPresentacion + "</td>" +
                                    "<td>" + Folio + "</td>" +
                                    "<td>" +  FechaPublicacion + "</td>" +
                                    "<th>" +
                                        "<button class='btn btn-danger' onclick='removeRow(this)' style='background-color: #827e89'>Quitar</button>" +
                                    "</th>" +
                                    "</tr>");
    }

    function addBody2Annexed1(){
        var Periodo12 = $('#Periodo12').val();
        var Cumple11 = $('#Cumple11').val();
        var Cumple12 = $('#Cumple12').val();

        $('#Cuerpo2Anexo1').append("<tr>" +
                                    "<td>" + Periodo12 + "</td>" +
                                    "<td>" + Cumple11 + "</td>" +
                                    "<td>" + Cumple12 + "</td>" +
                                    "<th>" +
                                        "<button class='btn btn-danger' onclick='removeRow(this)'>Quitar</button>" +
                                    "</th>" +
                                    "</tr>");
    }

    function removeRow(row){
        $(row).closest("tr").remove();
    }

    function constructDataAnnexed1(){
        /* Tabla 1 */
        var table1Annexed1 = document.getElementById('Cuerpo1Anexo1');
        var addTable_Content_1 = {};
        for(var i = 0; i < table1Annexed1.rows.length; i++) {
            addTable_Content_1["Fila_" + (i + 1)] = {};
            var temp = []
            for(var j = 0; j < 4; j++){
                temp.push(table1Annexed1.rows[i].cells[j].innerHTML);
            }
            addTable_Content_1["Fila_" + (i + 1)] = temp;
        }

        jsonComplete.content.addTable_Contents["addTable_Content_1"] = addTable_Content_1;

        /* Tabla 2 */
        var table2Annexed1 = document.getElementById('Cuerpo2Anexo1');
        var addNewTable_Content = {};
        for(var i = 0; i < table2Annexed1.rows.length; i++) {
            addNewTable_Content["Fila_" + (i + 1)] = {};
            var temp = []
            for(var j = 0; j < 3; j++){
                temp.push(table2Annexed1.rows[i].cells[j].innerHTML);
            }
            addNewTable_Content["Fila_" + (i + 1)] = temp;
        }

        jsonComplete.content["addNewTable_Content"] = addNewTable_Content;

    }

    function sendDataAnnexed1(){
        $('#Exportar').prop('disabled', true);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        constructDataAnnexed1();
        $.ajax({
            type: 'POST',
            url: "/create_annexed",
            data: { jsonComplete },
            xhrFields: {
                responseType: 'blob'
            },
            success: function(response) {
                $('#Exportar').prop('disabled', false);
                var blob = new Blob([response]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "Anexo 1 - " + getCurrentDate() + ".xlsx";
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
