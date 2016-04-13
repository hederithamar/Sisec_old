	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de Documento')!!}
		<br>
		{!!Form::select('typecontract', array('Planeacion General' => 'Planeacion General', 'Programacion' => 'Programacion','Presupuestacion' => 'Presupuestacion', 'Licitacion' => 'Licitacion', 
		'Documentos del Proceso de Contratacion de la Obra' => 'Documentos del Proceso de Contratacion de la Obra', 'Otros Documentos de la Obra' => 'Otros Documentos de la Obra'),null, ['class' => 'js-states form-control']);!!}
	</div>

	<div class="col-md-6 form-group">
		{!!Form::label('name','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del documento'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('description','Descripción:')!!}
		{!!Form::text('description',null,['class'=>'form-control','placeholder'=>'Ingresa la descripcion'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('fort','Tipo de E.P.')!!}
		<br>
		{!!Form::select('fort', array(' 01' => '01', '04' => '04'), null, ['class' => 'js-states form-control']);!!}
	</div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de proceso:')!!}
		<br>
		{!!Form::select('ep', array('Propuesta Ganadora de la Obra' => 'Propuesta Ganadora de la Obra', 'Propuesta Ganadora de Supervision' => 'Propuesta Ganadora de Supervision', 'Proceso de Licitacion de la Supervision' => 'Proceso de Licitacion de la Supervision'), null, ['class' => 'js-states form-control']);!!}
	</div>
	
	
	
	<div class="col-md-6 form-group">
		{!!Form::label('weigth','Tamaño del Archivo')!!}
		{!!Form::text('weigth',null,['class'=>'form-control','placeholder'=>'Ingresa el Tamaño del archivo mb'])!!}
				
	<!--/div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('route','Ruta E.P.')!!}
		{!!Form::text('route',null,['class'=>'form-control','placeholder'=>'Ingresa la Ruta'])!!}
				
	</div-->