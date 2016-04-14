@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<div class="graph">
	<!--//outer-wp-->
	<div class="outter-wp">
		<!--/sub-heard-part-->
		<div class="sub-heard-part">
			<ol class="breadcrumb m-b-0">
				<li><a href="{!!URL::to('admin')!!}">Home</a></li>
				<li><a href="{!!URL::to('expediente')!!}">Integración Expediente</a></li>
				<li class="active">Nueva Integración de  Expediente</li>
			</ol>
		</div>	
<!--/sub-heard-part-->	
		<!--/forms-->
	<div class="forms-main">
		<h3 class="inner-tittle">Nueva Integración de  Expediente</h3>
		<div class="validation-form">
		<!--div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title"-->
			</div>
			<div class="form-body">

				{!!Form::open(['route'=>'expediente.store', 'method'=>'POST'])!!}
					@include('integra.forms.int')
					{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
	
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	@endsection
	@section('scripts')
		
		
	@endsection