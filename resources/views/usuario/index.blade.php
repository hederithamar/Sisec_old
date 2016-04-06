@extends('layouts.admin')
@include('alerts.success')
<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
  <script src="js/modernizr.custom.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/accordion.js"></script>
=======

	{!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')!!}
  {!!Html::style('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')!!}
  {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')!!}
  {!!Html::script('js/modernizr.custom.js')!!}
  {!!Html::script('js/accordion.js')!!}
>>>>>>> 76cfc9a587a3cb923fcf4e558cb3f746a5cf0694


@section('content')
	<div clas="container" id="Layer1" overflow: scroll;>
    <div class="main">
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">Usuarios</a>
              <div id="accordion-1" class="accordion-section-content">
              <p class="header-right">
    			 {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes =  ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Usuarios</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                      <th>Nombre</th>
                      <th>Apellido P.</th>
                      <th>Apellido M.</th>
                      <th>Email</th>
                      <th>Estado</th>
                      <th>Zona</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Rol</th>
                      <th>Empresa</th>
                    </thead>
          
                </table>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/classie.js"></script>
  <script src="js/borderMenu.js"></script>
  <script src="js/index.js"></script>		


@endsection