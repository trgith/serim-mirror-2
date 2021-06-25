@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">

                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Registra tu Dependencia</h3>
                    </div>

                    <div class="card-body">
                        <div class="dependency__form">
                            <div class="form-group">
                                <label for="" class="forms__label">Dependencia</label>
                                <input type="text" class="form-control forms__input" id="name_dependency" name="name_dependency" placeholder="Ingresa Nombre"  onkeypress="cleanDependency()">
                                <p id="error_dependency"></p>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Elige una Región</label>
                                <select class="form-control" onchange="changeMunicipalities(this)">
                                    @foreach($regions as $region)
                                        <option value="{{ $region['id'] }}">{{ $region['region'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Elige un Municipio</label>
                                <select id="municipality_id" class="form-control">
                                    <option selected disabled> Seleccionar Municipio...</option>
                                    @foreach($municipalities as $municipality)
                                        <option value="{{ $municipality['id'] }}" class="hide mostrar-{{ $municipality['region_id'] }}">{{ $municipality['municipality'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div id="success"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">

                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Domicilio</h3>
                    </div>

                    <div class="card-body">
                        <div class="dependency__form">
                            <div class="form-group">
                                <label for="" class="forms__label">Número Exterior</label>
                                <input type="text" class="form-control forms__input" id="exterior_number" placeholder="Ingresa número exterior">
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Número Interior</label>
                                <input type="text" class="form-control forms__input" id="interior_number" placeholder="Ingresa número interior">
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Teléfono</label>
                                <input type="text" class="form-control forms__input" id="telephone" placeholder="Ingresa número interior">
                                <p id="error_telefono"></p>
                            </div>

                            <div id="success"></div>
                        </div>
                    </div>

                      {{-- <button class="btn btn-primary form__buttom" id="active_municipality" onclick="registerDependency()">Registrar Dependencia</button> --}}

                </div>
            </div>
        </div>



        {{-- <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Lista de Anexos</h2>
                    </div>

                    <div class="card-body">
                        <table id="table_dependency" class="display">
                            <thead>
                                <tr>
                                    <th>Dependencia</th>
                                    <th>Dirección</th>
                                    <th>Número Exterior</th>
                                    <th>Número Interior</th>
                                    <th>Télefono</th>
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
                                            <a class="btn btn-warning" href="/editar_dependencia/{{$dependency->id}}"><div class="cil-color-border"></div></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">

                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Lista de Areas</h2>
                    </div>

                    <div class="card-body d-flex flex-wrap justify-content-around">
                        @foreach ($areas as $area)
                            <div class="card text-white bg-warning bg-warning-modified mb-3" style="width: 25rem;">
                                <div class="card-header"><i class="cil-institution pr-3 control__municipality"></i></div>
                                <div class="card-body">
                                <h2 class="card-title">{{$area->area}}</h2>
                                    <button class="btn btn-warning d-flex ml-auto" style="color: #fff" onclick="showAnnxeds({{$area->id}})" >Ver anexos</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="list_annexeds">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header card__header-modified d-flex justify-content-between">
                        <h2 class="users__title">Lista de Anexos</h2>
                        <div class="list__all" onclick="constructAssignedAnnexesObject()">
                            <button class="btn btn-secondary" onclick="hideAnnexed()">Cerrar</button>
                            <input type="checkbox" id="checkAll" > <p class="m-0">Seleccionar Todos</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="row" class="d-flex flex-wrap justify-content-around">

                        </div>
                    </div>

                    <div class="card-footer d-flex flex-reverse">
                        <button class="btn btn-info ml-auto" onclick="registerDependency()">Guardar Dependencia y Asignar Anexos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="{{asset('assets/js/organ_control/dependency.js')}}"></script>
@endsection
