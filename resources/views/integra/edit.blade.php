@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<!-- nuevo -->
	<div class="outter-wp">
  	<div class="sub-heard-part">
    	<ol class="breadcrumb m-b-0">
      		<li><a href="{!!URL::to('admin')!!}">Home</a></li>
      		<li><a href="{!!URL::to('expediente')!!}">Integracion de Expedientes</a></li>
      		<li class="active">Actualizar Integración Expediente</li>
    	</ol>
  	</div>  
<!--/sub-heard-part-->  
	<div class="forms-main">
		<h3 class="inner-title1">Catalogos Integración de Documentos EP's</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Actualiza E.P. :</h4>
				
			</div>
			<div class="validation-form">
				<div class="my-div">
			
					{!!Form::model($integration,['route'=>['expediente.update',$integration],'method'=>'PUT'])!!}
					@include('integra.forms.int')
					
			</div>
			<script>
				var selectRol = $(“select#type”);
				selectRol.val($integration->type).attr(‘selected’, ‘selected’);
			</script>

			<div class="col-md-2 grid_box1">
						{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
					{!!Form::close()!!}
				</div>
				<div class="grids widget-shadow">
		<div class="form-group mb-n">
				
				
				<div class="col-md-2">
		</div>
	</div>

	
								
				</div>
				<div class="clearfix"> </div>
		
		</div>			
	</div>

	@endsection
