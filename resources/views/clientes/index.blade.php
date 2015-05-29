@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>


                    <div class="panel-body">
                        <p>Hay {{$clientes->total()}} clientes.</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id_cliente }}</td>
                                    <td>{{ $cliente->tipo_cliente }}</td>
                                    <td>{{ $cliente->full_name }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>
                                        <a href="{{ url('/clientes/'.$cliente->id_cliente.'/edit') }}" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                            Editar
                                        </a>

                                        <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $clientes->render()!!}

                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
