@extends('layouts.admin')
	@section('content')
	@include('alerts.request')

	<div class="forms">
		<h3 class="title1">Catalogos Usuarios</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Agregar nuevo usuario: </h4>
			</div>
			<div class="form-body">
				{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'],array('onsubmit' => 'return false', 'id' => 'formulario_busqueda', 'class'=>'valida'))!!}
					@include('usuario.forms.usr')
					<div class="col-md-6 form-group">
					</div>
					
					<div class="col-md-6 form-group">
						{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
					</div>

				{!!Form::close()!!}
	
			</div>
		</div>
	</div>

	@endsection