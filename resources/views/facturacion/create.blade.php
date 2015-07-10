@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Factura Electronica</div>
                <br/>
                <form method="POST" action="" accept-charset="UTF-8" autocomplete="off" class="form-horizontal"
                      role="form" >
                <div class="col-md-6">

                    <div class="form-group">
                     <label class="col-md-4 control-label">Seleccione empresa: </label>
                     <div class="col-md-6">
                      <select class="form-control" id="empresa">
                        <option>Seleccionar...</option>
                        <option>LOPEZ IGNACIO JAVIER</option>
                      </select>
                    </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Puntos de venta</label>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="punto_de_venta" data-toggle="dropdown">Seleccionar...
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">0001-Av Santa Maria 6385 - Rincon de Milberg, Buenos Aires</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Tipo de comprobante</label>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="tipo_de_comprobante" data-toggle="dropdown">Seleccionar...
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Factura C</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nota de débito C</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nota de crédito C</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Recibo C</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fecha" class="col-md-6 control-label">Fecha del comprobante:</label>
                        <div class="col-md-5">
                            <input class="form-control" placeholder="" name="fecha_comprobante" type="date"  id="fecha_comprobante">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-md-4 control-label">Conceptos a incluir: </label>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="conceptos" data-toggle="dropdown">Seleccionar...
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Productos</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Servicios</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Productos y Servicios</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    Periodo Facturado
                     <div class="form-group">
                                <label for="fecha" class="col-lg-2 control-label">Desde: </label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="" name="desde" type="date"  id="desde">
                                </div>
                    </div>
                   <div class="form-group">
                                <label for="fecha" class="col-lg-2 control-label">Hasta: </label>
                                <div class="col-lg-10">
                                    <input class="form-control" placeholder="" name="hasta" type="date"  id="hasta">
                                </div>
                    </div>
                    <div class="form-group">
                            <label for="fecha" class="col-lg-2 control-label">Vto. pago: </label>
                            <div class="col-lg-10">
                                <input class="form-control" placeholder="" name="vto_pago" type="date"  id="vto_pago">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Condicion frente al IVA</label>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="condicion" data-toggle="dropdown">Seleccionar...
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">IVA Responsable Inscripto</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">IVA Sujeto Exento</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Consumidor Final</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Responsable Monotributo</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">IVA No Alcanzado</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tipo y Nro. Doc</label>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="tipo_documento" data-toggle="dropdown">Seleccionar...
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CUIT</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DNI</a></li>
                                    </ul>
                            </div>
                                <input class="form-control" placeholder="" name="documento" type="text"  id="documento">

                        </div>

                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-lg-4 control-label">A. y Nombre o Razón Social:</label>
                        <div class="col-lg-8">
                            <input class="form-control" placeholder="las trae con el cuit" name="razon_social" type="text" id="razon_social">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Domicilio Comercial</label>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="domicilio" data-toggle="dropdown">
                                <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Las trae por el cuit</a></li>
                                    </ul>
                            </div>
                        </div>

                    </div>


              </div>






                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                         <button type="submit" class="btn btn-primary">Enviar</button>
                         <a href="{{ url('') }}" class="btn btn-success btn-lg-10">Volver</a>

                    </div>
                </div>

         </form>




        </div>
        </div>
        </div>
        </div>

@endsection
