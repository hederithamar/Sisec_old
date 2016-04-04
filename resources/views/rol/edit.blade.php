@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<div class="forms">
		<h3 class="title1">Catalogos Roles</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Actualizar rol:</h4>
			</div>
			<div class="form-body">
				{!!Form::model($role,['route'=>['rol.update',$role],'method'=>'PUT'])!!}
					@include('rol.forms.rol')
			</div>
		</div>
	</div>

	<div class="grids widget-shadow">
		<div class="form-group mb-n">
				
				<div class="col-md-2 grid_box1">
						{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
					{!!Form::close()!!}
				</div>
				<div class="col-md-2 grid_box1">
					{!!Form::open(['route'=>['rol.destroy', $role], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</div>
				<div class="col-md-2">
								
				</div>
				<div class="clearfix"> </div>
		
		</div>			
	</div>

	@endsection