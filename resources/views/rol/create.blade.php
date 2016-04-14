@extends('layouts.admin')
	@section('content')
	
	<!--/sub-heard-part-->
  <div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
      <li><a href="{!!URL::to('admin')!!}">Home</a></li>
      <li class="active">Roles</li>
    </ol>
  </div> 
  <!--/sub-heard-part-->  
  @include('alerts.request')
	<div class="forms">
		<h3 class="title1">Catalogos Roles</h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
		
			<div class="form-title">
				<h4>Agregar nuevo Rol: </h4>
			</div>
			<div class="form-body">
				{!!Form::open()!!}
				<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    				<strong> Rol Agregado Correctamente.</strong>
				</div>

				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					@include('rol.forms.rol')
					{!!link_to('/rol', $title='Registrar', $attributes = ['id'=>'registrorol', 'class'=>'btn btn-primary'], $secure = null)!!}
				{!!Form::close()!!}
	
			</div>
		</div>
	</div>
	@endsection
	
	@section('scripts')
		{!!Html::script('js/createrol.js')!!}
	@endsection