@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> <span>USUARIO:</span> {{ $user->name }}</div>
                    <div class="card-body">
                        <h4>Nombre: {{ $user->name }}</h4>
                        <h4>Correo electronico: {{ $user->email }}</h4>
                        <a href="{{ route('users.index') }}" class="btn btn-block btn-secondary">{{ __('Regresar') }}</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection
