@extends('layouts.admin')
@include('alerts.success')

	@section('content')
	<div class="forms">
		<h3 class="title1"> </h3>
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Catalógo de Documentos:</h4>
			</div>
			<div class="form-body">
				<table class="table">
					<thead>
			<div class="main">
		<div class="accordion">
    <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-1">Empresas</a>
        <div id="accordion-1" class="accordion-section-content">

<h1>Catálogo Empresas</h1>
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Tipo de Persona</th>
        <th>Contratista</th>
        <th>RFC</th>
        <th>Representante legal</th>
        <th>Domicilio</th>
        <th>Télefono</th>
        <th>Email</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td contenteditable="true">Tipo de Persona</td>
        <td contenteditable="true">Contratista</td>
        <td contenteditable="true">RFC</td>
        <td contenteditable="true">Representante legal</td>
        <td contenteditable="true">Domicilio</td>
        <td contenteditable="true">Télefono</td>
        <td contenteditable="true">Email</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Tipo de Persona</td>
        <td contenteditable="true">Contratista</td>
        <td contenteditable="true">RFC</td>
        <td contenteditable="true">Representante legal</td>
        <td contenteditable="true">Domicilio</td>
        <td contenteditable="true">Télefono</td>
        <td contenteditable="true">Email</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>
  
  <button id="export-btn" class="">Export Excel</button>
  <p id="export"></p>
        </div><!--end .accordion-section-content-->
      </div><!--end .accordion-section-->
		
<!---TABLA2-->
			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2">Superintendentes</a>
				<div id="accordion-2" class="accordion-section-content">

<h1>Catálogo Superintendentes</h1>
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Empresa</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Domicilio</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td contenteditable="true">Empresa</td>
        <td contenteditable="true">Nombre</td>
        <td contenteditable="true">Telefono</td>
        <td contenteditable="true">Email</td>
        <td contenteditable="true">Domicilio</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Empresa</td>
        <td contenteditable="true">Nombre</td>
        <td contenteditable="true">Telefono</td>
        <td contenteditable="true">Email</td>
        <td contenteditable="true">Domicilio</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>
  
  <button id="export-btn" class="">Export Excel</button>
  <p id="export"></p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3">Perfiles</a>
				<div id="accordion-3" class="accordion-section-content">
					  <h1>Catálogo Perfiles</h1>
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Nombre</th>
        <th>Tipo de permiso</th>
        <th>Télefono</th>
        <th>Email</th>
        <th>Password</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td contenteditable="true">Nombre</td>
        <td contenteditable="true">Tipo de permiso</td>
        <td contenteditable="true">Télefono</td>
        <td contenteditable="true">Email</td>
        <td contenteditable="true">Password</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Nombre</td>
        <td contenteditable="true">Tipo de permiso</td>
        <td contenteditable="true">Télefono</td>
        <td contenteditable="true">Email</td>
        <td contenteditable="true">Password</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>
  
  <button id="export-btn" class="">Export Data</button>
  <p id="export"></p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->


      <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-4">Documentos Inicio Obra</a>
        <div id="accordion-4" class="accordion-section-content">
            <h1>Catálogo Documentos Inicio de Obra</h1>
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Nombre</th>
        <th>Tipo de permiso</th>
        <th>Télefono</th>
        <th>Email</th>
        <th>Password</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td contenteditable="true">Nombre</td>
        <td contenteditable="true">Tipo de permiso</td>
        <td contenteditable="true">Télefono</td>
        <td contenteditable="true">Email</td>
        <td contenteditable="true">Password</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <!-- This is our clonable table line -->
      <tr class="hide">
        <td contenteditable="true">Nombre</td>
        <td contenteditable="true">Tipo de permiso</td>
        <td contenteditable="true">Télefono</td>
        <td contenteditable="true">Email</td>
        <td contenteditable="true">Password</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>

						
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
	<div class="grids widget-shadow">
		
	</div>
	@endsection