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
                                <input type="text" class="form-control forms__input" id="name_dependency" placeholder="Ingresa Nombre"  onkeypress="cleanMessageName()">
                                <p id="error_name"></p>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Correo Electronico</label>
                                <input type="email" class="form-control forms__input" id="email_dependency" placeholder="Ingresa un correo electronico"  onkeypress="cleanMessageEmail()">
                                <p id="error_email"></p>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Contraseña</label>
                                <input type="password" class="form-control forms__input" id="password_dependency" placeholder="Ingresa una contraseña"  onkeypress="cleanMessagePassword()">
                                <p id="error_password"></p>
                            </div>

                        </div>

                        <div class="card-footer d-flex flex-reverse">
                            <button class="btn btn-info ml-auto" id="dependency_register_buttom" onclick="registerUserDependency()">Registrar Usuario</button>
                        </div>
                    </div>


                        <div id="success"></div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Usuarios Registrados</h3>
                    </div>

                    <div class="card-body">
                        <table id="table_user_dependency" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo Electronico</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($rolsDependencies as $rolsDependency)
                                    <tr>
                                        <td>{{$rolsDependency->name}}</td>
                                        <td>{{$rolsDependency->email}}</td>
                                        <td><a class="btn btn-warning" href="/editar_usuario_dependencia/{{$rolsDependency->id}}"><div class="cil-color-border"></div></a></td>
                                    </tr>
                                @endforeach
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
    <script src="{{asset('assets/js/muncipality_contraloria/register_user_dependency.js')}}"></script>
@endsection
