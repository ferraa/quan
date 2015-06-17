@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuario</div>

                    <form class="form-horizontal" role="form" method="POST" action="">
                    <br>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre y Apellido</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirme Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
						<div class="form-group">
                            <label class="col-md-4 control-label">Perfil de usuario</label>
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Seleccione uno
                                    <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Administrador</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Gerente</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Empleado</a></li>
                                          <li role="presentation" class="divider"></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Data Entry</a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Guardar
								</button>
								<a href="{{ url('/admin/users') }}" class="btn btn-success btn-lg-10">Volver</a>
							</div>
						</div>


                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
