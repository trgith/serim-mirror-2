@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Municipios</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                @foreach ($municipalitiesForRegions as $municipalityForRegion)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header card__header-modified card__header-h d-flex align-items-center ">
                            <i class="cil-institution pr-3 control__municipality"></i>
                            <h3 class="users__title text-white users__title-modified">{{$municipalityForRegion->municipality}}</h3>
                            <a href="/municipio_anexo" class="ml-auto region__link">Anexos</a>
                        </div>

                        <div class="card-body">
                            <div class="municipality__percentage">
                                <h5>Porcentaje</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <br>
                                <div class="control__inou">
                                    <h5>Presidente Municipal Entrante</h5>
                                    <h5>Juan Perez</h5>
                                    <br>
                                    <h5>Presidente Municipal Saliente</h5>
                                    <h5>Raul Perez</h5>
                                </div>
                            </div>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="{{asset('assets/js/organ_control/municipality.js')}}"></script>
@endsection
