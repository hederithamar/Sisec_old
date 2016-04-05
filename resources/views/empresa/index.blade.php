@extends('layouts.admin')
@include('alerts.success')

<!DOCTYPE html>
<html lang="en" class="no-js">
<link rel="stylesheet" type="text/css" href="defaults2.css">
    <link rel="stylesheet" type="text/css" href="demo2.css">
		<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="js/accordion.js"></script>

	<header>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>SISEC</title>
		

    

	</header>


@section('content')


	<body>
		<div clas="container">
			<header class="codrops-header">
				<h1>SISEC <span>Bienvenido a Catálogos<a></header>
			   </a></span></h1>
      </header>
    </div>

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
  
  <button id="export-btn" class="">Export Data</button>
  <p id="export"></p>
        </div><!--end .accordion-section-content-->
      </div><!--end .accordion-section-->
    </div><!--end .accordion-->
  </div>
</div>

			
		</div>
	</body>
<script src="js/classie2.js"></script>
<script src="js/borderMenu2.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js'></script>

        <script src="js/index2.js"></script>

    
</html>
@endsection