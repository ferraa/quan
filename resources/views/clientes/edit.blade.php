@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Cliente: {{ $cliente->full_name }}</div>



                    <div class="panel-body">
                        Nombre:
                        {{ $cliente->full_name }}{!! "<br><br>"!!}
                        {!! $cliente->foto->render()!!}{!! "<br><br>"!!}
                        DOMICILIOS{!! "<br>"!!}
                        @foreach($cliente->domicilios as $domicilio)
                       {{ $domicilio->full_domicilio." ".$domicilio->piso}}{!! "<br>"!!}
                            @endforeach
                        {!! "<br><br>"!!}CONTACTOS{!! "<br>"!!}
                        @foreach($cliente->contactos as $contacto)
                            {{ $contacto->full_name.". Notas: ".$contacto->notas}}{!! "<br>"!!}
                        @endforeach

                        {!! "<br><br>"!!}RAZONES SOCIALES{!! "<br>"!!}
                        @foreach($cliente->razonesSociales as $razonSocial)
                            {{ $razonSocial->descripcion.". Cuit: ".$razonSocial->cuit_cuil}}{!! "<br>"!!}
                        @endforeach
                        {!! "<hr>"!!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
