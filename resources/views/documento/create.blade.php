@extends('layouts.admin')
@include('alerts.request')

	@section('content')
	


	<div class="forms">
		<h3 class="title1">Catalogos de Documentos</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Agregar nuevo Documento: </h4>
			</div>
			<div class="form-body">
				{!!Form::open(['route'=>'documento.store', 'method'=>'POST'])!!}
					@include('documento.forms.docus')
					{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		

				{!!Form::close()!!}
	
					<!--{!!Form::submit('Cancelar',['class'=>'btn btn-close'])!!}-->
								
	
			</div>

		</div>
	</div>

	@endsection