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
	

	<div clas="container">
			
		<div class="main">
			<div class="accordion">
							<!--Primera Tabla-->
	   						<div class="accordion-section">
			        <a class="accordion-section-title" href="#accordion-1">Residente Obra</a>
			        <div id="accordion-1" class="accordion-section-content">

					<h4>Listado Residente Obra</h4>
					  <div id="table" class="table-editable">
					   <div class="forms">
							<div class="form-body">
									<table class="table">
										<thead>
											<th>Nombre</th>
											<th>Apellidos</th>
											<th>Correo</th>
											<th>Celular</th>
											<th>Rol</th>
											<th>Empresa</th>
											<th>Operación</th>
										</thead>
									@foreach($users as $user)
										<tbody>
											<td>{{$user->name}}</td>
											<td>{{$user->lastname}}</td>
											<td>{{$user->email}}</td>
											<td>{{$user->celphone}}</td>
											<td>{{$user->rol}}</td>
											<td>{{$user->enterprice_id}}</td>
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
						<div class="grids widget-shadow"></div>
					</div><!--end .accordion-section-content-->
			    			</div><!--end .accordion-section-->

			</div>
		</div>
	</div>
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
	<script src="js/index.js"></script>
	
	@endsection