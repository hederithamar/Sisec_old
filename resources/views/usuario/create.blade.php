@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<div class="outter-wp">
		<!--/sub-heard-part-->
	  	<div class="sub-heard-part">
	    	<ol class="breadcrumb m-b-0">
	      		<li><a href="{!!URL::to('admin')!!}">Home</a></li>
	      		<li><a href="{!!URL::to('empresa')!!}">Usuarios</a></li>
	      		<li class="active">Crear Usuario</li>
	    	</ol>
	  	</div>  
	  	<!--/sub-heard-part-->  
	  	<div class="forms-main">
			<h2 class="inner-tittle">Crear Usuario</h2>

				<div class="validation-form">
					<div class="my-div">
						{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'],array('onsubmit' => 'return false', 'id' => 'formulario_busqueda'))!!}
						@include('usuario.forms.usr')				
					</div>
					<div class="col-md-6 form-group"></div>
					<div class="col-md-6 form-group">
						{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
					</div>
					{!!Form::close()!!}
					<!---->
				</div><!---->
				<div class="clearfix"></div>
		</div>
	</div>
	@endsection