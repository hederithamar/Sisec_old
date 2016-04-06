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
              <a class="accordion-section-title" href="#accordion-1">Empresas Supervisoras</a>
              <div id="accordion-1" class="accordion-section-content">
              <p class="header-right">
                {!!link_to_route('empresa.create', $title = 'Nuevo', $parameters = "", $attributes =  ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Empresas Supervisoras</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                      <th>RFC</th>
                      <th>Nombre</th>
                      <th>Representante</th>
                      <th>Celular</th>
                      <th>Email</th>
                      <th>Direccion</th>
                      <th>Estatus</th>
                      <th>Acción</th>
                    </thead>
                    @foreach($enterprices as $enterprice)
                  <tbody>
                    <td>{{$enterprice->rfc}}</td>
                    <td>{{$enterprice->name}}</td>
                    <td>{{$enterprice->legalagent}}</td>
                    <td>{{$enterprice->phone}}</td>
                    <td>{{$enterprice->email}}</td>
                    <td>{{$enterprice->address}}</td>
                    <td>{{$enterprice->status}}</td>
                    
                    <td>
                     {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-2">Empresas Constructoras</a>
              <div id="accordion-2" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('empresa.create', $title = 'Nuevo', $parameters = "", $attributes =   ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Empresas Contructoras</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                      <th>RFC</th>
                      <th>Nombre</th>
                      <th>Representante</th>
                      <th>Tipo</th>
                      <th>Celular</th>
                      <th>Direccion</th>
                      <th>Acción</th>
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