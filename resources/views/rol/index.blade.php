@extends('layouts.admin')
@include('alerts.success')

	@section('content')
	<div class="forms">
		<h3 class="title1"> </h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Catalógos Roles :</h4>
			</div>
			<div class="form-body">
				<table class="table">
					<thead>
						<th>Id</th>
						<th>Descripción</th>
						<th>Operación</th>
					</thead>
				@foreach($roles as $role)
					<tbody>
						<td>{{$role->id}}</td>
						<td>{{$role->desc}}</td>
						<td>
							{!!link_to_route('rol.edit', $title = 'Editar', $parameters = $role, $attributes = ['class'=>'btn btn-primary'])!!}
						</td>
					</tbody>
				@endforeach
				</table>
				{!!$roles->render()!!}
			</div>
		</div>
	</div>
	<div class="grids widget-shadow">
		
	</div>
	@endsection