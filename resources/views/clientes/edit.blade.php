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
                            <input class="form-control" placeholder="Nombre" name="nombre" type="text" value="{{$cliente->full_name}}" id="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pagina_web" class="col-lg-2 control-label">Pagina Web:</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Pagina_web" name="pagina_web" type="text" value="{{$cliente->pagina_web}}" id="pagina_web">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-lg-2 control-label">Telefono:</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Telefono" name="telefono" type="text" value="{{$cliente->telefono}}" id="telefono">
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
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cliente->contactos as $contacto)
                            <tr>
                                <td contenteditable>{{$contacto->full_name}}</td>
                                <td contenteditable>{{$contacto->dni}}</td>
                                <td contenteditable>{{$contacto->mail}}</td>
                                <td contenteditable>{{$contacto->mail2}}</td>
                                <td contenteditable>{{$contacto->tel_particular}}</td>
                                <td contenteditable>{{$contacto->tel_laboral}}</td>
                                <td contenteditable>{{$contacto->extension}}</td>
                                <td contenteditable>{{$contacto->celular}}</td>
                                <td contenteditable>{{$contacto->notas}}</td>
                                <td> {!! $contacto->foto->render(35,35)!!}</td>
                                <td>

                                    <a href="{{ url('/clientes/'.$cliente->id_cliente.'/delete') }}" class="btn btn-danger btn-sm btn-delete">
                                        <span class="glyphicon glyphicon-trash"></span></a>

                                </td>
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
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cliente->domicilios as $domicilio)
                            <tr>
                                <td contenteditable>{{$domicilio->calle}}</td>
                                <td contenteditable>{{$domicilio->numero}}</td>
                                <td contenteditable>{{$domicilio->piso}}</td>
                                <td contenteditable>{{$domicilio->depto}}</td>
                                <td contenteditable>{{$domicilio->id_ciudad}}</td>
                                <td contenteditable></td>
                                <td contenteditable></td>

                                <td>

                                    <a href="#" class="btn btn-danger btn-sm btn-delete"><span class="glyphicon glyphicon-trash"></span></a>

                                </td>
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
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cliente->razonesSociales as $razonSocial)
                            <tr data-id="{{$razonSocial->id_razon_social}}">
                                <td contenteditable>{{$razonSocial->categoriaRazonSocial->descripcion}}</td>
                                <td contenteditable>{{$razonSocial->descripcion}}</td>
                                <td contenteditable>{{$razonSocial->cuit_cuil}}</td>
                                <td>

                                    <a href="#" class="btn btn-danger btn-sm btn-delete"><span class="glyphicon glyphicon-trash"></span></a>

                                </td>
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
                                <button type="submit" class="btn btn-primary">Guardar</button>

                            </div>
                        </div>

                    </form>

                {!! Form::open(array('method' => 'DELETE', 'route'=>['clientes.destroy',$cliente->id_cliente], 'id'=>'form-delete')) !!}

                {!! Form::submit('Borrar', array('class' => 'btn btn-danger btn-sm')) !!}
                {!! Form::close()!!}

                    </div>
                    </div>
                    </div>
                    </div>

@endsection
