@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Listado de Dependencias</h3>
                    </div>

                    <div class="card-body">
                        <table id="dependency_contraloria" class="display">
                            <thead>
                                <tr>
                                    <th>Dependencia</th>
                                    <th>Dirección</th>
                                    <th>Número Exterior</th>
                                    <th>Número Interior</th>
                                    <th>Télefono</th>
                                    <th>Areas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dependencies as $dependency )
                                    <tr>
                                        <td>{{$dependency->name_dependency}}</td>
                                        <td>{{$dependency->address}}</td>
                                        <td>{{$dependency->exterior_number}}</td>
                                        <td>{{$dependency->interior_number}}</td>
                                        <td>{{$dependency->telephone}}</td>
                                        <td>
                                            <button class="btn btn-primary" onclick="showAreas('{{$dependency->id}}')">Ver</button>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="/editar_dependencia/{{$dependency->id}}"><div class="cil-color-border"></div></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Areas -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" id="CardAreas">
                        <div class="card-header card__header-modified">
                            <h3 class="users__title" id="TituloDeArea">Areas</h3>
                        </div>
                        <div class="card-body">
                            <div class="row" id="CuerpoParaPegarAreas">

                                {{-- <!-- Card de Area -->
                                <div class="col-md-3 mb-3">
                                    <div class="card text-white h-100 anexos" style="background-color: #445554;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2 class="users__title">
                                                        Nombre
                                                    </h2>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="card-text">
                                                        <button class="btn btn-info">
                                                            Ver Anexos
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card de Area --> --}}

                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Card de Areas -->

        <!-- Card de Anexos -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card" id="CardAnexo">
                    <div class="card-header card__header-modified">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="users__title" id="TituloDeAnexo">Anexos</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <button onclick="hideAnexos()" class="btn btn-secondary">Cerrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row" id="CuerpoParaPegarAnexos">

                            {{-- <div class="col-md-3 mb-3">
                                <div class="card text-white h-100 anexos" style="background-color: #445554;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="users__title">
                                                    Test
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="card-text">Test</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <a class="btn btn-danger" href="#">
                                                    <i class="cil-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card de Anexos -->

        <!-- Card de Detalles -->

        <!-- Card de Detalles -->


    </div>
</div>
@endsection


@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script src="{{asset('assets/js/muncipality_contraloria/dependency_contraloria.js')}}"></script>

@endsection
