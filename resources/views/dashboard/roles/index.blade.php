@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Menu roles</h4></div>
            <div class="card-body">
                <div class="row">
                    <a class="btn btn-lg btn-primary" href="{{ route('roles.create') }}">Agregar nuevo rol</a>
                </div>
                <br>
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Jerarquia</th>
                            <th>Fecha de creación</th>
                            <th>Fecha de actualización</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td>
                                    {{ $role->hierarchy }}
                                </td>
                                <td>
                                    {{ $role->created_at }}
                                </td>
                                <td>
                                    {{ $role->updated_at }}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('roles.up', ['id' => $role->id]) }}">
                                        <i class="cil-arrow-thick-top"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('roles.down', ['id' => $role->id]) }}">
                                        <i class="cil-arrow-thick-bottom"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('roles.show', $role->id ) }}" class="btn btn-primary">Ver</a>
                                </td>
                                <td>
                                    <a href="{{ route('roles.edit', $role->id ) }}" class="btn btn-warning">Editar</a>
                                </td>
                                <td>
                                <form action="{{ route('roles.destroy', $role->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                                </td>
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
</div>

@endsection

@section('javascript')

@endsection
