@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<div class="forms">
		<h3 class="title1">Catalogo de Documentos</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Actualizar Documento</h4>
				<h2>{{$integration->type}}</h2>
			</div>
			<div class="form-body">
				{!!Form::model($doc,['route'=>['documento.update',$doc],'method'=>'PUT'])!!}
					@include('documento.forms.docus')
			</div>
		</div>
	</div>

	<div class="grids widget-shadow">
		<div class="form-group mb-n">
				
				<div class="col-md-2 grid_box1">
						{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
					{!!Form::close()!!}
				</div>
				<div class="col-md-2">
							
				</div>
				<div class="clearfix"> </div>
		
		</div>			
	</div>

	@endsection