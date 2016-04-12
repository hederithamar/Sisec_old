@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<div class="outter-wp">
	<!--/sub-heard-part-->
  	<div class="sub-heard-part">
    	<ol class="breadcrumb m-b-0">
      		<li><a href="{!!URL::to('admin')!!}">Home</a></li>
      		<li><a href="{!!URL::to('usuario')!!}">Usuarios</a></li>
      		<li class="active">Actualizar Usuario</li>
    	</ol>
  	</div>  
  	<!--/sub-heard-part-->  
  	<div class="forms-main">
		<h2 class="inner-tittle">Actualizar Usuario</h2>

			<div class="validation-form">
				<div class="form-body">
				{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'],array('onsubmit' => 'return false', 'id' => 'formulario_user'))!!}
					@include('usuario.forms.usr')
				</div>	
				<div class="col-md-2 grid_box1">
						{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
					{!!Form::close()!!}
				</div>
				<div class="col-md-2 grid_box1">
					{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</div>
				<!---->
			</div>
			<div class="clearfix"></div>
		</div>
	</div> 
	@endsection