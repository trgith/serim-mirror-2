<!-- Ingresar Datos de Estructura Organica -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- Contenido 1 -->
    <br>
    <div class="card">
        <div class="card-header">
            <h5>Estructura Orgánica</h5>
        </div>
        <div class="card-body">

            <!-- Tabla 1 -->
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <label>Número</label>
                            <input type="number" class="form-control" id="Numero2">
                        </th>
                        <th scope="col">
                            <label>Nombre del Manual, Ley o Reglamento</label>
                            <input type="text" class="form-control" id="Nombre2">
                        </th>
                        <th scope="col">
                            <label>Fecha de Emisión</label>
                            <input type="date" class="form-control" id="Fecha2">
                        </th>
                        <th scope="col">
                            <label>Nombre del Responsable</label>
                            <input type="text" class="form-control" id="Responsable2">
                        </th>
                        <th scope="col">
                            <label>Área</label>
                            <input type="text" class="form-control" id="Area2">
                        </th>
                        <th scope="col">
                            <label>&nbsp;</label>
                            <button class="btn btn-danger" onclick="AgregarFila3()" style="background-color: #2E3950">Agregar</button>
                        </th>
                    </tr>
                </thead>
                <tbody id="CuerpoTabla3">

                </tbody>
            </table>
            </div>
            <!-- Tabla 1 -->

        </div>
    </div>
    <!-- Contenido 1 -->
</div>
<!-- Ingresar Datos de Estructura Organica -->

<!-- Ingresar Datos de Estructura Organica -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- Contenido 1 -->
    <br>
    <div class="card">
        <div class="card-header">
            <h5>Anexar Archivos</h5>
        </div>
        <div class="card-body">

            <!-- Subir archivos -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Anexar Organigrama</label>
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

<!-- Funciones JS -->
<script>
    var jsonComplete = {
        "nameFile": "Anexo2.xlsx",
        "file": "anexo2.xlsx",
        "methods": [
            "addFormat",
            "addTable",
            "saveFile"
        ],
        "content": {
            "beginRow": 29,
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
            "addTable_Columns": [
                "A", "B", "C", "D", "E"
            ]
        }
    }

    function constructDataAnnexed2(){
        /* Tabla 1 */
        var table1Annexed1 = document.getElementById('CuerpoTabla3');
        var addTable_Content_1 = {};
        for(var i = 0; i < table1Annexed1.rows.length; i++) {
            addTable_Content_1["Fila_" + (i + 1)] = {};
            var temp = []
            for(var j = 0; j < 5; j++){
                temp.push(table1Annexed1.rows[i].cells[j].innerHTML);
            }
            addTable_Content_1["Fila_" + (i + 1)] = temp;
        }

        jsonComplete.content.addTable_Contents["addTable_Content_1"] = addTable_Content_1;
    }

    function sendDataAnnexed2(){
        $('#Exportar').prop('disabled', true);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        constructDataAnnexed2();
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
                link.download = "Anexo 2 - " + getCurrentDate() + ".xlsx";
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
