@extends('dashboard.base')

@section('content')


<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-bolder text-center">Alta de usuario</h3>
            <div class="card-body">
                <br>
                <div id="register_organ_control">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="register__form d-flex flex-column">
                            <input class="form-control" id="name" type="text" placeholder="{{ __('Nombre') }}" name="name" onkeypress="cleanMessageName()">
                            <p id="error_name"></p>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="register__form d-flex flex-column">
                            <input class="form-control" type="text" placeholder="{{ __('Correo Electronico') }}" name="email" onkeypress="cleanMessageEmail()"  id="email">
                            <p id="error_email"></p>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="register__form d-flex flex-column">
                            <input class="form-control" type="password" placeholder="{{ __('Contraseña') }}" name="password" onkeypress="cleanMessagePassword()" id="password">
                            <p id="error_password"></p>
                        </div>
                    </div>

                    <br>
                        <div id="success"></div>
                    <br>

                    <button id="btn_register_organ" class="btn btn-block btn-success" onclick="registerOrganControl()">{{ __('Registrar') }}</button>
                    <a href="{{ route('users.index') }}" class="btn btn-block btn-secondary">{{ __('Regresar') }}</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection

@section('javascript')
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/organ_control/organ_control_register.js')}}"></script>
@endsection
