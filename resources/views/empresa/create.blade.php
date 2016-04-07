@extends('layouts.admin')
	@section('content')
	@include('alerts.request')

	<div class="forms">
		<h3 class="title1">Catalogos Empresas</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			
			<div class="form-title">
				<h4>Agregar nueva Empresa: </h4>
			</div>
			<div class="form-body">
				{!!Form::open()!!}
				<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    				<strong> Empresa Agregada Correctamente.</strong>
				</div>

				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					@include('empresa.forms.emp')
					{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroemp', 'class'=>'btn btn-primary'], $secure = null)!!}
				{!!Form::close()!!}
		</div>
	</div>

	@endsection

	@section('scripts')
	<script>
		{!!Html::script('js/script2.js')!!}
	</script>
	
	@endsection