<script>
	function llenarSelect(valor)
	{
		var tipoEp1 = ["Planeacion General","Programacion","Presupuestacion","Licitacion","Proceso de Contratacion de la Obra"];   
		var tipoEp4 = ["Ejecución","Ajuste de costos","Convenios","Terminacion de los trabajos","Terminación anticipada o rescisión","Sanciones incorfamidades y conciliaciones"];

		document.getElementById("type").options.length=0;
		var sel = document.getElementById('type');
		var fragment = document.createDocumentFragment();
		if(valor==04){		
				tipoEp4.forEach(function(tipoDoc, index) {
		    	var opt = document.createElement('option');
		    	opt.innerHTML = tipoDoc;
		    	opt.value = tipoDoc;
		    	fragment.appendChild(opt);});	    	
		}
		else {
					if(valor==01){		
					tipoEp1.forEach(function(tipoDoc, index) {
			    	var opt = document.createElement('option');
			    	opt.innerHTML = tipoDoc;
			    	opt.value = tipoDoc;
			    	fragment.appendChild(opt);});
			    	}
			    	else{}
			}
			sel.appendChild(fragment);
	}
	window.onload = function () {
		var valor="<?php echo $integration->ep; ?>";
		llenarSelect(valor);

	var variablejs = "<?php echo $integration->type; ?>" ;
    $('#type > option[value="'+variablejs+'"]').attr('selected', 'selected');    
	}

</script>		
<div class="vali-form form-group1">
	
		<div class="col-md-6 ">
		{!!Form::label('ep','Tipo de E.P.')!!}
		<br>
		{!!Form::select('ep', array(' 01' => '01', '04' => '04'), null, ['id'=>'ep','onchange'=>'llenarSelect(this.value)','class' => 'js-example-basic-single js-states form-control']);!!}
		</div>

	<div id="tipo" class="col-md-6">
		{!!Form::label('type','Tipo de Documento')!!}
		<br>
		{!!Form::select('type',array(),	null,['id'=>'type','class' => 'js-example-basic-single js-states form-control']);!!}	
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
		{!!Form::select('format', array('PDF' => 'PDF', 'Word' => 'Word', 'Excel' => 'Excel'),null, ['id'=>'format','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	<div class="col-md-6 form-group">
		{!!Form::label('weight','Tamaño del Archivo')!!}
		<br>
		{!!Form::select('weight', array('5' => '5 Mb', '10' => '10 Mb', '15' => '15 Mb', '20' => '20 Mb', '25' => '25 Mb'),null, ['id'=>'format','class' => 'js-example-basic-single js-states form-control']);!!}
	</div>
	
	<div class="col-md-6 form-group">
		{!!Form::label('route','Ruta E.P.')!!}
		{!!Form::text('route',null,['class'=>'form-control','placeholder'=>'Ingresa la Ruta'])!!}
				
	</div>
</div>