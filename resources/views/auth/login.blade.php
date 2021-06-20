@extends('dashboard.authBase')

@section('content')
    <div class="container">
        <div class="row justify-content-center" id="login">
            <div class="col-md-8 m-auto">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1 class="auth__title">Iniciar Sesión</h1>
                            <p class="text-muted auth__subtitle">Ingresa tus credenciales</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon">
                                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ __('Correo Electrico') }}" name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon">
                                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="{{ __('Contraseña') }}" name="password" required>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn login__bottom px-4" type="submit">{{ __('Iniciar Sesión') }}</button>
                                    </div>

                            </form>
                            {{-- <div class="col-6 text-right">
                                <a href="{{ route('password.request') }}" class="btn btn-link px-0">{{ __('Olvidaste tu contraseña?') }}</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                    <div class="card text-white py-5 d-md-down-none login__card" style="width:44%">
                        <div class="card-body text-center d-flex align-items-center p-5">
                            <div class="">
                                <img src="../../assets/img/avatars/logoSerim-01.png" alt="logo" width="100%">
                                <h2 class="text-center auth__welcome" >SISTEMA ENTREGA RECEPCIÓN INTEGRAL MUNICIPAL</h2>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>

        <div class="row d-flex flex-column align-content-center">
            <div class="col-6">
                <div class="login__presentation d-flex flex-column justify-content-center align-items-center">
                    <img id="img_logo" class="animate__animated animate__fadeIn animate__slow animate__delay-1s" src="../../assets/img/avatars/logoSerim-01.png" alt="logo">
                    <button class="btn animate__animated animate__fadeIn animate__slower animate__delay-2s" onclick="buttonAccess()" id="btn_access">Entrar</button>
                </div>
            </div>

            <div class="col-6" id="cards_access">
                <div class="login__cards">
                    <div class="card card-modified animate__animated animate__fadeIn animate__slow">
                        <div class="card-body body-modified">
                            <span onclick="openLogin()">
                                <h5 class="text-center">PRESIDENTE</h5>
                            </span>
                        </div>
                    </div>

                    <div class="card card-modified animate__animated animate__fadeIn animate__slow">
                        <div class="card-body body-modified">
                            <span onclick="openLogin()">
                                <h5 class="text-center">CONTRALORIA</h5>
                            </span>
                        </div>
                    </div>

                    <div class="card card-modified animate__animated animate__fadeIn animate__slow">
                        <div class="card-body body-modified">
                            <span onclick="openLogin()">
                                <h5 class="text-center">TESORERIA/ADMINISTRACIÓN</h5>
                            </span>
                        </div>
                    </div>

                    <div class="card card-modified animate__animated animate__fadeIn animate__slow">
                        <div class="card-body body-modified">
                            <span onclick="openLogin()">
                                <h5 class="text-center">SINDICATURA/S.GENERAL</h5>
                            </span>
                        </div>
                    </div>

                    <div class="card card-modified animate__animated animate__fadeIn animate__slow">
                        <div class="card-body body-modified">
                            <span onclick="openLogin()">
                                <h5 class="text-center">OBRA PUBLICA</h5>
                            </span>
                        </div>
                    </div>

                    <div class="card card-modified animate__animated animate__fadeIn animate__slow">
                        <div class="card-body body-modified">
                            <span onclick="openLogin()">
                                <h5 class="text-center">DEMÁS DEPENDENCIAS</h5>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/auth/auth.js')}}"></script>
@endsection
