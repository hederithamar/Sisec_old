<script>
	function habilitarCombo(valor)
	{
		if(valor==3||valor==4||valor==5||valor==6){
			
			document.getElementById('empresas').style.display = 'none';
			document.getElementById('centros').style.display = 'block';
		}
		else {
			if(valor==1){
			document.getElementById('empresas').style.display = 'none';
			document.getElementById('centros').style.display = 'none';
			}
			else {
				if(valor==2){
					document.getElementById('empresas').style.display = 'block';
					document.getElementById('centros').style.display = 'none';
				}
				else {
					document.getElementById('empresas').style.display = 'none';
					document.getElementById('centros').style.display = 'none';
					}

			}
			
		}
	}
</script>
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
		{!!Form::select('role_id', $roles, null, ['onchange'=>'habilitarCombo(this.value)','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<!--Empresa a la que pertenece usuario-->
	<div id="empresas"class="col-md-6 form-group" style='display:none;'>
		{!!Form::label('enterprice_id','Empresa:')!!}
		<br>
		{!!Form::select('enterprice_id', $enterprices, null, ['id' => 'enterprice_id','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
<!--Estado al que pertenece el usuario-->
	<div id="centros" class="col-md-6 form-group" style='display:none;'>
		{!!Form::label('state','Centro SCT:')!!}
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
		), null, ['id' => 'state','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>

	
	<div class="col-md-6 form-group">
		{!!Form::label('status','Estado:')!!}
		<br>
		{!!Form::select('status', array('Activo' => 'Activo', 'Bloqueado' => 'Bloqueado'), null, ['class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	
	
</div>
