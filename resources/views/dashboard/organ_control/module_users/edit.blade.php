@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Editar datos del usuario: {{$user->name}}</h2>
                    </div>

                    <div class="card-body">
                        <input type="hidden" name="id" id="id" value="{{$user->id}}">
                        <div class="users__form">
                            <div class="form-group">
                                <label for="" class="forms__label">Nombre Completo</label>
                                <input type="text" class="form-control forms__input" id="users_name_complete_update" placeholder="Ingresa Nombre" value="{{$user->name}}" onkeypress="cleanMessageName()">
                                <p id="error_name"></p>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Correo Electronico</label>
                                <input type="email" class="form-control forms__input" id="users_email_update" placeholder="Ingresa un correo electronico" value="{{$user->email}}"  onkeypress="cleanMessageEmail()">
                                <p id="error_email"></p>

                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Contraseña</label>
                                <input type="password" class="form-control forms__input" id="users_password_update" placeholder="Ingresa una contraseña nueva" onkeypress="cleanMessagePassword()">
                                <p id="error_password"></p>
                            </div>
                        </div>

                        <hr class="hr__bottom">
                        <div class="forms__actions d-flex">
                            <button class="btn btn-warning form__buttom order-1 ml-1" id="form_buttom_users" onclick="updateUserRegistered()">Actualizar Usuario</button>
                            <a class="btn btn-primary form__buttom" id="form_buttom_users" href="{{url("/asignacion_usuarios")}}">Regresar</a>
                        </div>

                        <br>
                            <div id="success"></div>
                        <br>

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
