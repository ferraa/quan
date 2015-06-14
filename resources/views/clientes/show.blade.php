@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cliente</div>
                <br/>
                <form method="POST" action="" accept-charset="UTF-8" autocomplete="off" class="form-horizontal"
                      role="form" >
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
                        <div class="col-lg-10">
                            <p>{{$cliente->full_name}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pagina_web" class="col-lg-2 control-label">Pagina Web:</label>
                        <div class="col-lg-10">
                            <p>{{$cliente->pagina_web}}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-lg-2 control-label">Telefono:</label>
                        <div class="col-lg-10">
                            <p>{{$cliente->telefono}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">


                        {!! $cliente->foto->render(177,137)!!}


                </div>








                    <!--tabla contactos-->
                    <div class="col-md-10">
                        <h3>Contactos</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nombre y Apellido</th>
                                <th>DNI</th>
                                <th>Email principal</th>
                                <th>Email secundario</th>
                                <th>Telefono Particular</th>
                                <th>Telefono Laboral</th>
                                <th>Ext.</th>
                                <th>Celular</th>
                                <th>Notas</th>
                                <th>Foto</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cliente->contactos as $contacto)
                            <tr>
                                <td>{{$contacto->full_name}}</td>
                                <td>{{$contacto->dni}}</td>
                                <td>{{$contacto->mail}}</td>
                                <td>{{$contacto->mail2}}</td>
                                <td>{{$contacto->tel_particular}}</td>
                                <td>{{$contacto->tel_laboral}}</td>
                                <td>{{$contacto->extension}}</td>
                                <td>{{$contacto->celular}}</td>
                                <td>{{$contacto->notas}}</td>
                                <td> {!! $contacto->foto->render(35,35)!!}</td>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-10">
                        <h3>Domicilios</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Calle</th>
                                <th>Numero</th>
                                <th>Piso</th>
                                <th>Dpto</th>
                                <th>Ciudad</th>
                                <th>Provincia</th>
                                <th>Pais</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cliente->domicilios as $domicilio)
                            <tr>
                                <td><span id="calle" >{{$domicilio->calle}}</span></td>
                                <td><span id="numero" >{{$domicilio->numero}}</td>
                                <td><span id="piso" >{{$domicilio->piso}}</td>
                                <td><span id="dpto" >{{$domicilio->depto}}</td>
                                <td><span id="ciudad" >{{$domicilio->id_ciudad}}</td>
                                <td><span id="provincia" ></td>
                                <td><span id="pais" ></td>


                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-10">
                        <h3>Razones Sociales</h3>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Descripción</th>
                                <th>Cuit/Cuil</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cliente->razonesSociales as $razonSocial)
                            <tr data-id="{{$razonSocial->id_razon_social}}">
                                <td >{{$razonSocial->categoriaRazonSocial->descripcion}}</td>
                                <td >{{$razonSocial->descripcion}}</td>
                                <td>{{$razonSocial->cuit_cuil}}</td>

                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="notas" class="col-lg-2 control-label">Notas:</label>
                        <div class="col-lg-10">
                            <!--input class="form-control" placeholder="Notas" name="notas" type="text" value="$cliente->notas" id="notas"-->
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <a href="{{ url('/clientes') }}" class="btn btn-success btn-sm">Volver</a>
                                   <a href="{{ url('/clientes/'.$cliente->id_cliente.'/edit') }}" class="btn btn-warning btn-sm">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                            Editar
                                        </a>

                            </div>
                        </div>

                    </form>


                    </div>
                    </div>
                    </div>
                    </div>

@endsection
