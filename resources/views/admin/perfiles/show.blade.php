@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Perfil</div>

                    <div class="panel-body">
                        <p>.</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Descripion</th>
                                <th>Operaciones</th>

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




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
