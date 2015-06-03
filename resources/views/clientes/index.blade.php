@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>




                    <div class="panel-body">

                    <!--div>

                            {!! Form::open(['route'=>'clientes.index','method'=>'GET', 'class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
                            <div class="form-group">
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario']) !!}

                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                       {!! Form::close() !!}

                    </div-->

                        @if(\Illuminate\Support\Facades\Session::has('message'))

                            <p class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
                        @endif

                        <!--p>Hay {{-- $clientes->total()--}} clientes.</p-->

                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr data-id="{{ $cliente->id_cliente }}">
                                    <td>{{ $cliente->id_cliente }}</td>
                                    <td>{{ $cliente->tipo_cliente }}</td>
                                    <td>{{ $cliente->full_name }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>

                                        <a href="{{ url('/clientes/'.$cliente->id_cliente) }}" class="btn btn-success btn-sm">
                                            <span class="glyphicon glyphicon-open"></span>
                                            Ver
                                        </a>
                                        <a href="{{ url('/clientes/'.$cliente->id_cliente.'/edit') }}" class="btn btn-warning btn-sm">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                            Editar
                                        </a>

                                        <a href="#" class="btn btn-danger btn-sm btn-delete"><span class="glyphicon glyphicon-trash"></span> Borrar</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{-- $clientes->render()--}}

                    </div>



                </div>
            </div>
        </div>
    </div>

    {!! Form::open(array('method' => 'DELETE', 'route'=>['clientes.destroy',':CLIENTE_ID'], 'id'=>'form-delete')) !!}
    {!! Form::close()!!}

@endsection



@section('scripts')


    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <link href='//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <script src="../js/bootstrap-notify.js"></script>

    <script>

        $(document).ready(function () {
            $('#myTable').DataTable({
                language: {
                    processing:     "Traitement en cours...",
                    search:         "Buscar:",
                    lengthMenu:    "Mostrar _MENU_ elementos",
                    info:           "Mostrando elementos desde _START_ hasta _END_ de _TOTAL_ elementos",
                    infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix:    "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable:     "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first:      "Primero",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Ultimo"
                    },
                    aria: {
                        sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            } );
            $('.btn-delete').click(function(e){

                e.preventDefault();
                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url= form.attr('action').replace(':CLIENTE_ID',id);
                var data= form.serialize();
                //alert(data);
                row.fadeOut('slow');

                $.post(url,data,function(result){
                    alert(result.mensaje);
                }).fail(function(){
                    alert("El usuario no pudo ser eliminado.");
                   // console.log(row);
                    row.show('slow');
                });
            });
        });

    </script>

@endsection