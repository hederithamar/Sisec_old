@extends('layouts.admin')
@include('alerts.request')

	@section('content')
	<div class="graph">
	<!--//outer-wp-->
	<div class="outter-wp">
		<!--/sub-heard-part-->
		<div class="sub-heard-part">
			<ol class="breadcrumb m-b-0">
				<li><a href="{!!URL::to('admin')!!}">Home</a></li>
				<li><a href="{!!URL::to('empresa')!!}">Documentos</a></li>
				<li class="active">Crear Documento</li>
			</ol>
		</div>	
		<!--/sub-heard-part-->	
		<!--/forms-->
		<div class="forms-main">
			<h2 class="inner-tittle">Crear Documento</h2>
				<div class="validation-form">
				
				{!!Form::open(['route'=>'documento.store', 'method'=>'POST'])!!}
				@include('documento.forms.docus')
				<div class="col-md-6 form-group"></div>
				<div class="col-md-6 form-group">
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				{!!Form::submit('Cancelar',['class'=>'btn btn-close'])!!}
				</div>
				{!!Form::close()!!}
				</div>
		</div> 
		<div class="clearfix"></div>
		<!--//forms-->											   
	</div>
	</div>
	@endsection