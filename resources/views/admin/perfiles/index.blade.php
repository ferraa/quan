@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Perfiles
                        <button type="button" class="btn btn-default btn-sm">
                              <a href="" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                        </button>
                        <a href="" class="btn btn-success btn-sm pull-right" > Exportar Excel</a>
                    </div>

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
                                    <a href="{{ url('/admin/perfiles/'.$perfil->id_perfil) }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-open"></span>Ver</a>
                                      <a href="{{ url('/admin/perfiles/'.$perfil->id_perfil.'/edit') }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span>Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
