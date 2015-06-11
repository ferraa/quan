@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Perfiles</div>

                    <div class="panel-body">
                        <p>Hay {{$perfiles->total()}} perfiles.</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Permisos</th>
                                <th>Acciones</th>

                            </tr>
                            @foreach($perfiles as $perfil)
                            <tr>
                                <td>{{ $perfil->id_perfil }}</td>
                                <td>{{ $perfil->descripcion }}</td>
                                <td> @foreach($perfil->operaciones as $operacion)
                                         <p>{{ $operacion->descripcion  }}</p>
                                    @endforeach

                                </td>

                                <td>
                                    <a href="{{ url('/admin/perfiles/'.$perfil->id_perfil) }}" class="btn btn-success btn-sm">Ver</a>
                                    <a href="#">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $perfiles->render()!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
