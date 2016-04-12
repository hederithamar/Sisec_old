	<div class="form-group">
		<div class="col-md-4 form-group changeState">
			{!!Form::label('nombre','Nombre(s):')!!}
			{!!Form::text('name',null,['id' => 'name','required' => 'true','class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="col-md-4 form-group">
			{!!Form::label('firstlastname','Apellido Paterno:')!!}
			{!!Form::text('firstlastname',null,['id' => 'firstlastname','required' => 'true','class'=>'form-control','placeholder'=>'Ingresa tu apellido paterno'])!!}
		</div>
		<div class="col-md-4 form-group">
			{!!Form::label('secondlastname','Apellidos Materno:')!!}
			{!!Form::text('secondlastname',null,['id' => 'secondlastname','required' => 'true','class'=>'form-control','placeholder'=>'Ingresa tu apellido materno'])!!}
		</div>
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('celphone','Celular:')!!}
		{!!Form::text('celphone',null,['id' => 'celphone','required' => 'true','class'=>'form-control','placeholder'=>'Ingresa un numero de celular'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('phone','Telfono fijo:')!!}
		{!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingresa un telefono fijo (opcional)'])!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['id' => 'email','required' => 'true','class'=>'form-control','placeholder'=>'Ingresa tu correo electronico'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['id' => 'password','required' => 'true','class'=>'form-control','placeholder'=>'Ingresa tu password'])!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('role_id','Rol:')!!}
		<br>
		{!!Form::select('role_id', $roles, null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('enterprice_id','Empresa:')!!}
		<br>
		{!!Form::select('enterprice_id', $enterprices, null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('state','Estado:')!!}
		<br>
		{!!Form::select('state', array(
		'Aguascalientes' => 'Aguascalientes', 
		'Baja California' => 'Baja California', 
		'Baja California Sur' => 'Baja California Sur', 
		'Campeche' => 'Campeche',
		'Coahouila de Zaragoza' => 'Coahouila de Zaragoza',
		'Colima' => 'Colima',
		'Chiapas' => 'Chiapas',
		'Chihuahua' => 'Chihuahua',
		'Distrito Federal' => 'Distrito Federal',
		'Durango' => 'Durango',
		'Guanajuato' => 'Guanajuato', 
		'Guerrero' => 'Guerrero', 
		'Hidalgo' => 'Hidalgo', 
		'Jalisco' => 'Jalisco',
		'México' => 'México',
		'Michoacán de Ocampo' => 'Michoacán de Ocampo',
		'Morelos' => 'Morelos',
		'Nayarit' => 'Nayarit',
		'Nuevo León' => 'Nuevo León',
		'Oaxaca' => 'Oaxaca',
		'Puebla' => 'Puebla', 
		'Querétaro' => 'Querétaro', 
		'Quintana Roo' => 'Quintana Roo', 
		'San Luis Potosí' => 'San Luis Potosí',
		'Sinaloa' => 'Sinaloa',
		'Sonora' => 'Sonora',
		'Tabasco' => 'Tabasco',
		'Tamaulipas' => 'Tamaulipas',
		'Tlaxcala' => 'Tlaxcala',
		'Veracruz de Ignacio de llave' => 'Veracruz de Ignacio de llave',
		'Yucatán' => 'Yucatán', 
		'Zacatecas' => 'Zacatecas'
		), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('zone','Zona:')!!}
		<br>
		{!!Form::select('zone', array('Norte' => 'Norte', 'Sur' => 'Sur'), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('status','Estado:')!!}
		<br>
		{!!Form::select('status', array('Activo' => 'Activo', 'Bloqueado' => 'Bloqueado'), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	
	
