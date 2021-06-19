@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Editar los datos de la dependencia</h2>
                    </div>

                    <div class="card-body">
                        <input type="hidden" name="id" id="id" value="{{$dependency->id}}">
                        <div class="users__form">
                            <div class="form-group">
                                <label for="" class="forms__label">Dependencia</label>
                                <input type="text" class="form-control forms__input" id="name_dependency" value="{{$dependency->name_dependency}}">
                                <p id="error_dependency"></p>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Dirección</label>
                                <input type="email" class="form-control forms__input" id="address" value="{{$dependency->address}}">
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Número Exterior</label>
                                <input type="email" class="form-control forms__input" id="exterior_number" value="{{$dependency->exterior_number}}">

                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Número Interior</label>
                                <input type="email" class="form-control forms__input" id="interior_number" value="{{$dependency->interior_number}}">

                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Télefono</label>
                                <input type="email" class="form-control forms__input" id="telephone" value="{{$dependency->telephone}}">

                            </div>

                        </div>

                        <hr class="hr__bottom">
                        <div class="forms__actions d-flex">
                            <button class="btn btn-warning form__buttom order-1 ml-1" id="form_buttom_users" onclick="editDependency()">Actualizar Dependencia</button>
                            <a class="btn btn-primary form__buttom" id="form_buttom_users" href="{{url("/gestion_dependencias")}}">Regresar</a>
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
    <script src="{{asset('assets/js/organ_control/dependency.js')}}"></script>
@endsection
