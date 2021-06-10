@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Asignación de Usuarios</h2>
                    </div>

                    <div class="card-body">
                        <div class="users__form">
                            <div class="form-group">
                                <label for="" class="forms__label">Nombre Completo</label>
                                <input type="text" class="form-control forms__input" id="users_name_complete" placeholder="Ingresa Nombre"  onkeypress="cleanMessageName()">
                                <p id="error_name"></p>
                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Correo Electronico</label>
                                <input type="email" class="form-control forms__input" id="users_email" placeholder="Ingresa un correo electronico"  onkeypress="cleanMessageEmail()">
                                <p id="error_email"></p>

                            </div>

                            <div class="form-group">
                                <label for="" class="forms__label">Contraseña</label>
                                <input type="password" class="form-control forms__input" id="users_password" placeholder="Ingresa una contraseña"  onkeypress="cleanMessagePassword()">
                                <p id="error_password"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Acciones y Roles</h2>
                    </div>

                    <div class="card-body">
                        <span class="forms__especification">Especifica acción del usuario</span>

                        <div class="forms__checks">
                            <div class="form-group pr-5">
                                <input type="radio" class="form-check-input" name="au" id="users_delivery" value="delivery">
                                <label class="form-check-label forms__label">Entrega</label>
                            </div>

                            <div class="form-group pr-5">
                                <input type="radio" class="form-check-input" name="au" id="users_receives" value="receives">
                                <label class="form-check-label forms__label">Recibe</label>
                            </div>

                            <div class="form-group ">
                                <input type="radio" class="form-check-input" name="au" id="not_apply" value="not_apply">
                                <label class="form-check-label forms__label">No Aplica</label>
                            </div>
                        </div>
                        <p id="error_actions"></p>

                        <hr>

                        <div class="forms__casedependency">
                            <div class="form-group w-100">
                            <label for="" class="forms__label forms__especification">Especifica el rol</label>

                            <select class="form-control" id="menuroles" onchange="cleanMessageRoles()">
                                <option value="" selected disabled>Selecciona un rol</option>
                                @foreach($roles as $rol)
                                    <option value="{{$rol}}" {{old('rol_name') == $rol? 'selected':''}}>{{ $rol }}</option>
                                @endforeach
                            </select>
                            <p id="error_menuroles"></p>
                            </div>
                        </div>

                        <hr class="hr__bottom">
                        <button class="btn btn-primary form__buttom" id="form_buttom_users" onclick="registerUsers()">Registrar usuario</button>

                        <br>
                            <div id="success"></div>
                        <br>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card__header-modified">
                        <h2 class="users__title">Listado de usuarios registrados</h2>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo electronico</th>
                                    <th>Acción del usuario </th>
                                    <th>Tipo de usuario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
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
    <script src="{{asset('assets/js/organ_control/assigned_users.js')}}"></script>
    <script>
         $('.addAttr').click(function() {
        var id = $(this).data('id');
            $('#id').val(id);
        } );
    </script>
@endsection
