@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios
                        <button type="button" class="btn btn-default btn-sm">
                              <a href="{{ url('/costos/create') }}" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                        </button>
                        <a href="{{ url('/excel') }}" class="btn btn-success btn-sm pull-right" > Exportar Excel</a>
                    </div>

                    <div class="panel-body">
                        <p>Hay {{$users->total()}} usuarios.</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Perfil</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->perfil->descripcion }}</td>
                                <td>
                                    <a href="{{ url('/admin/users/'.$user->id) }}" class="btn btn-success btn-sm">Ver</a>
                                    <a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $users->render()!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
