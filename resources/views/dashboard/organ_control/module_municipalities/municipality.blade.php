@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Mis Regiones</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($regions as $region)
            <div class="col-3">
                <div class="card">
                    <div class="card-header card__header-modified card__header-h d-flex align-items-center ">
                      <i class="cil-institution pr-3 control__municipality"></i>
                      <h3 class="users__title text-white users__title-modified">{{$region->region}}</h3>
                      <a href="{{url('municipalities/'.$region->id)}}" class="region__link ml-auto pr-3">Ver Municipios</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@endsection
