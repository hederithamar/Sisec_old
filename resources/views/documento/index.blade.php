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
              <a class="accordion-section-title" href="#accordion-1">Propuesta Ganadora de la Obra</a>
              <div id="accordion-1" class="accordion-section-content">
              <p class="header-right">
                 {!!link_to_route('documento.create', $title = 'Nuevo', $parameters = "", $attributes =  ['class'=>'btn btn-primary'])!!}
                               </p>
              
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                    <tr>
                      <td> 
                      <th>Tipo de contrato</th>
                     
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Formato</th>
                      <th>Tamaño</th></td></tr>
                  </thead>
                   @foreach($docs as $doc)
                  <tbody>
                    <td></td>
                    <td>{{$doc->typecontract}}</td>
                    
                    <td>{{$doc->name}}</td>
                    <td>{{$doc->description}}</td>
                    <td>{{$doc->format}}</td>
                    <td>{{$doc->weight}}</td>
                    <td>
                     {!!link_to_route('documento.edit', $title = 'Editar', $parameters = $doc, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    <td>
                      {!!Form::open(['route'=>['documento.destroy', $doc], 'method' => 'DELETE'])!!}
                      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                      {!!Form::close()!!}
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
      <!--Segunda tabla -->
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-2">Propuesta Ganadora de la Supervisión</a>
              <div id="accordion-2" class="accordion-section-content">
              
               <p class="header-right">
                 {!!link_to_route('documento.create', $title = 'Nuevo', $parameters = "", $attributes =  ['class'=>'btn btn-primary'])!!}
               </p>
              
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                     
                      <tr>
                      <td> <th>Tipo de contrato</th>
                     
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Formato</th>
                      <th>Tamaño</th></td></tr>
                  </thead>
                      @foreach($docg as $doc)
                  <tbody>
                    <td></td>
                    <td>{{$doc->typecontract}}</td>
                    
                    <td>{{$doc->name}}</td>
                    <td>{{$doc->description}}</td>
                    <td>{{$doc->format}}</td>
                    <td>{{$doc->weight}}</td>
                    <td>
                     {!!link_to_route('documento.edit', $title = 'Editar', $parameters = $doc, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    <td>
                      {!!Form::open(['route'=>['documento.destroy', $doc], 'method' => 'DELETE'])!!}
                      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                      {!!Form::close()!!}
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
  <!--Tercer tabla-->
  <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-3">Proceso de Licitación de la Supervisión</a>
              <div id="accordion-3" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('documento.create', $title = 'Nuevo', $parameters = "", $attributes =   ['class'=>'btn btn-primary'])!!}
              </p>
                            <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table">
                    <thead>
                      <tr>
                      <td> <th>Tipo de contrato</th>
                     
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Formato</th>
                      <th>Tamaño</th></td></tr>
                  </thead>
                  @foreach($docl as $doc)
                  <tbody>
                    <td></td>
                    <td>{{$doc->typecontract}}</td>
                    
                    <td>{{$doc->name}}</td>
                    <td>{{$doc->description}}</td>
                    <td>{{$doc->format}}</td>
                    <td>{{$doc->weight}}</td>
                    <td>
                     {!!link_to_route('documento.edit', $title = 'Editar', $parameters = $doc, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    <td>
                      {!!Form::open(['route'=>['documento.destroy', $doc], 'method' => 'DELETE'])!!}
                      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                      {!!Form::close()!!}
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
</
