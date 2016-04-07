	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de contrato:')!!}
		<br>
		{!!Form::select('type', array('Supervision' => 'Supervision', 'Obra' => 'Obra'), null, ['class' => 'js-states form-control']);!!}
	</div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de proceso:')!!}
		<br>
		{!!Form::select('type', array('Propuesta Ganadora de la Obra' => 'Propuesta Ganadora de la Obra', 'Propuesta Ganadora de Supervision' => 'Propuesta Ganadora de Supervision', 'Proceso de Licitacion de la Supervision' => 'Proceso de Licitacion de la Supervision'), null, ['class' => 'js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('name','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del documento'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('name','Descripción:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa la descripcion'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('name','Tamaño maximo 25mb):')!!}
		{!!Form::submit('Seleccionar Archivos',['class'=>'btn btn-close'])!!}
				
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Formato:')!!}
		<br>
		{!!Form::select('type', array('PDF' => 'PDF', 'Docs' => 'Docs', 'Excel' => 'Excel'), null, ['class' => 'js-states form-control']);!!}
	</div>
	