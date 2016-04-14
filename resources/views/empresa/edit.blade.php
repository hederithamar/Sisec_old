	@extends('layouts.admin')
	@section('content')
	<!--/sub-heard-part-->
	<div class="outter-wp">
  	<div class="sub-heard-part">
    	<ol class="breadcrumb m-b-0">
      		<li><a href="{!!URL::to('admin')!!}">Home</a></li>
      		<li><a href="{!!URL::to('empresa')!!}">Empresas</a></li>
      		<li class="active">Actualizar Empresa</li>
    	</ol>
  	</div>  
  	<!--/sub-heard-part-->  
  	@include('alerts.request')
  	<div class="forms-main">
		<h2 class="inner-tittle">Actualizar Empresa</h2>

			<div class="validation-form">
				<div class="my-div">

						{!!Form::model($enterprice,['route'=>['empresa.update',$enterprice],'method'=>'PUT'])!!}
						@include('empresa.forms.emp')				
					</div>
					
					<div class="col-md-2">
						{!!Form::submit('Actualizar',['class'=>'btn green'])!!}
						{!!Form::close()!!}
					</div>
					<div class="col-md-2">
						{!!Form::open(['route'=>['empresa.destroy', $enterprice], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn red'])!!}
						{!!Form::close()!!}
					</div>
				<!---->
			</div>
			<div class="clearfix"></div>
		</div> 
	</div>
	@endsection