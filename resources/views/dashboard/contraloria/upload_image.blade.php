@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Logotipo</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="" class="forms__label">Elige un Municipio</label>
                            <select id="municipality_id" class="form-control">
                                <option selected disabled> Seleccionar Municipio...</option>

                                @foreach($municipalities as $municipality)
                                    <option value="{{ $municipality->id }}">{{ $municipality->municipality }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Sube tu logotipo</label>
                            <form id="myForm" name="myForm">
                                <input type="file" class="form-control-file" id="image" name="image">
                                <p id="error_image"></p>
                                <input hidden id="id" name="id">
                            </form>
                        </div>

                        <div id="success"></div>

                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary form__buttom" onclick="uploadImage()">Registrar Dependencia</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/muncipality_contraloria/dependency_contraloria.js')}}"></script>
@endsection
