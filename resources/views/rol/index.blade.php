@extends('layouts.admin')
@include('alerts.success')

	@section('content')
	<div class="graph">
	<!--//outer-wp-->
	<div class="outter-wp">
		<!--/sub-heard-part-->
		<div class="sub-heard-part">
			<ol class="breadcrumb m-b-0">
				<li><a href="{!!URL::to('admin')!!}">Home</a></li>
				<li><a href="{!!URL::to('rol')!!}">Roles</a></li>
				<li class="active">Crear Roles</li>
			</ol>
		</div>	
		<!--/sub-heard-part-->	
		<!--/forms-->
		<div class="forms-main">
			<h2 class="inner-tittle">Roles</h2>
				<div class="validation-form">
				<!---->
				<table class="table-editable">
					<thead>
						<th>Id</th>
						<th>Descripción</th>
						<th>Operación</th>
					</thead>
					<tbody id ="datos"></tbody>
				</table>
				<!---->
				</div>
		</div> 
		<div class="clearfix"></div>
		<!--//forms-->											   
	</div>
</div>

	@endsection

	@section('scripts')
		{!!Html::script('js/listrol.js')!!}
	@endsection