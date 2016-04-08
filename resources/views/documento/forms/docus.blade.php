	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de contrato:')!!}
		<br>
		{!!Form::select('typecontract', array('Obra' => 'Obra', 'Supervisión' => 'Supervisión'), null, ['class' => 'js-states form-control']);!!}
	</div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Tipo de proceso:')!!}
		<br>
		{!!Form::select('typeprocess', array('Propuesta Ganadora de la Obra' => 'Propuesta Ganadora de la Obra', 'Propuesta Ganadora de Supervisión' => 'Propuesta Ganadora de Supervisión', 'Proceso de Licitación de la Supervisión' => 'Proceso de Licitación de la Supervisión'), null, ['class' => 'js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('name','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del documento'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('description','Descripción:')!!}
		{!!Form::text('description',null,['class'=>'form-control','placeholder'=>'Ingresa la descripción'])!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('weight','Tamaño:')!!}
		{!!Form::text('weight',null,['class'=>'form-control','placeholder'=>'Tamaño'])!!}
				
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('tipo','Formato:')!!}
		<br>
		{!!Form::select('format', array('PDF' => 'pdf', 'Docs' => 'docs', 'Excel' => 'lsx'), null, ['class' => 'js-states form-control']);!!}
	</div>
	