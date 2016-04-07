@extends('layouts.admin')
@include('alerts.success')



		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
		<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
   <script type="text/javascript" src="js/accordion.js"></script>



	@section('content')
	 
	 <div clas="container" id="Layer1" overflow: scroll;> <!--barra lateral general-->
	<!--div style="width: 1000px; height: 1000px; overflow: scroll;"barra lateral individual -->
		<div class="main">
		<div class="accordion">
   			<div class="accordion-section">
		        <a class="accordion-section-title" href="#accordion-1">PLANEACION GENERAL</a>
		    		        <div id="accordion-1" class="accordion-section-content">			
	 						
				  <div id="table" class="table-editable">
				   <div class="forms">
						<div class="form-body">

								<table class="table">
					<thead>
										<TR>
										<TD><TH>Tipo de Contrato</TH><TH>Tipo de Proceso</TH><TH>Nombre</TH><TH>Descripcion</TH></TD><th>Formato</th><th>Peso</th></TR>
												</thead>

										<tr>
										  <td>Documento de planeacion </p>
										   del proyecto enviado a la </p>
										   unidad inversiones.</td></tr>

										   <tr>
										  <td>Analisis costo y beneficio</p>
										  	  del proyecto de inversion.</p>
										  	  </td></tr>
										   <tr>

										 	 <td>Dictamen favorable de un</p>
										   		experto sobre el analisis de  </p>
										   		fatibilidadtecnica, economica, </p>
										  		 ambiental y del proyecto </p> ejecutivo.</td></tr>
								
										  	<td>Oficio de Autirizacion especial de</p>
										  		inversion, oficio de liberacion, u  </p>
										  		 oficio de inversion financiera </p>
										  		 segun correspondida.</td></tr>

										   	<td>Notificacion a la SEMARNAT </p>
										 		 para someter la obra a  </p>
										  		 la evaluacion de impacto </p>
										  		 ambiental.</td></tr>
								
											<td>Solicitud de atorizacion  </p>
										   		de impacto ambiental</td></tr>

										     	<td>Manifestacion de impacto </p>
										  			ambiental.</td></tr>

										  		<td>Resolucion SEMARNAT.</p>
										  					</td></tr>
								
								  			<td>Dictamenes, Permisos, licencia</p>
										 	    de Construccion, derecchos de </p>
										   		bancosde materiales y de uso </p>
										   		de suelo, conforme al articulo </p> 
										   		19 la LOPSRM.</td></tr>


										   		  	<td>Ampliacion de terminos y plazos</p>
										  				establecidos en la
										  				 autorizacion</p>
										 			 	la evaluacion de impacto ambiental.</td></tr>

										 	<td>Gestion del refrendo de la autizacion </p>
										 		de la atorizacion en materia de impacto </p>
										  		ambiental.</td></tr>



								@foreach($users as $user)
									<tbody>
										<td>{{$user->typecontract}}</td>
										<td>{{$user->typeprocess}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->description}}</td>
										<td>{{$user->fort}}</td>
										<td>{{$user->weight}}</td>
										<td>
											{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
										</td>
									</tbody>
								@endforeach
								</table>
								{!!$users->render()!!}
							</div>
						</div>
					</div>
					<div class="grids widget-shadow">
				</div><!--end .accordion-section-content-->
		    </div><!--end .accordion-section-->

		    <!--Segunda Tabla-->
		       			<div class="accordion-section">
		    		        <a class="accordion-section-title" href="#accordion-2">PROGRAMACION</a>
		    		        <div id="accordion-2" class="accordion-section-content">

		    				
		    				  <div id="table" class="table-editable">
		    				   <div class="forms">
		    						<div class="form-body">
		    								<table class="table">
		    									<thead>
										<TR>
										<TD><TH>Tipo de Contrato</TH><TH>Tipo de Proceso</TH><TH>Nombre</TH><TH>Descripcion</TH></TD><th>Formato</th><th>Peso</th></TR>
												</thead>

												<tr>
										  <td>Programacion anual estimado de </p>
										 	  obras publicas y de servicios de la </p>
										      entidad actualizados y difundidos </p> 
										      por la secretaria de esconomia.</p></td></tr>

										     <td>Estudios de preinversion. </p></td></tr>

		    								@foreach($users as $user)
		    									<tbody>
		    										<td>{{$user->typecontract}}</td>
													<td>{{$user->typeprocess}}</td>
													<td>{{$user->name}}</td>
													<td>{{$user->description}}</td>
													<td>{{$user->fort}}</td>
													<td>{{$user->weight}}</td>
		    										<td>
		    											{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
		    										</td>
		    									</tbody>
		    								@endforeach
		    								</table>
		    								{!!$users->render()!!}
		    							</div>
		    						</div>
		    					</div>
		    					<div class="grids widget-shadow">
		    				</div><!--end .accordion-section-content-->
		    		    </div><!--end .accordion-section-->

		    		    <!--Tercera Tabla-->
		       			<div class="accordion-section">
		    		        <a class="accordion-section-title" href="#accordion-3">PRESUPUESTACION</a>
		    		        <div id="accordion-3" class="accordion-section-content">

		    				  <div id="table" class="table-editable">
		    				   <div class="forms">
		    						<div class="form-body">
		    								<table class="table">
		    									<thead> 
		    										<TR>
										<TD><TH>Tipo de Contrato</TH><TH>Tipo de Proceso</TH><TH>Nombre</TH><TH>Descripcion</TH></TD><th>Formato</th><th>Peso</th></TR>
		    									 </thead>

												<td>Estudios de ingenieria, topografos</p>
										 	    	(planimetria y altimetria), mecanica</p>
										   			de suelos y geotecnia.</td></tr>


										  		<td>Presupuesto Base de Obra.</p>
										  					</td></tr>

										  		<td>Presupuesto de inversion autorizado</p>
										 	    	por la SHCP (oficio de autorizacion</p>
										   			de inversion). (Inicial y posteriores.</td></tr>

								
								  			



		    								@foreach($users as $user)
		    									<tbody>
		    										<td>{{$user->typecontract}}</td>
													<td>{{$user->typeprocess}}</td>
													<td>{{$user->name}}</td>
													<td>{{$user->description}}</td>
													<td>{{$user->fort}}</td>
													<td>{{$user->weight}}</td>
		    										<td>
		    											{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
		    										</td>
		    									</tbody>
		    								@endforeach
		    								</table>
		    								{!!$users->render()!!}
		    							</div>
		    						</div>
		    					</div>
		    					<div class="grids widget-shadow">
		    				</div><!--end .accordion-section-content-->
		    		    </div><!--end .accordion-section-->

		    		    <!--Cuarta Tabla-->
		       			<div class="accordion-section">
		    		        <a class="accordion-section-title" href="#accordion-4">LICITACION</a>
		    		        <div id="accordion-4" class="accordion-section-content">

		    				
		    				  <div id="table" class="table-editable">
		    				   <div class="forms">
		    						<div class="form-body">
		    								<table class="table">
		    									<thead>
		    										<TR>
										<TD><TH>Tipo de Contrato</TH><TH>Tipo de Proceso</TH><TH>Nombre</TH><TH>Descripcion</TH></TD><th>Formato</th><th>Peso</th></TR>
		    										
		    									</thead>

		    								<td>Copia de la convocatoria y </p>
		    								    sus modificaciones publicada </p>
		    								     en el diario oficial de la </p>
		    								     federacion.</td></tr>


										  		<td>Base de concurso y anexos de </p>
										  		    licitacion, firmadas por el </p>
										  		    licitante ganador.</td></tr>

										  		    <td>Constancia de la visita</p>								al lugar de trabajo.</td></tr>

										  		    <td>Acta Junta de aclaraciones.</td></tr>

										  		<td>Acta de apertura, registro de</p>
										 	    	apertura, circulares, aclaratorias</td></tr>

										 	    	<td>Dictamen de adjudicacion</td></tr>

										 	    	<td>Acta de fallo de la licitacion.</td></tr>

										 	    	<td>Analisis comparativos de</p>
										 	    	las propuestas. </td></tr>

										 	    	<td>Escrito de notificacion a </p>
										  		    los licitantes de las razones </p>
										  		    por las cuales no resultaron ganadores.</td></tr>

										  		    <td>Propuesta del licitante ganador</p>
										  		    	Tecnica y economica y documentacion</p>
										  		    	distinta.</td></tr>

												   <td>Documentacion que ampare</p>
										  		    	liberacion del derecho de via.</td></tr>

										  		    	<td>Croquis de localizacion del</p>
										  		    		lugar de la obra.</td></tr>

										  		    		<td>Proyecto ejecutivo.</td></tr>


	



		    								@foreach($users as $user)
		    									<tbody>
		    										<td>{{$user->typecontract}}</td>
													<td>{{$user->typeprocess}}</td>
													<td>{{$user->name}}</td>
													<td>{{$user->description}}</td>
													<td>{{$user->fort}}</td>
													<td>{{$user->weight}}</td>
		    										<td>
		    											{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
		    										</td>
		    									</tbody>
		    								@endforeach
		    								</table>
		    								{!!$users->render()!!}
		    							</div>
		    						</div>
		    					</div>
		    					<div class="grids widget-shadow">
		    				</div><!--end .accordion-section-content-->
		    		    </div><!--end .accordion-section-->
		    		    <!--Quinta Tabla-->
		       			<div class="accordion-section">
		    		        <a class="accordion-section-title" href="#accordion-5">DOCUMENTOS DEL PROCESO DE CONTRATACION DE LA OBRA.</a>
		    		        <div id="accordion-5" class="accordion-section-content">

		    			
		    				  <div id="table" class="table-editable">
		    				   <div class="forms">
		    						<div class="form-body">
		    								<table class="table">
		    									<thead>
		    										<TR>
										<TD><TH>Tipo de Contrato</TH><TH>Tipo de Proceso</TH><TH>Nombre</TH><TH>Descripcion</TH></TD><th>Formato</th><th>Peso</th></TR>
		    										
		    									</thead>


		    									<td>Contrato de Obra.</td></tr>


										  		<td>Tarjeta, Caratula de contrato.</td></tr>

										  		    <td>Programa de ejecucion.</td></tr>

										  		    <td>Finanzas de cumplimiento.</td></tr>

										  		     <td>Finanzas de anticipo.</td></tr>

													 <td>Calculo de amortilizacion de </p>
													     anticipo y obra para ejecutar.</td></tr>

													   <td>Seguros de responsabilidad civil.</td></tr>


		    								@foreach($users as $user)
		    									<tbody>
		    										<td>{{$user->typecontract}}</td>
													<td>{{$user->typeprocess}}</td>
													<td>{{$user->name}}</td>
													<td>{{$user->description}}</td>
													<td>{{$user->fort}}</td>
													<td>{{$user->weight}}</td>
		    										<td>
		    											{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
		    										</td>
		    									</tbody>
		    								@endforeach
		    								</table>
		    								{!!$users->render()!!}
		    							</div>
		    						</div>
		    					</div>
		    					<div class="grids widget-shadow">
		    				</div><!--end .accordion-section-content-->
		    		    </div><!--end .accordion-section-->

		    		    <!--Sexta Tabla-->
		       			<div class="accordion-section">
		    		        <a class="accordion-section-title" href="#accordion-6">OTROS DOCUMENTOS DE OBRA</a>
		    		        <div id="accordion-6" class="accordion-section-content">

		    				  <div id="table" class="table-editable">
		    				   <div class="forms">
		    						<div class="form-body">
		    								<table class="table">
		    									<thead>
		    										<TR>
										<TD><TH>Tipo de Contrato</TH><TH>Tipo de Proceso</TH><TH>Nombre</TH><TH>Descripcion</TH></TD><th>Formato</th><th>Peso</th></TR>
		    										
		    									</thead>


		    									 <td>Aviso de iniciacion y control</p>
		    									     de obra (A.I.C.O.) y/o aviso de la </p> 
		    									      contratista del inicio de los trabajos.</td></tr>


		    									  <td>Oficio de designacion del </p>
		    									  	   residente de obra.</td></tr>

		    									  	    <td>Escrito de Contratista</p>
		    									     		designado al superintendente</p> 
		    									      		de construccion.</td></tr>
		    									   

		    									    <td>Oficio de designacion del </p>
		    									     	 superintendente de supervicion.</td></tr>



		    								@foreach($users as $user)
		    									<tbody>
		    										<td>{{$user->typecontract}}</td>
													<td>{{$user->typeprocess}}</td>
													<td>{{$user->name}}</td>
													<td>{{$user->description}}</td>
													<td>{{$user->fort}}</td>
													<td>{{$user->weight}}</td>
		    										<td>
		    											{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
		    										</td>
		    									</tbody>
		    								@endforeach
		    								</table>
		    								{!!$users->render()!!}
		    							</div>
		    						</div>
		    					</div>
		    					<div class="grids widget-shadow">
		    				</div><!--end .accordion-section-content-->
		    		    </div><!--end .accordion-section-->
		</div>
	</div>
	</div>
	</div>
	</body>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>

        <script src="js/index.js"></script>
	
	@endsection