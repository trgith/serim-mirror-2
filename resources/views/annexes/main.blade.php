@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header card__header-modified">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa fa-align-justify"></i>
                            <h4 class="users__title" id="Titulo">Areas</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-error" id="BotonRegresar" onclick="RegresarAreas()" style="background-color: #2E3950">Regresar</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        @php
                        $i = 1;
                        @endphp

                        <!-- Areas -->
                        @foreach($temp2 as $area)
                        <div class="col-3 areas">
                            <div class="card">
                                <div class="card-header card__header-modified card__header-h d-flex align-items-center ">
                                <i class="cil-file-excel pr-3 control__municipality"></i>
                                <h3 class="users__title text-white users__title-modified">{{ $area['nombre'] }}</h3>
                                    <a onclick="mostrarAnexosPorArea('{{ $area['id'] }}')" class="region__link ml-auto pr-3">Ver Anexos</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Areas -->

                        <!-- Anexos -->
                            {{-- @foreach($descriptions as $desc)
                            <div class="col-md-3 mb-3">
                                <!-- style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHhs99QyEtdjlYYK44MU0b3LKApyO83oA9Q&usqp=CAU)" -->
                                <div class="card text-white mt-5 h-100 anexos" style="background-color: #445554;" id="Anexo-{{$i}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="users__title">
                                                    @php
                                                    echo($i);
                                                    @endphp
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="card-text">{{$desc}}</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <a class="btn btn-danger" href="/build_annexed/{{$i}}">
                                                    <i class="cil-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                            $i++;
                            @endphp
                            @endforeach --}}
                        <!-- Anexos -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection


@section('javascript')
<script>
    $(document).ready(function(){
        $('.anexos').css('display', 'none');
        $('#BotonRegresar').css('display', 'none');
    });

    function mostrarAnexosPorArea(area){
        console.log(area);
        $('#BotonRegresar').css('display', 'block');

        var presidente = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35"];
        var contraloria = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35"];
        var tesoreria = ["2", "3", "4", "5", "6", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "23", "24", "25", "26", "27", "28", "30", "31", "32", "33", "34", "35"];
        var sindicatura = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35"];
        var obra = ["1", "2", "7", "17", "21", "24", "25", "26", "27", "28", "32"];
        var demas = ["2", "3", "6", "15", "18", "23", "24", "26", "27", "28", "30", "31", "32"];

        $('.anexos').css('display', 'none');

        $('#Titulo').empty();
        $('#Titulo').append('Anexos');

        switch (area) {
            case "Presidente":
                for(var i = 0; i < presidente.length; i++){
                    $('#Anexo-' + presidente[i]).css('display', 'block');
                }
                break;
            case "Contraloría":
                for(var i = 0; i < contraloria.length; i++){
                    $('#Anexo-' + contraloria[i]).css('display', 'block');
                }
                break;
            case "Tesoría / Administración":
                for(var i = 0; i < tesoreria.length; i++){
                    $('#Anexo-' + tesoreria[i]).css('display', 'block');
                }
                break;
            case "Sindicatura / S. General":
             for(var i = 0; i < sindicatura.length; i++){
                    $('#Anexo-' + sindicatura[i]).css('display', 'block');
                }
                break;
            case "Obra Pública":
                for(var i = 0; i < obra.length; i++){
                    $('#Anexo-' + obra[i]).css('display', 'block');
                }
                break;
            case "Demás Dependencias":
                for(var i = 0; i < demas.length; i++){
                    $('#Anexo-' + demas[i]).css('display', 'block');
                }
                break;
            default:
                alert("Algo ha salido mal :c");
                break;
        }

        $('.areas').css('display', 'none');
    }

    function RegresarAreas(){
        $('.anexos').css('display', 'none');
        $('.areas').css('display', 'block');

        $('#Titulo').empty();
        $('#Titulo').append('Areas');
    }
</script>
@endsection
