@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Domicilios</div>

                    <div class="panel-body">
                        CLIENTE:
                        {{ $cliente->full_name }}{!! "<br><br>"!!}
                        DOMICILIOS
                        @foreach($cliente->domicilios as $domicilio)
                       {{ $domicilio->full_domicilio." ".$domicilio->piso}}{!! "<br>"!!}
                            @endforeach
                        CONTACTOS
                        @foreach($cliente->contactos as $contacto)
                            {{ $contacto->full_name.". Notas: ".$contacto->notas}}{!! "<br>"!!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
