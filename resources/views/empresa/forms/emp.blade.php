
<div class="vali-form form-group1">
	<!--RFC-->
	<div class="col-md-6">
		{!!Form::label('enterprice_id','Escribe el RFC:')!!}
		<br>
		{!!Form::select('rfc', $enterprices, null, ['id'=>'rfc1','class' => 'js-example-tags js-states form-control']);!!}
	</div>
	<div class="col-md-6">
		{!!Form::label('enterprice_id','Vuelva a rectificar el RFC de la Empresa:')!!}
		
		<br>
		{!!Form::text('rfc',null,['id' => 'rfc','required' => '','class'=>'form-control','placeholder'=>'Ingresa el nombre de la empresa'])!!}
	</div>
	<!--Tipo de empresa-->
	<div class="col-md-6">
		{!!Form::label('tipo','Tipo de empresa:')!!}
		<br>
		{!!Form::select('type', array('Supervisora' => 'Supervisora', 'Constructora' => 'Constructora'), null, ['id'=>'type','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<!--Nombre de la empresa-->
	<div class="col-md-6">
		{!!Form::label('name','Nombre:')!!}
		{!!Form::text('nameemp',null,['id' => 'nameemp','required' => '','class'=>'form-control','placeholder'=>'Ingresa el nombre de la empresa'])!!}
	</div>
	<!--Dirección empresa-->
	<div class="col-md-6">
		{!!Form::label('address','Dirección:')!!}
		{!!Form::text('address',null,['id' => 'address','required' => '','id'=>'address','class'=>'form-control','placeholder'=>'Ingresa la Dirección de la empresa'])!!}
	</div>
	<!--Representante legal-->
	<div class="col-md-6">
		{!!Form::label('legal','Representante legal:')!!}
		{!!Form::text('legalagent',null,['id' => 'legalagent','required' => '','class'=>'form-control','placeholder'=>'Ingresa el representante legal de la empresa'])!!}
	</div>
	<!--Email de la empresa-->
	<div class="col-md-6">
		{!!Form::label('email','Email:')!!}
		{!!Form::text('email',null,['id'=>'email','filter'=>'email','required'=>'','class'=>'form-control','placeholder'=>'Ingresa un correo electronico'])!!}
	</div>
	<!--Telefono empresa-->
	<div class="col-md-6">
		{!!Form::label('phone','Celular:')!!}
		{!!Form::text('phone',null,['id'=>'phone','class'=>'form-control','placeholder'=>'Ingresa un numero de celular'])!!}
	</div>
	<!--Estatus de la empresa-->
	<div class="col-md-6">
		{!!Form::label('status','Estatus de la empresa:')!!}
		<br>
		{!!Form::select('status', array('Activa' => 'Activa', 'Inactiva' => 'Inactiva', 'Suspendida' => 'Suspendida'), null, ['id'=>'status','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
</div>
