		<div class="col-md-6 form-group">
		{!!Form::label('ep','Tipo de E.P.')!!}
		<br>
		{!!Form::select('ep', array(' 01' => '01', '04' => '04'), null, ['class' => 'js-states form-control']);!!}
		</div>



	<div class="col-md-6 form-group">
		{!!Form::label('type','Tipo de Documento')!!}
		<br>
		{!!Form::select('type', array('Planeacion General' => 'Planeacion General', 'Programacion' => 'Programacion','Presupuestacion' => 'Presupuestacion', 'Licitacion' => 'Licitacion', 
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
		{!!Form::label('format','Tipo de Formato:')!!}
		<br>
		{!!Form::select('format', array('PDF' => 'PDF', 'Word' => 'Word', 'Excel' => 'Excel'), null, ['class' => 'js-states form-control']);!!}
	</div>
	
	
	
	<div class="col-md-6 form-group">
		{!!Form::label('weight','Tamaño del Archivo')!!}
		{!!Form::text('weight',null,['class'=>'form-control','placeholder'=>'Ingresa el Tamaño del archivo mb'])!!}
				
	</div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('route','Ruta E.P.')!!}
		{!!Form::text('route',null,['class'=>'form-control','placeholder'=>'Ingresa la Ruta'])!!}
				
	</div>