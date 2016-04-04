	<div class="col-md-6 form-group">
		{!!Form::label('nombre','Nombre(s):')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('lastname','Apellidos:')!!}
		{!!Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Ingresa tus apellidos'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo electronico'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu password'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('celphone','Celular:')!!}
		{!!Form::text('celphone',null,['class'=>'form-control','placeholder'=>'Ingresa un numero de celular'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('phone','Telfono fijo:')!!}
		{!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingresa un telefono fijo (opcional)'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('state','Estado:')!!}
		<br>
		{!!Form::select('state', array(
		'1' => 'Aguascalientes', 
		'2' => 'Baja California', 
		'3' => 'Baja California Sur', 
		'4' => 'Campeche',
		'5' => 'Coahouila de Zaragoza',
		'6' => 'Colima',
		'7' => 'Chiapas',
		'8' => 'Chihuahua',
		'9' => 'Distrito Federal',
		'10' => 'Durango',
		'11' => 'Guanajuato', 
		'12' => 'Guerrero', 
		'13' => 'Hidalgo', 
		'14' => 'Jalisco',
		'15' => 'México',
		'16' => 'Michoacán de Ocampo',
		'17' => 'Morelos',
		'18' => 'Nayarit',
		'19' => 'Nuevo León',
		'20' => 'Oaxaca',
		'21' => 'Puebla', 
		'22' => 'Querétaro', 
		'23' => 'Quintana Roo', 
		'24' => 'San Luis Potosí',
		'25' => 'Sinaloa',
		'26' => 'Sonora',
		'27' => 'Tabasco',
		'28' => 'Tamaulipas',
		'29' => 'Tlaxcala',
		'30' => 'Veracruz de Ignacio de llave',
		'31' => 'Yucatán', 
		'32' => 'Zacatecas'
		), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('rol','Rol:')!!}
		<br>
		{!!Form::select('rol', array('Administrador' => 'Administrador', 'Superintendente' => 'Superintendente', 'Residente' => 'Residente', 'Centro' => 'Centro SCT'), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('enterprice_id','Empresa:')!!}
		<br>
		{!!Form::select('enterprice_id', $enterprices, null, ['class' => 'js-example-basic-single js-states form-control']);!!}

	</div>