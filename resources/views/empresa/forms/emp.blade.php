

	<div class="col-md-6 form-group">
		{!!Form::label('enterprice_id','Escribe el RFC:')!!}
		<br>
		{!!Form::select('rfc', $enterprices, null, ['class' => 'js-example-tags js-states form-control']);!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('enterprice_id','Vuelva a regtificar el RFC de la Empresa:')!!}
		<br>
		{!!Form::select('rfc', $enterprices, null, ['class' => 'js-example-tags js-states form-control']);!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('name','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la empresa'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de empresa:')!!}
		<br>
		{!!Form::select('type', array('Supervisora' => 'Supervisora', 'Constructora' => 'Constructora'), null, ['class' => 'js-states form-control']);!!}
	</div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('address','Dirección:')!!}
		{!!Form::text('address',null,['class'=>'form-control','placeholder'=>'Ingresa la Dirección de la empresa'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('legal','Representante legal:')!!}
		{!!Form::text('legalagent',null,['class'=>'form-control','placeholder'=>'Ingresa el representante legal de la empresa'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('email','Email:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa un correo electronico'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('phone','Celular:')!!}
		{!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingresa un numero de celular'])!!}
	</div>
		
	<div class="col-md-6 form-group">
		{!!Form::label('status','Estatus de la empresa:')!!}
		<br>
		{!!Form::select('status', array('Activa' => 'Activa', 'Inactiva' => 'Inactiva', 'Suspendida' => 'Suspendida'), null, ['class' => 'js-example-basic-single js-states form-control']);!!}

	</div>


