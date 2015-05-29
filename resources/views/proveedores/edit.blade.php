@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Proveedor: {{ $proveedor->full_name }}</div>



                    <div class="panel-body">
                        Nombre:
                        {{ $proveedor->full_name }}{!! "<br><br>"!!}
                        {!! $proveedor->foto->render()!!}{!! "<br><br>"!!}
                        DOMICILIOS{!! "<br>"!!}
                        @foreach($proveedor->domicilios as $domicilio)
                       {{ $domicilio->full_domicilio." ".$domicilio->piso}}{!! "<br>"!!}
                            @endforeach
                        {!! "<br><br>"!!}CONTACTOS{!! "<br>"!!}
                        @foreach($proveedor->contactos as $contacto)
                            {{ $contacto->full_name.". Notas: ".$contacto->notas}}{!! "<br>"!!}
                        @endforeach

                        {!! "<br><br>"!!}RAZONES SOCIALES{!! "<br>"!!}
                        @foreach($proveedor->razonesSociales as $razonSocial)
                            {{ $razonSocial->descripcion.". Cuit: ".$razonSocial->cuit_cuil}}{!! "<br>"!!}
                        @endforeach
                        {!! "<br><br>"!!}CENTROS DE COSTO{!! "<br>"!!}
                            @foreach($proveedor->centrosDeCostoDetalle as $centro)
                            {{ $centro->full_name}}{!! "<br>"!!}
                        @endforeach
                        {!! "<hr>"!!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
