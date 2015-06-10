@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Estas logueado!

                    @foreach ($errors->all() as $error)

                        <p class="alert alert-danger">{{ $error }}</p>


                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
