@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Perfil</div>

                    <div class="panel-body">
                        <p></p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Descripion</th>
                                <th>Operaciones</th>
                                <th></th>

                            </tr>

                                <tr>
                                    <td>{{ $perfil->id_perfil }}</td>
                                    <td>{{ $perfil->descripcion}}</td>

                                    <td>
                                        @foreach($perfil->operaciones as $operacion)

                                            <p>{{$operacion->descripcion}}</p>


                                        @endforeach
                                    </td>



                        </table>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <a href="{{ url('/admin/perfiles') }}" class="btn btn-success btn-sm">Volver</a>
                                <a href="{{ url('/admin/perfiles/'.$perfil->id_perfil.'/edit') }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span>Editar</a>


                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
