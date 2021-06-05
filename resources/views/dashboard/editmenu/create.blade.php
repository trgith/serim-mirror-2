@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Crear elemento del menú</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('menu.store') }}" method="POST">
                    @csrf
                    <table class="table table-striped table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Menu
                                </th>
                                <td>
                                    <select class="form-control" name="menu" id="menu">
                                        @foreach($menulist as $menu1)
                                            <option value="{{ $menu1->id }}">{{ $menu1->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    User Roles
                                </th>
                                <td>
                                    <table class="table">
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="role[]" value="{{ $role }}" class="form-control"/>
                                            </td>
                                            <td>
                                                {{ $role }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Nombre
                                </th>
                                <td>
                                    <input class="form-control" type="text" name="name" placeholder="Nombre" required/>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Tipo
                                </th>
                                <td>
                                    <select class="form-control" name="type" id="type">
                                        <option value="link">Enlace</option>
                                        <option value="title">Titulo</option>
                                        <option value="dropdown">Dropdown</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Otros
                                </th>
                                <td>
                                    <div id="div-href">
                                        Href:
                                        <input type="text" name="href" class="form-control" placeholder="href"/>
                                    </div>
                                    <br><br>

                                    <div id="div-dropdown-parent">
                                        Selecciona el dropdown padre:
                                        <select class="form-control" name="parent" id="parent">

                                        </select>
                                    </div>
                                    <br><br>

                                    <div id="div-icon">
                                        <a
                                            href="https://coreui.io/docs/icons/icons-list/#coreui-icons-free-502-icons"
                                            target="_blank"
                                        >
                                            Iconos documentación
                                        </a>
                                        <br>
                                        <input class="form-control" name="icon" type="text" placeholder="CoreUI Icon class - example: cil-bell">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-secondary" href="{{ route('menu.index') }}">Regresar</a>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')
<script src="{{ asset('js/axios.min.js') }}"></script>
<script src="{{ asset('js/menu-create.js') }}"></script>


@endsection
