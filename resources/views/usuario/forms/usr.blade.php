<div class="vali-form form-group1">
	<!--Nombre del usuario-->
	<div class="form-group">
		<div class="col-md-4 form-group ">
			{!!Form::label('nombre','Nombre(s):')!!}
			{!!Form::text('name',null,['id' => 'name','required' => '','class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="col-md-4 form-group">
			{!!Form::label('firstlastname','Apellido Paterno:')!!}
			{!!Form::text('firstlastname',null,['id' => 'firstlastname','required' => '','class'=>'form-control','placeholder'=>'Ingresa tu apellido paterno'])!!}
		</div>
		<div class="col-md-4 form-group">
			{!!Form::label('secondlastname','Apellidos Materno:')!!}
			{!!Form::text('secondlastname',null,['id' => 'secondlastname','required' => '','class'=>'form-control','placeholder'=>'Ingresa tu apellido materno'])!!}
		</div>
	</div>
	<!--Celular-->
	<div class="col-md-6 form-group">
		{!!Form::label('celphone','Celular:')!!}
		{!!Form::text('celphone',null,['id' => 'celphone','required' => '','class'=>'form-control','placeholder'=>'Ingresa un numero de celular'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('phone','Telfono fijo:')!!}
		{!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingresa un telefono fijo (opcional)'])!!}
	</div>
	<!--Correo electronico usuario-->
	<div class="col-md-6 form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['id' => 'email','required' => '','class'=>'form-control','placeholder'=>'Ingresa tu correo electronico'])!!}
	</div>
	<!--Password del usuario-->
	<div class="col-md-6 form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['id' => 'password','required' => '','class'=>'form-control','placeholder'=>'Ingresa tu password'])!!}
	</div>
	<!--Perfil o rol del usuario-->
	<div class="col-md-6 form-group">
		{!!Form::label('role_id','Rol:')!!}
		<br>
		{!!Form::select('role_id', $roles, null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<!--Zona a la que pertenece-->
	<div class="col-md-6 form-group">
		{!!Form::label('zone','Zona:')!!}
		<br>
		{!!Form::select('zone', array('Norte' => 'Norte', 'Sur' => 'Sur'), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	
</div>