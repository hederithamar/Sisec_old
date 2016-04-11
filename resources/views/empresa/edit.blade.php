@extends('layouts.admin')
	@section('content')
	@include('alerts.request')

	<div class="forms">
		<h3 class="title1">Catalogos Empresas</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 			
			<div class="form-title">
				<h4>Actualizar empresa:</h4>
			</div>
			<div class="form-body">
				<div class="forms-grids">
					<div class="my-div">

						{!!Form::model($enterprice,['route'=>['empresa.update',$enterprice],'method'=>'PUT'])!!}
						@include('empresa.forms.emp')				
					</div>
					
					<div class="col-md-2 grid_box1">
						{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
						{!!Form::close()!!}
					</div>
					<div class="col-md-2 grid_box1">
						{!!Form::open(['route'=>['empresa.destroy', $enterprice], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
						{!!Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection