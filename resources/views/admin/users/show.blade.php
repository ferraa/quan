@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuario</div>

                    <div class="panel-body">
                        <p>.</p>
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




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
