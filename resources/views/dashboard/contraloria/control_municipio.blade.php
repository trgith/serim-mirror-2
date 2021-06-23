@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h3 class="users__title">Dependencias</h3>
                    </div>



                    <div class="card-body">
                        <table id="dependency_contraloria" class="display">
                            <thead>
                                <tr>
                                    <th>Dependencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dependencies as $dependency)
                                    <tr>
                                        <td>{{$dependency->name_dependency}}</td>
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

    <script src="{{asset('assets/js/muncipality_contraloria/dependency_contraloria.js')}}"></script>

@endsection
