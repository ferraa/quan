@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Proveedores</div>


                    @if(\Illuminate\Support\Facades\Session::has('message'))

                        <p class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
                    @endif

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


                                            {!! Form::open(array('method' => 'DELETE', 'route'=>['proveedores.destroy',$proveedor])) !!}
                                            <a href="{{ url('/proveedores/'.$proveedor->id_proveedor) }}" class="btn btn-success btn-sm">
                                                <span class="glyphicon glyphicon-open"></span>
                                                Ver
                                            </a>

                                            <a href="{{ url('/proveedores/'.$proveedor->id_proveedor.'/edit') }}" class="btn btn-warning btn-sm">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                                Editar
                                            </a>

                                            {!! Form::submit('Borrar', array('class' => 'btn btn-danger btn-sm')) !!}
                                            <!--a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a-->
                                        {!! Form::close() !!}
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
