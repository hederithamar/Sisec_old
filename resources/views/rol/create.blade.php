@extends('layouts.admin')
	@section('content')
	@include('alerts.request')

	<div class="forms">
		<h3 class="title1">Catalogos Roles</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Agregar nuevo Rol: </h4>
			</div>
			<div class="form-body">
				{!!Form::open(['route'=>'empresa.store', 'method'=>'POST'])!!}
					@include('rol.forms.rol')
					{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
	
			</div>
		</div>
	</div>

	@endsection