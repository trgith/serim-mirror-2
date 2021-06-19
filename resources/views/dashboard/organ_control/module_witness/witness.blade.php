@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-header card__header-modified d-flex justify-content-between align-items-center">
                        <h3 class="users__title">Solicitudes Recibidas</h3>
                        <i class="cil-envelope-closed"></i>
                    </div>

                    <div class="card-body">
                        <div class="total">
                            <h2>Total:</h2>
                            <span class="request__number"><h3>25</h3></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-header card__header-modified d-flex justify-content-between align-items-center">
                        <h3 class="users__title">Solicitudes Atendidas</h3>
                        <i class="cil-envelope-letter"></i>
                    </div>

                    <div class="card-body">
                        <div class="total">
                            <h2>Total:</h2>
                            <span class="request__number"><h3>15</h3></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-header card__header-modified d-flex justify-content-between align-items-center">
                        <h3 class="users__title">Solicitudes Rechazadas</h3>
                        <i class="cil-x"></i>
                    </div>

                    <div class="card-body">
                        <div class="total">
                            <h2>Total:</h2>
                            <span class="request__number"><h3>10</h3></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Listado de Testigos Registrados</h2>
                    </div>
                    <div class="card-body">
                        <table id="registered_witness" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo electronico</th>
                                    <th>Acción del usuario </th>
                                    <th>Tipo de usuario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                           {{--  <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->action_user}}</td>
                                        <td>{{$user->menuroles}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/editar_usuario/{{$user->id}}"><div class="cil-color-border"></div></a>
                                            <a class="btn btn-danger" href="javascript:;" data-toggle="modal" data-target="#myModal-{{$user->id}}"><div class="cil-trash"></div></a>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal modal-centered fade" id="myModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-dismiss="modal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">

                                            <div class="modal-header modal__danger">
                                              <h4 class="modal-title">!Advertencia</h4>
                                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>

                                            <div class="modal-body">
                                              <h4>¿Desea eliminar este usuario?</h4>
                                              <span>Si acepta, tenga en cuenta que una vez efectuado los cambios no se podran revertir</span>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                                <button id="modal_eliminar" class="btn btn-danger" type="button" onclick="deleteUser({{$user->id}})">Eliminar</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->

                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Listado de Solicitudes Recibidas</h2>
                    </div>
                    <div class="card-body">
                        <table id="request_witness" class="display">
                            <thead>
                                <tr>
                                    <th class="text-center">De</th>
                                    <th class="text-center">Estatus</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                            </thead>

                           <tbody>
                               <tr>
                                <td class="text-center">Juridico</td>
                                <td class="text-center"><span class="badge badge-pill badge-danger">Pendiente</span></td>
                                <td class="text-center"><a href="javascript:;">Ver Más</a></td>
                               </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Listado de Solicitudes Atendidas</h2>
                    </div>
                    <div class="card-body">
                        <table id="request_attended" class="display">
                            <thead>
                                <tr>
                                    <th class="text-center">De</th>
                                    <th class="text-center">Estatus</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                 <td class="text-center">Juridico</td>
                                 <td class="text-center"><span class="badge badge-pill badge-success">Atentido</span></td>
                                 <td class="text-center"><a href="javascript:;">Ver Más</a></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Listado de Solicitudes Rechazadas</h2>
                    </div>
                    <div class="card-body">
                        <table id="request_rejected" class="display">
                            <thead>
                                <tr>
                                    <th class="text-center">De</th>
                                    <th class="text-center">Estatus</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                 <td class="text-center">Juridico</td>
                                 <td class="text-center"><span class="badge badge-pill badge-secondary">Rechazado</span></td>
                                 <td class="text-center"><a href="javascript:;">Ver Más</a></td>
                                </tr>
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
    <script src="{{asset('assets/js/organ_control/witness.js')}}"></script>
@endsection
