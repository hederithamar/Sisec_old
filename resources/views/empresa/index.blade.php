@extends('layouts.admin')
@include('alerts.success')

	@section('content')
	<div class="forms">
		<h3 class="title1"> </h3>
		<div
			<div class="form-title">
				<h4>Catalógos Empesas :</h4>
			</div>
			<div class="form-body">
				<table class="table">
					<thead>
						<th>RFC</th>
						<th>Nombre</th>
						<th>Representante</th>
						<th>Tipo</th>
						<th>Celular</th>
						<th>Direccion</th>
						<th>Operación</th>
					</thead>
				@foreach($enterprices as $enterprice)
					<tbody>
						<td>{{$enterprice->rfc}}</td>
						<td>{{$enterprice->name}}</td>
						<td>{{$enterprice->legal}}</td>
						<td>{{$enterprice->tipo}}</td>
						<td>{{$enterprice->celphone}}</td>
						<td>{{$enterprice->address}}</td>
						<td>
							{!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn btn-primary'])!!}
						</td>
					</tbody>
				@endforeach
				</table>
				{!!$enterprices->render()!!}
			</div>
		</div>
	</div>
	</div>
	<div class="grids widget-shadow">
		
	</div>
	@endsection