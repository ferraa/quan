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
									<select class="form-control" id="punto_de_venta">
										<option>Seleccionar...</option>
										<option>0001-Av Santa Maria 6385 - Rincon de Milberg, Buenos Aires</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de comprobante</label>
							<div class="col-md-6">
								<div class="dropdown">
									<select class="form-control" id="tipo_de_comprobante">
										<option>Seleccionar...</option>
										<option>Factura C</option>
										<option>Nota de débito C</option>
										<option>Nota de crédito C</option>
										<option>Recibo C</option>
									</select>
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
									<select class="form-control" id="conceptos">
										<option>Seleccionar...</option>
										<option>Productos</option>
										<option>Servicios</option>
										<option>Productos y Servicios</option>
									</select>
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
									<select class="form-control" id="condicion">
										<option>Seleccionar...</option>
										<option>IVA Responsable Inscripto</option>
										<option>IVA Sujeto Exento</option>
										<option>Consumidor Final</option>
										<option>Responsable Monotributo</option>
										<option>IVA No Alcanzado</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo y Nro. Doc</label>
							<div class="col-md-6">
								<div class="dropdown">
									<select class="form-control" id="tipo_documento">
										<option>Seleccionar...</option>
										<option>CUIT</option>
										<option>DNI</option>
									</select>
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
									<select class="form-control" id="domicilio">
										<option>Las trae por el cuit</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-lg-4 control-label">Email</label>
							<div class="col-lg-8">
								<input class="form-control" placeholder="" name="email" type="email" id="email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Condiciones de venta: </label>
							<div class="col-md-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="contado" id="condicion_contado" name="condicion_contado">
										Contado
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="tarjeta_debito" id="condicion_tarjeta_debito" name="condicion_tarjeta_debito">
										Tarjeta de Débito
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="tarjeta_credito" id="condicion_tarjeta_credito" name="condicion_tarjeta_credito">
										Tarjeta de Crédito
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="cuenta_corriente" id="condicion_cuenta_corriente" name="condicion_cuenta_corriente">
										Cuenta Corriente
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="cheque" id="condicion_cheque" name="condicion_cheque">
										Cheque
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="ticket" id="condicion_ticket" name="condicion_ticket">
										Ticket
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="otra" id="condicion_otra" name="condicion_otra">
										Otra
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Remito Nro.</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="Pto.Vta." name="remito_pto_vta" type="text"  id="remito_pto_vta">
								<input class="form-control" placeholder="Comprobante" name="remito_comprobante" type="text"  id="remito_comprobante">
							</div>
						</div>
						<!--tabla datos de la operacion-->
						<div class="col-md-10">
							<h3>Datos de la operacion
								<!--button type="button" class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
								</button-->
							</h3>

							<table class="table table-striped">
								<thead>
								<tr>
									<th>Codigo</th>
									<th>Producto/Servicio</th>
									<th>Cant.</th>
									<th>U.Medida</th>
									<th>Precio Unitario</th>
									<th>% Bon.</th>
									<th>Importe Bon.</th>
									<th>Subtotal</th>
								</tr>
								</thead>
								<tbody>

								<tr>
									<td> <input class="form-control" placeholder="Codigo" name="d_codigo" type="text"  id="d_codigo"></td>
									<td> <input class="form-control" placeholder="Producto/Serv." name="d_producto_servicio" type="text"  id="d_producto_servicio"></td>
									<td> <input class="form-control" placeholder="Cant." name="d_cant" type="text"  id="d_cant"></td>
									<td contenteditable>
										<div class="col-md-4">
												<select class="form-control" id="d_unidad_de_medida">
													<option>Seleccionar...</option>
													<option>Kilogramos</option>
													<option>metros</option>
													<option>unidades</option>
												</select>
										</div>
									</td>
									<td> <input class="form-control" placeholder="Precio Un." name="d_precio_unitario" type="text"  id="d_precio_unitario"></td>
									<td> <input class="form-control" placeholder="% Bon." name="d_porc_bonif" type="text"  id="d_porc_bonif"></td>
									<td> <input class="form-control" placeholder="Importe Bon." name="d_importe_bonif" type="text"  id="d_importe_bonif"></td>
									<td> <input class="form-control" placeholder="Subtotal" name="d_subtotal" type="text"  id="d_subtotal"></td>
								</tr>
								</tbody>
							</table>
						</div>
						<!--tabla otros tributos-->
						<div class="col-md-10">
							<h3>Otros tributos
								<!--button type="button" class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
								</button-->
							</h3>

							<table class="table table-striped">
								<thead>
								<tr>
									<th>Descripcion</th>
									<th>Detalle</th>
									<th>Base Imponible</th>
									<th>Alicuota %</th>
									<th></th>
									<th>Importe</th>
								</tr>
								</thead>
								<tbody>

								<tr>
									<td> <input class="form-control" placeholder="Descripcion" name="o_descripcion" type="text"  id="o_descripcion"></td>
									<td> <input class="form-control" placeholder="Detalle" name="o_detalle" type="text"  id="o_detalle"></td>
									<td> <input class="form-control" placeholder="Base Imponible" name="o_base_imponible" type="text"  id="o_base_imponible"></td>
									<td> <input class="form-control" placeholder="Alicuota %" name="o_alicuota" type="text"  id="o_alicuota"></td>
									<td> $ </td>
									<td> <input class="form-control" placeholder="Importe" name="o_importe" type="text"  id="o_importe"></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>Importe Otros Tributos: </td>
									<td>$</td>
									<td><input class="form-control" placeholder="Total" name="o_importe_total" type="text"  id="o_importe_total"></td>
								</tr>
								</tbody>
							</table>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Subtotal: $</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="" name="subtotal" type="text"  id="subtotal">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Importe Otros Tributos:  $</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="" name="importe_otros_tributos" type="text"  id="importe_otros_tributos">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Importe Total: $</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="" name="importe_total" type="text"  id="importe_total">
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-4 control-label">Precisión Campo Cantidad: </label>
							<div class="col-md-6">
								<select class="form-control" id="precision_campo_cantidad">
									<option>2 decimales</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Campo Precio Unitario: </label>
							<div class="col-md-6">
								<select class="form-control" id="campo_precio_unitario">
									<option>2 decimales</option>
								</select>
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
