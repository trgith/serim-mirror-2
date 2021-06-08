@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Asignación de Usuarios</h2>
                    </div>

                    <div class="card-body">
                        <div class="users__form">
                            <div class="form-group">
                                <label for="" class="forms__label">Nombre Completo</label>
                                <input type="text" class="form-control forms__input" id="users_name_complete" placeholder="Ingresa Nombre">
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Correo Electronico</label>
                                <input type="email" class="form-control forms__input" id="users_email" placeholder="Ingresa un correo electronico">
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Contraseña</label>
                                <input type="password" class="form-control forms__input" id="users_passsword" placeholder="Ingresa una contraseña">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Acciones y Roles</h2>
                    </div>

                    <div class="card-body">
                        <span class="forms__especification">Especifica acción del usuario</span>

                        <div class="forms__checks">
                            <div class="form-group pr-5">
                                <input type="radio" class="form-check-input" id="users_delivery">
                                <label class="form-check-label forms__label">Entrega</label>
                            </div>

                            <div class="form-group pr-5">
                                <input type="radio" class="form-check-input" id="users_receives">
                                <label class="form-check-label forms__label">Recibe</label>
                            </div>

                            <div class="form-group ">
                                <input type="radio" class="form-check-input" id="not_apply">
                                <label class="form-check-label forms__label">No Aplica</label>
                            </div>
                        </div>

                        <hr>

                        <div class="forms__casedependenci">
                            <div class="form-group w-100">
                            <label for="exampleFormControlSelect1" class="forms__label forms__especification">Especifica el rol</label>

                            <select class="form-control" id="menuroles">
                                <option value="" selected disabled>Seleccion un rol</option>
                                @foreach($roles as $rol)
                                    <option value="{{$rol->name}}"{{old('rol_name') == $rol->name? 'selected':''}}>{{ $rol->name }}</option>
                                @endforeach
                            </select>

                            </div>
                        </div>
                        {{-- <div class="forms__checks">
                            <div class="form-group pr-5">
                                <input type="radio" class="form-check-input" id="users_municipality" name="pd" value="municipality">
                                <label class="form-check-label forms__label">Presidente Municipal</label>
                            </div>

                            <div class="form-group">
                                <input type="radio" class="form-check-input" id="users_dependency" name="pd" value="dependency">
                                <label class="form-check-label forms__label">Titular de Dependencia</label>
                            </div>
                        </div>


                        <div class="forms__casemunicipality">
                            <div class="form-group w-100">
                                <label for="exampleFormControlSelect1" class="forms__label">Selecciona un municipio</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div> --}}

                        <hr class="hr__bottom">
                        <button class="btn btn-primary form__buttom" onclick="registerUsers()">Registrar usuario</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Listado de usuarios registrados</h2>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo electronico</th>
                                    <th>Acción del usuario </th>
                                    <th>Tipo de usuario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                                <tr>

                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                    <td>Row 1 Data 1</td>
                                </tr>
                            </tbody>
                        </table>
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
    <script src="{{asset('assets/js/organ_control/assigned_users.js')}}"></script>
@endsection
