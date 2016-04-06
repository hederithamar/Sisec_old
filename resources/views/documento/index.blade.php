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
	<div clas="container" id="Layer1" overflow: scroll;>
    <div class="main">
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">Propuesta ganadora de la obra</a>
              <div id="accordion-1" class="accordion-section-content">
              <p class="header-right">
                <!-- crear el boton de nuevo {!!link_to_route('empresa.create', $title = 'Nuevo', $parameters = "", $attributes =  ['class'=>'btn btn-primary'])!!}-->
              </p>
              
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                    <tr>
                      <td> <th>Tipo de contrato</th>
                      <th>Tipo de porceso</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Formato</th>
                      <th>Tamaño</th></td></tr>
                  </thead>
                  
                  <tr>
                  <td>
                    Documentacion distinta
                  </td>
                  </tr>

                  <tr>
                  <td>
                   Propuesta tecnica
                  </td>
                  </tr>

                  <tr>
                  <td>
                   Propuesta economica
                  </td>
                  </tr>



                </table>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <!--Segunda tabla -->
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-2">Propuesta ganadora de supervision</a>
              <div id="accordion-2" class="accordion-section-content">
              <p class="header-right">
              <!-- {!!link_to_route('empresa.create', $title = 'Nuevo', $parameters = "", $attributes =   ['class'=>'btn btn-primary'])!!}-->
              </p>
              
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                     
                      <tr>
                      <td> <th>Tipo de contrato</th>
                      <th>Tipo de porceso</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Formato</th>
                      <th>Tamaño</th></td></tr>
                  </thead>
                  
                  <tr>
                  <td>
                    Documentacion distinta
                  </td>
                  </tr>

                  <tr>
                  <td>
                   Propuesta tecnica
                  </td>
                  </tr>

                  <tr>
                  <td>
                   Propuesta economica
                  </td>
                  </tr>
                    </table>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Tercer tabla-->
  <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-3">Proceso de licitacion de la supervisora</a>
              <div id="accordion-3" class="accordion-section-content">
              <p class="header-right">
               <!--{!!link_to_route('empresa.create', $title = 'Nuevo', $parameters = "", $attributes =   ['class'=>'btn btn-primary'])!!}-->
              </p>
                            <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                      <tr>
                      <td> <th>Tipo de contrato</th>
                      <th>Tipo de porceso</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Formato</th>
                      <th>Tamaño</th></td></tr>
                  </thead>
                  
                  <tr>
                  <td>
                    Junta de aclaraciones
                  </td>
                  </tr>

                  <tr>
                  <td>
                   Apertura
                  </td>
                  </tr>

                  <tr>
                  <td>
                   Acta de fallo
                  </td>
                  </tr>
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
</
