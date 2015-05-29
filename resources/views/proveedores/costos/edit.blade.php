@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Centro de Costo: {{ $centroDeCosto->full_name }}</div>



                    <div class="panel-body">
                        Nombre:
                        {{ $centroDeCosto->full_name }}{!! "<br><br>"!!}


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
