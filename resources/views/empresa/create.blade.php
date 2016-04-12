@extends('layouts.admin')
	@section('content')
	@include('alerts.request')

	<div class="forms">
		<h3 class="title1">Catalogos Empresas</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 			
			<div class="form-title">
				<h4>Registrar empresa:</h4>
			</div>
			<div class="form-body">
				<div class="forms-grids">
					<div class="my-div">

						{!!Form::open(['route'=>'empresa.store', 'method'=>'POST'],array('onsubmit' => 'return false', 'id' => 'formulario_busqueda', 'class'=>'valida'))!!}

						@include('empresa.forms.emp')
						<div class="col-md-6 form-group">
						</div>
						<div class="col-md-6 form-group">
							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
						</div>

						{!!Form::close()!!}					
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection

	@section('scripts')
		
  		{!!Html::script('js/jquery.nicescroll.js')!!}
		{!!Html::script('js/valida.2.1.6.min.js')!!}
		{!!Html::script('js/validator.min.js')!!}

	@endsection
