@extends('dashboard.base')

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header card__header-modified">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="users__title">Construir Anexo {{ $annexedNumber }}</h4>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-6 text-right">
                                    <button class="btn" style="background-color: #318769; color: white;">Guardar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn" style="background-color: #318769; color: white;" onclick="sendData({{ $annexedNumber }})" id="Exportar">Exportar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        @switch($annexedNumber)
                            @case(1)
                                @include('annexes.forms_annexes.annexed_1')
                                @break

                            @case(2)
                                @include('annexes.forms_annexes.annexed_2')
                                @break

                            @case(3)
                                @include('annexes.forms_annexes.annexed_3')
                                @break

                            @case(4)
                                @include('annexes.forms_annexes.annexed_4')
                                @break

                            @case(5)
                                @include('annexes.forms_annexes.annexed_5')
                                @break

                            @case(6)
                                @include('annexes.forms_annexes.annexed_6')
                                @break

                            @case(7)
                                @include('annexes.forms_annexes.annexed_7')
                                @break

                            @case(8)
                                @include('annexes.forms_annexes.annexed_8')
                                @break

                            @case(9)
                                @include('annexes.forms_annexes.annexed_9')
                                @break

                            @case(10)
                                @include('annexes.forms_annexes.annexed_10')
                                @break

                            @case(11)
                                @include('annexes.forms_annexes.annexed_11')
                                @break

                            @case(12)
                                @include('annexes.forms_annexes.annexed_12')
                                @break

                            @case(13)
                                @include('annexes.forms_annexes.annexed_13')
                                @break

                            @case(14)
                                @include('annexes.forms_annexes.annexed_14')
                                @break

                            @case(15)
                                @include('annexes.forms_annexes.annexed_15')
                                @break

                            @default
                                Default case...
                        @endswitch

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>

<script>
    /*
    *
    *  ! TODO Función que retorna la fecha actual en formato MM/DD/YYYY
    *
    * */
    function getCurrentDate(){
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;

        return today;
    }

    function sendData(annexedNumber){
        switch (annexedNumber) {
            case 1:
                sendDataAnnexed1();
                break;
            case 2:
                sendDataAnnexed2();
                break;
            case 3:
                sendDataAnnexed3();
                break;
            case 4:
                sendDataAnnexed4();
                break;
            case 5:
                sendDataAnnexed5();
                break;
            default:
                break;
        }
    }

    /* Esto es para esconder los cuerpos del Anexo 10
    $('#CuerpoCardAnexo10-1').hide();
    $('#CuerpoCardAnexo10-2').hide();
    $('#CuerpoCardAnexo10-3').hide();
    $('#CuerpoCardAnexo10-4').hide();
    $('#CuerpoCardAnexo10-5').hide();
    $('#CuerpoCardAnexo10-6').hide();
    */



function AgregarFila1(){
  var Periodo1 = $('#Periodo1').val();
  var FechaPresentacion = $('#FechaPresentacion').val();
  var Folio = $('#Folio').val();
  var FechaPublicacion = $('#FechaPublicacion').val();

  $('#CuerpoTabla1').append("<tr>" +
                              "<td>" + Periodo1 + "</td>" +
                              "<td>" + FechaPresentacion + "</td>" +
                              "<td>" + Folio + "</td>" +
                              "<td>" +  FechaPublicacion + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarFila2(){
  var Periodo2 = $('#Periodo2').val();
  var Cumple1 = $('#Cumple1').val();
  var Cumple2 = $('#Cumple2').val();

  $('#CuerpoTabla2').append("<tr>" +
                              "<td>" + Periodo2 + "</td>" +
                              "<td>" + Cumple1 + "</td>" +
                              "<td>" + Cumple2 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarFila3(){
  var Numero2 = $('#Numero2').val();
  var Nombre2 = $('#Nombre2').val();
  var Fecha2 = $('#Fecha2').val();
  var Responsable2 = $('#Responsable2').val();
  var Area2 = $('#Area2').val();

  $('#CuerpoTabla3').append("<tr>" +
                              "<td>" + Numero2 + "</td>" +
                              "<td>" + Nombre2 + "</td>" +
                              "<td>" + Fecha2 + "</td>" +
                              "<td>" + Responsable2 + "</td>" +
                              "<td>" + Area2 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)' style='background-color: #827E89'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarFila4(){
  var Nombre4 = $('#Nombre4').val();
  var Usuario4 = $('#Usuario4').val();
  var Contrasena4 = $('#Contrasena4').val();

  $('#CuerpoTabla4').append("<tr>" +
                              "<td>" + Nombre4 + "</td>" +
                              "<td>" + Usuario4 + "</td>" +
                              "<td>" + Contrasena4 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function CambiarFoliosTotales(){
  var sumaTotal = 0;
  for(var i = 1; i <= 7; i++){
    sumaTotal += parseInt($('#Folios' + i).val(), 10);
  }
  $('#TotalFolios').val(sumaTotal);
}

function CambiarLegajosTotales(){
  var sumaTotal = 0;
  for(var i = 1; i <= 7; i++){
    sumaTotal += parseInt($('#Legajos' + i).val(), 10);
  }
  $('#TotalLegajos').val(sumaTotal);
}

function CambiarMediosMagneticosTotales(){
  var sumaTotal = 0;
  for(var i = 1; i <= 7; i++){
    sumaTotal += parseInt($('#Magneticos' + i).val(), 10);
  }
  $('#MagneticosTotales').val(sumaTotal);
}

function AgregarFila5(){
  var Fecha5 = $('#Fecha5').val();
  var FolioCFDI5 = $('#FolioCFDI5').val();
  var RFC5 = $('#RFC5').val();
  var CRI5 = $('#CRI5').val();
  var Expedido5 = $('#Expedido5').val();
  var Comprobante5 = $('#Comprobante5').val();
  var Concepto5 = $('#Concepto5').val();
  var Importe5 = $('#Importe5').val();
  var Tipo5 = $('#Tipo5').val();

  $('#CuerpoTabla5').append("<tr>" +
                              "<td>" + Fecha5 + "</td>" +
                              "<td>" + FolioCFDI5 + "</td>" +
                              "<td>" + Comprobante5 + "</td>" +
                              "<td>" + Concepto5 + "</td>" +
                              "<td>" + Importe5 + "</td>" +
                              "<td>" + Tipo5 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarFila6(){
  var Fecha6 = $('#Fecha6').val();
  var Documento6 = $('#Documento6').val();
  var FolioCFDI6 = $('#FolioCFDI6').val();
  var FechaCFDI6 = $('#FechaCFDI6').val();
  var COG6 = $('#COG6').val();
  var Gasto6 = $('#Gasto6').val();
  var Cuentas6 = $('#Cuentas6').val();
  var Expedido6 = $('#Expedido6').val();
  var Concepto6 = $('#Concepto6').val();
  var Importe6 = $('#Importe6').val();

  $('#CuerpoTabla6').append("<tr>" +
                              "<td>" + Fecha6 + "</td>" +
                              "<td>" + FolioCFDI6 + "</td>" +
                              "<td>" + COG6 + "</td>" +
                              "<td>" + Gasto6 + "</td>" +
                              "<td>" + Concepto6 + "</td>" +
                              "<td>" + Importe6 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarFila7(){
  var Fecha7 = $('#Fecha7').val();
  var Cheque7 = $('#Cheque7').val();
  var Expedido7 = $('#Expedido7').val();
  var Importe7 = $('#Importe7').val();

  $('#CuerpoTabla7').append("<tr>" +
                              "<td>" + Fecha7 + "</td>" +
                              "<td>" + Cheque7 + "</td>" +
                              "<td>" + Expedido7 + "</td>" +
                              "<td>" + Importe7 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function ActualizarLibroDiarioTotal(){
  var sumaTotal = 0;
  for(var i = 1; i <= 4; i++){
    sumaTotal += parseInt($('#LibroDiario' + i).val(), 10);
  }
  $('#totalLibroDiario').val(sumaTotal);
}

function ActualizarLibroMayorTotal(){
  var sumaTotal = 0;
  for(var i = 1; i <= 4; i++){
    sumaTotal += parseInt($('#LibroMayor' + i).val(), 10);
  }
  $('#totalLibroMayor').val(sumaTotal);
}

function ActualizarLibroInventariosTotal(){
  var sumaTotal = 0;
  for(var i = 1; i <= 4; i++){
    sumaTotal += parseInt($('#LibroInventarios' + i).val(), 10);
  }
  $('#totalLibroInventarios').val(sumaTotal);
}

function AgregarRowAnexo9(){
  var NombreAnexo9 = $('#NombreAnexo9').val();
  var FechaAnexo9 = $('#FechaAnexo9').val();
  var FolioAnexo9 = $('#FolioAnexo9').val();

  $('#CuerpoAnexo9').append("<tr>" +
                              "<td>" + NombreAnexo9 + "</td>" +
                              "<td>" + FechaAnexo9 + "</td>" +
                              "<td>" + FolioAnexo9 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");

  $('#NombreAnexo9').val(' ');
  $('#FechaAnexo9').val(' ');
  $('#FolioAnexo9').val(' ');
}

function EsconderCuerpoAnexo10(idCuerpo){
  $('#CuerpoCardAnexo10-' + idCuerpo).hide();
  $('#MostrarCuerpoAnexo-' + idCuerpo).css("display", "inline-block");
  $('#EsconderCuerpoAnexo-' + idCuerpo).css("display", "none");
}

function MostrarCuerpoAnexo10(idCuerpo){
  $('#CuerpoCardAnexo10-' + idCuerpo).show();
  $('#MostrarCuerpoAnexo-' + idCuerpo).css("display", "none");
  $('#EsconderCuerpoAnexo-' + idCuerpo).css("display", "inline-block");
}

function AgregarTabla111(){
  var fecha = $('#Fecha11-1').val();
  var concepto = $('#Concepto11-1').val();
  var cantidad = $('#Cantidad11-1').val();

  $('#CuerpoTabla1Anexo11').append("<tr>" +
                              "<td>" + fecha + "</td>" +
                              "<td>" + concepto + "</td>" +
                              "<td>" + cantidad + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla112(){
  var fecha = $('#Fecha11-2').val();
  var concepto = $('#Concepto11-2').val();
  var cantidad = $('#Cantidad11-2').val();

  $('#CuerpoTabla2Anexo11').append("<tr>" +
                              "<td>" + fecha + "</td>" +
                              "<td>" + concepto + "</td>" +
                              "<td>" + cantidad + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla113(){
  var fecha = $('#Fecha11-3').val();
  var concepto = $('#Concepto11-3').val();
  var cantidad = $('#Cantidad11-3').val();

  $('#CuerpoTabla3Anexo11').append("<tr>" +
                              "<td>" + fecha + "</td>" +
                              "<td>" + concepto + "</td>" +
                              "<td>" + cantidad + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla12(){
  var numCuenta = $('#NumCuenta12').val();
  var codigo = $('#Codigo12').val();
  var poliza = $('#Poliza12').val();
  var concepto = $('#Concepto12').val();
  var institucion = $('#Institucion12').val();
  var financiamiento = $('#Financiamiento12').val();
  var clasificador = $('#Clasificador12').val();
  var ultimo = $('#Ultimo12').val();
  var fecha = $('#Fecha12').val();
  var importe = $('#Importe12').val();
  var recurso = $('#Recurso12').val();
  var beneficiario = $('#Beneficiario12').val();

  $('#CuerpoTabla12').append("<tr>" +
                              "<td>" + numCuenta + "</td>" +
                              "<td>" + codigo + "</td>" +
                              "<td>" + poliza + "</td>" +
                              "<td>" + concepto + "</td>" +
                              "<td>" + institucion + "</td>" +
                              "<td>" + financiamiento + "</td>" +
                              "<td>" + clasificador + "</td>" +
                              "<td>" + ultimo + "</td>" +
                              "<td>" + fecha + "</td>" +
                              "<td>" + importe + "</td>" +
                              "<td>" + recurso + "</td>" +
                              "<td>" + beneficiario + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla13(){
  var Fecha13 = $('#Fecha13').val();
  var Cheque13 = $('#Cheque13').val();
  var Numero13 = $('#Numero13').val();
  var Banco13 = $('#Banco13').val();
  var Codigo13 = $('#Codigo13').val();
  var Poliza13 = $('#Poliza13').val();
  var Concepto13 = $('#Concepto13').val();
  var Fuente13 = $('#Fuente13').val();
  var Clasificador13 = $('#Clasificador13').val();
  var Fecha213 = $('#Fecha213').val();
  var Concepto213 = $('#Concepto213').val();
  var Importe13 = $('#Importe13').val();
  var Beneficiario13 = $('#Beneficiario13').val();
  var Observaciones13 = $('#Observaciones13').val();

  $('#CuerpoTabla13').append("<tr>" +
                              "<td>" + Fecha13 + "</td>" +
                              "<td>" + Cheque13 + "</td>" +
                              "<td>" + Numero13 + "</td>" +
                              "<td>" + Banco13 + "</td>" +
                              "<td>" + Codigo13 + "</td>" +
                              "<td>" + Poliza13 + "</td>" +
                              "<td>" + Concepto13 + "</td>" +
                              "<td>" + Fuente13 + "</td>" +
                              "<td>" + Clasificador13 + "</td>" +
                              "<td>" + Fecha213 + "</td>" +
                              "<td>" + Concepto213 + "</td>" +
                              "<td>" + Importe13 + "</td>" +
                              "<td>" + Beneficiario13 + "</td>" +
                              "<td>" + Observaciones13 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla14(){
  var Lisa14 = $('#Lisa14').val();
  var Fuente14 = $('#Fuente14').val();
  var Cuenta14 = $('#Cuenta14').val();
  var Banco14 = $('#Banco14').val();
  var Nombre14 = $('#Nombre14').val();
  var Fecha14 = $('#Fecha14').val();

  $('#CuerpoTabla14').append("<tr>" +
                              "<td>" + Lisa14 + "</td>" +
                              "<td>" + Fuente14 + "</td>" +
                              "<td>" + Cuenta14 + "</td>" +
                              "<td>" + Banco14 + "</td>" +
                              "<td>" + Nombre14 + "</td>" +
                              "<td>" + Fecha14 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla15(){
  var Numero15 = $('#Numero15').val();
  var Nombre15 = $('#Nombre15').val();
  var Existe15 = $('#Existe15').val();
  var Responsable15 = $('#Responsable15').val();
  var Medios15 = $('#Medios15').val();
  var Area15 = $('#Area15').val();

  $('#CuerpoTabla15').append("<tr>" +
                              "<td>" + Numero15 + "</td>" +
                              "<td>" + Nombre15 + "</td>" +
                              "<td>" + Existe15 + "</td>" +
                              "<td>" + Responsable15 + "</td>" +
                              "<td>" + Medios15 + "</td>" +
                              "<td>" + Area15 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla16(){
  var Nombre16 = $('#Nombre16').val();
  var Lista16 = $('#Lista16').val();
  var Clasificado16 = $('#Clasificado16').val();
  var Tipo16 = $('#Tipo16').val();
  var Tipo216 = $('#Tipo216').val();
  var Formato16 = $('#Formato16').val();
  var Folios16 = $('#Folios16').val();
  var Precio16 = $('#Precio16').val();
  var Importe16 = $('#Importe16').val();

  $('#CuerpoTabla16').append("<tr>" +
                              "<td>" + Nombre16 + "</td>" +
                              "<td>" + Lista16 + "</td>" +
                              "<td>" + Clasificado16 + "</td>" +
                              "<td>" + Tipo16 + "</td>" +
                              "<td>" + Tipo216 + "</td>" +
                              "<td>" + Formato16 + "</td>" +
                              "<td>" + Folios16 + "</td>" +
                              "<td>" + Precio16 + "</td>" +
                              "<td>" + Importe16 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla17(){
  var Numero17 = $('#Numero17').val();
  var Lista17 = $('#Lista17').val();
  var Clasificador17 = $('#Clasificador17').val();
  var Codigo17 = $('#Codigo17').val();
  var Fecha71 = $('#Fecha71').val();
  var Tipo17 = $('#Tipo17').val();
  var Descripcion17 = $('#Descripcion17').val();
  var Valor17 = $('#Valor17').val();
  var Ubicacion17 = $('#Ubicacion17').val();

  $('#CuerpoTabla17').append("<tr>" +
                              "<td>" + Numero17 + "</td>" +
                              "<td>" + Lista17 + "</td>" +
                              "<td>" + Clasificador17 + "</td>" +
                              "<td>" + Codigo17 + "</td>" +
                              "<td>" + Fecha71 + "</td>" +
                              "<td>" + Tipo17 + "</td>" +
                              "<td>" + Descripcion17 + "</td>" +
                              "<td>" + Valor17 + "</td>" +
                              "<td>" + Ubicacion17 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla172(){
  var Codigo172 = $('#Codigo172').val();
  var Poliza172 = $('#Poliza172').val();
  var Ejercicio172 = $('#Ejercicio172').val();
  var Listado172 = $('#Listado172').val();
  var Clasificador172 = $('#Clasificador172').val();
  var Importe172 = $('#Importe172').val();

  $('#CuerpoTabla172').append("<tr>" +
                              "<td>" + Codigo172 + "</td>" +
                              "<td>" + Poliza172 + "</td>" +
                              "<td>" + Ejercicio172 + "</td>" +
                              "<td>" + Clasificador172 + "</td>" +
                              "<td>" + Importe172 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla18(){
  var Fecha18 = $('#Fecha18').val();
  var Lista18 = $('#Lista18').val();
  var Clasificador18 = $('#Clasificador18').val();
  var Codigo18 = $('#Codigo18').val();
  var Fecha218 = $('#Fecha218').val();
  var Folio18 = $('#Folio18').val();
  var Concepto18 = $('#Concepto18').val();
  var Costo18 = $('#Costo18').val();
  var Secretaria18 = $('#Secretaria18').val();
  var Inventario18 = $('#Inventario18').val();
  var Resguardante18 = $('#Resguardante18').val();
  var Ubicacion18 = $('#Ubicacion18').val();



  $('#CuerpoTabla18').append("<tr>" +
                              "<td>" + Fecha18 + "</td>" +
                              "<td>" + Lista18 + "</td>" +
                              "<td>" + Clasificador18 + "</td>" +
                              "<td>" + Codigo18 + "</td>" +
                              "<td>" + Fecha218 + "</td>" +
                              "<td>" + Folio18 + "</td>" +
                              "<td>" + Concepto18 + "</td>" +
                              "<td>" + Costo18 + "</td>" +
                              "<td>" + Secretaria18 + "</td>" +
                              "<td>" + Inventario18 + "</td>" +
                              "<td>" + Resguardante18 + "</td>" +
                              "<td>" + Ubicacion18 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla19(){
  var Numero19 = $('#Numero19').val();
  var Tipo19 = $('#Tipo19').val();
  var Proveedor19 = $('#Proveedor19').val();
  var Objeto19 = $('#Objeto19').val();
  var Periodo19 = $('#Periodo19').val();
  var Monto19 = $('#Monto19').val();
  var Devengado19 = $('#Devengado19').val();
  var Saldo19 = $('#Saldo19').val();



  $('#CuerpoTabla19').append("<tr>" +
                              "<td>" + Numero19 + "</td>" +
                              "<td>" + Tipo19 + "</td>" +
                              "<td>" + Proveedor19 + "</td>" +
                              "<td>" + Objeto19 + "</td>" +
                              "<td>" + Periodo19 + "</td>" +
                              "<td>" + Monto19 + "</td>" +
                              "<td>" + Devengado19 + "</td>" +
                              "<td>" + Saldo19 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla192(){
  var Poliza192 = $('#Poliza192').val();
  var Lista192 = $('#Lista192').val();
  var Importe192 = $('#Importe192').val();


  $('#CuerpoTabla192').append("<tr>" +
                              "<td>" + Poliza192 + "</td>" +
                              "<td>" + Lista192 + "</td>" +
                              "<td>" + Importe192 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla193(){
  var Poliza193 = $('#Poliza193').val();
  var Lista193 = $('#Lista193').val();
  var Importe193 = $('#Importe193').val();


  $('#CuerpoTabla193').append("<tr>" +
                              "<td>" + Poliza193 + "</td>" +
                              "<td>" + Lista193 + "</td>" +
                              "<td>" + Importe193 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla20(){
  var Numero20 = $('#Numero20').val();
  var Responsable20 = $('#Responsable20').val();
  var Ubicacion20 = $('#Ubicacion20').val();
  var Combinacion20 = $('#Combinacion20').val();
  var Marca20 = $('#Marca20').val();
  var Modelo20 = $('#Modelo20').val();
  var Serie20 = $('#Serie20').val();

  $('#CuerpoTabla20').append("<tr>" +
                              "<td>" + Numero20 + "</td>" +
                              "<td>" + Responsable20 + "</td>" +
                              "<td>" + Ubicacion20 + "</td>" +
                              "<td>" + Combinacion20 + "</td>" +
                              "<td>" + Marca20 + "</td>" +
                              "<td>" + Modelo20 + "</td>" +
                              "<td>" + Serie20 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla21(){
  var Numero21 = $('#Numero21').val();
  var Lugar21 = $('#Lugar21').val();
  var Responsable21 = $('#Responsable21').val();
  var DelFolio21 = $('#DelFolio21').val();
  var AlFolio21 = $('#AlFolio21').val();
  var DelFecha21 = $('#DelFecha21').val();
  var AlFecha21 = $('#AlFecha21').val();

  $('#CuerpoTabla21').append("<tr>" +
                              "<td>" + Numero21 + "</td>" +
                              "<td>" + DelFolio21 + "</td>" +
                              "<td>" + AlFolio21 + "</td>" +
                              "<td>" + DelFecha21 + "</td>" +
                              "<td>" + AlFecha21 + "</td>" +
                              "<td>" + Lugar21 + "</td>" +
                              "<td>" + Responsable21 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla212(){
  var Numero212 = $('#Numero212').val();
  var Lugar212 = $('#Lugar212').val();
  var Responsable212 = $('#Responsable212').val();
  var DelFolio212 = $('#DelFolio212').val();
  var AlFolio212 = $('#AlFolio212').val();
  var DelFecha212 = $('#DelFecha212').val();
  var AlFecha212 = $('#AlFecha212').val();

  $('#CuerpoTabla212').append("<tr>" +
                              "<td>" + Numero212 + "</td>" +
                              "<td>" + DelFolio212 + "</td>" +
                              "<td>" + AlFolio212 + "</td>" +
                              "<td>" + DelFecha212 + "</td>" +
                              "<td>" + AlFecha212 + "</td>" +
                              "<td>" + Lugar212 + "</td>" +
                              "<td>" + Responsable212 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function QuitarFila(row){
  $(row).closest("tr").remove();
}

function AgregarTabla23(){
  var Numero23 = $('#Numero23').val();
  var Lista23 = $('#Lista23').val();
  var Codigo23 = $('#Codigo23').val();
  var Nombre23 = $('#Nombre23').val();
  var Marca23 = $('#Marca23').val();
  var Unidad23 = $('#Unidad23').val();
  var Estado23 = $('#Estado23').val();
  var Costo23 = $('#Costo23').val();

  $('#CuerpoTabla23').append("<tr>" +
                              "<td>" + Numero23 + "</td>" +
                              "<td>" + Lista23 + "</td>" +
                              "<td>" + Codigo23 + "</td>" +
                              "<td>" + Nombre23 + "</td>" +
                              "<td>" + Marca23 + "</td>" +
                              "<td>" + Unidad23 + "</td>" +
                              "<td>" + Estado23 + "</td>" +
                              "<td>" + Costo23 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla24(){
  var Numero24 = $('#Numero24').val();
  var Lista24 = $('#Lista24').val();
  var Codigo24 = $('#Codigo24').val();
  var Ejercicio24 = $('#Ejercicio24').val();
  var Relacion24 = $('#Relacion24').val();
  var Fecha24 = $('#Fecha24').val();
  var Descripcion24 = $('#Descripcion24').val();
  var Valor24 = $('#Valor24').val();
  var Ubicacion24 = $('#Ubicacion24').val();

  $('#CuerpoTabla24').append("<tr>" +
                              "<td>" + Numero24 + "</td>" +
                              "<td>" + Lista24 + "</td>" +
                              "<td>" + Codigo24 + "</td>" +
                              "<td>" + Ejercicio24 + "</td>" +
                              "<td>" + Relacion24 + "</td>" +
                              "<td>" + Fecha24 + "</td>" +
                              "<td>" + Descripcion24 + "</td>" +
                              "<td>" + Valor24 + "</td>" +
                              "<td>" + Ubicacion24 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla25(){
  var Lista25 = $('#Lista25').val();
  var Clasificador25 = $('#Clasificador25').val();
  var Folio25 = $('#Folio25').val();
  var Importe25 = $('#Importe25').val();
  var Estatus25 = $('#Estatus25').val();
  var Fecha25 = $('#Fecha25').val();
  var Periodo25 = $('#Periodo25').val();

  $('#CuerpoTabla25').append("<tr>" +
                              "<td>" + Lista25 + "</td>" +
                              "<td>" + Clasificador25 + "</td>" +
                              "<td>" + Folio25 + "</td>" +
                              "<td>" + Importe25 + "</td>" +
                              "<td>" + Estatus25 + "</td>" +
                              "<td>" + Fecha25 + "</td>" +
                              "<td>" + Periodo25 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}

function AgregarTabla252(){
  var Poliza252 = $('#Poliza252').val();
  var Listado252 = $('#Listado252').val();
  var Importe252 = $('#Importe252').val();

  $('#CuerpoTabla252').append("<tr>" +
                              "<td>" + Poliza252 + "</td>" +
                              "<td>" + Listado252 + "</td>" +
                              "<td>" + Importe252 + "</td>" +
                              "<td><button class='btn btn-danger' onclick='QuitarFila(this)'>Quitar</button></td>" +
                            "</tr>");
}
</script>
@endsection
