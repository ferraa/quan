@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuario</div>

                    <div class="panel-body">
                        <p></p>
                        <table class="table table-striped">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Perfil</th>
                                <th>Operaciones</th>
                            </tr>

                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->perfil->descripcion }}</td>
                                    <td>
                                        @foreach($user->perfil->operaciones as $operacion)

                                            <p>{{$operacion->descripcion}}</p>


                                        @endforeach
                                    </td>

                        </table>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <a href="{{ url('/admin/users') }}" class="btn btn-success btn-sm">Volver</a>
                                <a href="{{ url('/admin/users/'.$user->id.'/edit') }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span>Editar</a>


                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
