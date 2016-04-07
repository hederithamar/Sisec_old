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
					<tbody id ="datos"></tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="grids widget-shadow">
	</div>
	@endsection

	@section('scripts')
		{!!Html::script('js/listrol.js')!!}
	@endsection