<!-- Ingresar Datos de Presupuesto  de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <!-- Contenido -->
    <br>
    <div class="card">
        <div class="card-header card__header-modified text-white">
            <h5>Documentación Presentada a la Auditoria Superior del Estado</h5>
        </div>
        <div class="card-body" id="MesesAnexo4">

            <!-- Card Totales Anuales -->
            <div class="card">
                <div class="card-header">
                    Cantidades Totales Anuales
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <label for="">Folios Recibidos Totales</label>
                                <input type="number" class="form-control" value="0" id="TotalFolios" readonly>
                            </div>
                            <div class="col">
                                <label for="">Legajos Totales</label>
                                <input type="number" class="form-control" value="0" id="TotalLegajos" readonly>
                            </div>
                            <div class="col">
                                <label for="">Medios Mágneticos Totales</label>
                                <input type="number" class="form-control" value="0" id="TotalMagneticos" readonly>
                            </div>
                        </div>
                    </form>
               </div>
            </div><br>
            <!-- Card Totales Anuales -->

            <!-- Botones de Años -->
            <div class="row">
                @foreach($months as $month)
                <div class="col-md-3 mt-2">
                    <button class="btn btn-danger btn-block" type="button" data-toggle="collapse" data-target="#Month-{{ $month }}" aria-expanded="false" aria-controls="collapseExample">
                        {{ $month }}
                    </button>
                </div>
                @endforeach
            </div>
            <br>
            <!-- Botones de Años -->

            <!-- Cards de Años -->

            @foreach($months as $month)
            <div class="collapse" id="Month-{{ $month }}" data-parent="#MesesAnexo4">

                @foreach($categories as $cat)
                <!-- Cards -->
                <div class="card">
                    <div class="card-header">
                      {{ $cat["nombre"] }} de {{ $month }}
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Folios Recibidos:</label>
                                    <input type="number" class="form-control" placeholder="Folio Recibido" value="{{ rand(1, 999) }}" id="Folios-{{ $cat["id"] }}-{{ $month }}" onchange="CambiarTotalesPorMes('{{ $month }}', 'Folios')">
                                </div>
                                <div class="col">
                                    <label for="">Legajos:</label>
                                    <input type="number" class="form-control" placeholder="Legajos" value="{{ rand(1, 999) }}" id="Legajos-{{ $cat["id"] }}-{{ $month }}" onchange="CambiarTotalesPorMes('{{ $month }}', 'Legajos')">
                                </div>
                                <div class="col">
                                    <label for="">Medios Mágneticos:</label>
                                    <input type="number" class="form-control" placeholder="Medios Magnéticos"  value="{{ rand(1, 999) }}" id="Magneticos-{{ $cat["id"] }}-{{ $month }}" onchange="CambiarTotalesPorMes('{{ $month }}', 'Magneticos')">
                                </div>
                            </div>
                        </form>
                    </div>
                 </div><br>
                 <!-- Cards -->
                @endforeach


                 <!-- Card Totales por Mes -->
                 <div class="card">
                     <div class="card-header">
                         Cantidades Totales del mes de {{ $month }}
                     </div>
                     <div class="card-body">
                         <form>
                             <div class="form-row">
                                 <div class="col">
                                     <label for="">Folios Recibidos Totales de {{ $month }}:</label>
                                     <input type="number" class="form-control" value="0" id="TotalFolios-{{ $month }}" readonly onchange="CambiarTotalesPorAno('{{ $month }}', 'Folios')">
                                 </div>
                                 <div class="col">
                                     <label for="">Legajos Totales de {{ $month }}</label>
                                     <input type="number" class="form-control" value="0" id="TotalLegajos-{{ $month }}" readonly onchange="CambiarTotalesPorAno('{{ $month }}', 'Legajos')">
                                 </div>
                                 <div class="col">
                                     <label for="">Medios Mágneticos Totales de {{ $month }}</label>
                                     <input type="number" class="form-control" value="0" id="TotalMagneticos-{{ $month }}" readonly onchange="CambiarTotalesPorAno('{{ $month }}', 'Magneticos')">
                                 </div>
                             </div>
                         </form>
                    </div>
                 </div><br>
                 <!-- Card Totales por Mes -->

                 <!-- Totales Escondidos -->
                 <input type="hidden" class="form-control" value="0" id="TotalEneroAJunio">
                 <input type="hidden" class="form-control" value="0" id="TotalJulioAOctubre">
                 <!-- Totales Escondidos -->



            </div>
            @endforeach
            <!-- Cards de Meses -->

          </div>
    </div>
    <!-- Contenido 1 -->
</div>
<!-- Ingresar Datos de Presupuesto  de Ingresos y Egresos, Programa Presupuestario, Informes de Gobierno, Recomendaciones, Plan Anual de Evaluación -->

<!-- Funciones JS -->
<script>

    var jsonComplete = {
        "nameFile": "Anexo4Generado.xlsx",
        "file": "anexo4.xlsx",
        "methods": [
            "addFormat",
            "addTable",
            "saveFile"
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
                        "N10",
                        "O10",
                        "P10",
                        "Q10",
                        "R10",
                        "S10",
                        "T10",
                        "U10"
                    ]
                }
            },
            "addTable_Columns": [
                "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U"
                ]
        }
    }

	var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre"];
    var categorias = ["Presupuestario", "Financiero", "Impuesto", "Ajustes", "Informe", "Copia", "Formatos", "Reportes"];
    var totalesMes = [];
    var Folios = { "Enero": 0, "Febrero": 0, "Marzo": 0, "Abril": 0, "Mayo": 0, "Junio": 0, "Julio": 0, "Agosto": 0, "Septiembre": 0, "Octubre": 0 };
    var Legajos = { "Enero": 0, "Febrero": 0, "Marzo": 0, "Abril": 0, "Mayo": 0, "Junio": 0, "Julio": 0, "Agosto": 0, "Septiembre": 0, "Octubre": 0 };
    var Medios = { "Enero": 0, "Febrero": 0, "Marzo": 0, "Abril": 0, "Mayo": 0, "Junio": 0, "Julio": 0, "Agosto": 0, "Septiembre": 0, "Octubre": 0 };
    totalesMes['Folios'] = Folios;
    totalesMes['Legajos'] = Legajos;
    totalesMes['Medios'] = Medios;
    var totalesAnuales = [];
	totalesAnuales['Folios'] = 0;
	totalesAnuales['Legajos'] = 0;
	totalesAnuales['Medios'] = 0;

    function constructDataAnnexed4(){
        var categories = ["Folios", "Legajos", "Magneticos"];
        var months1 = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"];
        var months2 = ["Julio", "Agosto", "Septiembre", "Octubre"];
        /* Totales globales */
        var legajosTotalesGlobales = 0;
        var magneticosTotalesGlobales = 0;

        /**
        *
        * ! Se agregan los primeros meses
        *
        **/
        var legajosTotalesTemporales = 0;
        var magneticosTotalesTemporales = 0;
        for(var i = 0; i < categorias.length; i++){
            var arrTemp = [];
            for(var j = 0; j < months1.length; j++){
                arrTemp.push($('#Folios-' + categorias[i] + '-' + months1[j]).val());
                arrTemp.push($('#Legajos-' + categorias[i] + '-' + months1[j]).val());
                arrTemp.push($('#Magneticos-' + categorias[i] + '-' + months1[j]).val());
                legajosTotalesTemporales += parseInt($('#Legajos-' + categorias[i] + '-' + months1[j]).val());
                magneticosTotalesTemporales += parseInt($('#Magneticos-' + categorias[i] + '-' + months1[j]).val());
            }

            legajosTotalesGlobales += legajosTotalesTemporales;
            magneticosTotalesGlobales += magneticosTotalesTemporales;
            arrTemp.push(legajosTotalesTemporales);
            arrTemp.push(magneticosTotalesTemporales);
            //Se reinician totales
            legajosTotalesTemporales = 0;
            magneticosTotalesTemporales = 0;
            //Se añade al json
            jsonComplete['content']['addTable_Contents']['addTable_Content_1']['Fila_' + (i + 1)] = arrTemp;
        }


        /**
        *
        * ! Se agregan los primeros espacios vacios
        *
        **/
        var arrTempVacio = [];
        for(var k = 0; k < 20; k++){
            arrTempVacio.push(" ");
        }
        //Se añade al json
        jsonComplete['content']['addTable_Contents']['addTable_Content_1']['Fila_9'] = arrTempVacio;

        /**
        *
        * ! Se agregan los totales de las columnas
        *
        **/
        var arrTotalesPorMes = [];
        for(var h = 0; h < months1.length; h++){
            console.log($('#TotalFolios-' + months1[h]).val());
            arrTotalesPorMes.push($('#TotalFolios-' + months1[h]).val());
            arrTotalesPorMes.push($('#TotalLegajos-' + months1[h]).val());
            arrTotalesPorMes.push($('#TotalMagneticos-' + months1[h]).val());
        }
        arrTotalesPorMes.push(legajosTotalesGlobales + magneticosTotalesGlobales);
        arrTotalesPorMes.push(" ");
        //Se añade al json
        jsonComplete['content']['addTable_Contents']['addTable_Content_1']['Fila_10'] = arrTotalesPorMes;


        /**
        *
        * ! Se agregan los segundos espacios vacios
        *
        **/
        var arrTempVacio = [];
        for(var k = 0; k < 20; k++){
            arrTempVacio.push(" ");
        }
        //Se añade al json
        jsonComplete['content']['addTable_Contents']['addTable_Content_1']['Fila_11'] = arrTempVacio;
        jsonComplete['content']['addTable_Contents']['addTable_Content_1']['Fila_12'] = arrTempVacio;


        /**
        *
        * ! Se agregan los segundos meses
        *
        **/
        var legajosTotalesGlobales = 0;
        var magneticosTotalesGlobales = 0;
        var legajosTotalesTemporales = 0;
        var magneticosTotalesTemporales = 0;
        var l = 13;
        for(var i = 0; i < categorias.length; i++){
            var arrTemp = [];
            for(var j = 0; j < months2.length; j++){
                arrTemp.push($('#Folios-' + categorias[i] + '-' + months2[j]).val());
                arrTemp.push($('#Legajos-' + categorias[i] + '-' + months2[j]).val());
                arrTemp.push($('#Magneticos-' + categorias[i] + '-' + months2[j]).val());
                legajosTotalesTemporales += parseInt($('#Legajos-' + categorias[i] + '-' + months2[j]).val());
                magneticosTotalesTemporales += parseInt($('#Magneticos-' + categorias[i] + '-' + months2[j]).val());
            }
            //Se añaden 6 columnas vacias por el formato
            for(var o = 0; o < 6; o++){
                arrTemp.push(" ");
            }
            legajosTotalesGlobales += legajosTotalesTemporales;
            magneticosTotalesGlobales += magneticosTotalesTemporales;
            arrTemp.push(legajosTotalesTemporales);
            arrTemp.push(magneticosTotalesTemporales);
            //Se reinician totales
            legajosTotalesTemporales = 0;
            magneticosTotalesTemporales = 0;
            //Se añade al json
            jsonComplete['content']['addTable_Contents']['addTable_Content_1']['Fila_' + (l)] = arrTemp;
            l++;
        }
    }

    function sendDataAnnexed4(){
        constructDataAnnexed4();
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
                link.download = "Anexo 4 - " + getCurrentDate() + ".xlsx";
                link.click();
            },
            error: function(response) {
                console.log("Error");
                console.log(response);
            }
        });
    }

    /*
    *   ! Función para cambiar las cantidades totales por mes
    */
    function CambiarTotalesPorMes(mes, area){
        var res = 0;
        for(var i = 0; i < categorias.length; i++){
            res += parseInt($('#' + area + '-' + categorias[i] + '-' + mes).val());
        }
        $('#Total' + area + '-' + mes).val(res);
        CambiarTotalesPorAno(mes, area);
    }

    /*
    *   ! Función para cambiar las cantidades totales por año
    */
    function CambiarTotalesPorAno(mes, area){
        var res2 = 0;
        for(var i = 0; i < meses.length; i++){
            res2 += parseInt($('#Total' + area + '-' + meses[i]).val());
        }
        $('#Total' + area).val(res2);

    }

</script>
<!-- Funciones JS -->
