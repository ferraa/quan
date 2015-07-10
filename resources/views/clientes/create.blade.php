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
                            <input class="form-control" placeholder="Nombre" name="nombre" type="text" id="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pagina_web" class="col-lg-2 control-label">Pagina Web:</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Pagina_web" name="pagina_web" type="text"  id="pagina_web">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-lg-2 control-label">Telefono:</label>
                        <div class="col-lg-10">
                            <input class="form-control" placeholder="Telefono" name="telefono" type="text"  id="telefono">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">


                        <img class="thumbnail" />


                </div>








                    <!--tabla contactos-->
                    <div class="col-md-10">
                        <h3>Contactos
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            </button>
                        </h3>

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

                            <tr>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td></td>
                                <td>



                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-10">
                        <h3>Domicilios
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            </button>
                        </h3>
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


                            <tr>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>

                                <td>

                                    <a href="#" class="btn btn-danger btn-sm btn-delete"><span class="glyphicon glyphicon-trash"></span></a>

                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-10">
                        <h3>Razones Sociales
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            </button>
                        </h3>
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

                            <tr data-id="">
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td contenteditable></td>
                                <td>

                                    <a href="#" class="btn btn-danger btn-sm btn-delete"><span class="glyphicon glyphicon-trash"></span></a>

                                </td>
                            </tr>



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
                                 <a href="{{ url('/clientes') }}" class="btn btn-success btn-lg-10">Volver</a>

                            </div>
                        </div>

                    </form>




                    </div>
                    </div>
                    </div>
                    </div>

@endsection
