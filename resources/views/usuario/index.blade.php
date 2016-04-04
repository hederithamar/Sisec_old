@extends('layouts.admin')
@include('alerts.success')

	@section('content')
	<div class="forms">
		<h3 class="title1"> </h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title ">
				<h4>Catalógos Usuarios :</h4>
			</div>
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
	<div class="grids widget-shadow">
		
	</div>
	
	@endsection