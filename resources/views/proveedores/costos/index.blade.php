@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Centros de Costo</div>


                    <div class="panel-body">
                        <p>Hay {{$centrosDeCosto->total()}} Centros de costo.</p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Centro</th>
                                <th>Detalle</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($centrosDeCosto as $centro)
                                <tr>
                                    <td>{{ $centro->id_centro_de_costo_detalle }}</td>
                                    <td>{{ $centro->centroDeCosto->descripcion }}</td>
                                    <td>{{ $centro->detalle }}</td>
                                    <td>
                                        <a href="{{ url('/centros/'.$centro->id_centro_de_costo_detalle.'/edit') }}">Ver</a>
                                        <a href="#">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $centrosDeCosto->render()!!}

                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
