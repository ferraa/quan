@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Proveedores</div>


                    <div class="panel-body">
                        <p>Hay {{$proveedores->total()}} proveedores.</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($proveedores as $proveedor)
                                <tr>
                                    <td>{{ $proveedor->id_proveedor }}</td>
                                    <td>{{ $proveedor->tipo_proveedor }}</td>
                                    <td>{{ $proveedor->full_name }}</td>
                                    <td>{{ $proveedor->telefono }}</td>
                                    <td>
                                        <a href="{{ url('/proveedores/'.$proveedor->id_proveedor.'/edit') }}">Ver</a>
                                        <a href="#">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $proveedores->render()!!}

                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
