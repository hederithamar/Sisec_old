@extends('layouts.admin')
@include('alerts.success')

<!--libreria para manipular los acordeones -->
  {!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::style('css/filtergrid.css')!!}
  {!!Html::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')!!}
  {!!Html::style('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')!!}
  {!!Html::script('js/accordion.js')!!}
  {!!Html::script('js/tablefilter_all_min.js')!!}
  

  <style type="text/css">
  .container {
    width: 30em;
    overflow-x: auto;
    white-space: nowrap;
  }
  </style>

@section('content')
<div class="graph">
<!--/sub-heard-part-->
<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
      <li><a href="{!!URL::to('admin')!!}">Home</a></li>
      <li class="active">Integracion de Expedientes</li>
    </ol>
  </div> 
<!--/sub-heard-part-->  
	<div clas="container" id="Layer1" overflow: scroll;>
    <!--div class="main"--> 
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">E.P. </a>
              <div id="accordion-1" class="accordion-section-content">
         <p class="header-right">
                  {!!link_to_route('expediente.create', $title = 'Nuevo', $parameters = "", $attributes =  ['class'=>'btn btn-primary'])!!}
                </p>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table1" class="table-editable" >
                    <thead>
                     
						
                    
                    <th>E.P.</th>
                    <TH>Tipo de Doc.</TH>
                    <TH>Nombre</TH>
                    <TH>Descripcion</TH>
                    <th>Formato</th>
                    <th>Peso</th>
                    <TH>Ruta</TH>

												</thead>

           @foreach($integrations as $integration)
									<tbody>
										
										<td>{{$integration->ep}}</td>
                    <td>{{$integration->type}}</td>
                    <td>{{$integration->name}}</td>
										<td>{{$integration->description}}</td>
										<td>{{$integration->format}}</td>
										<td>{{$integration->weight}}</td>
                    <td>{{$integration->route}}</td>                  
										<td>


											{!!link_to_route('expediente.edit', $title = 'Editar', $parameters = $integration, $attributes = ['class'=>'btn btn-primary'])!!}
										</td>
									</tbody>
								@endforeach

          
                </table>
                   <script>
                  var table1_Props = {
                  col_0: "input",
                  col_6: "none",
                  display_all_text: " [ Show all ] ",
                  sort_select: true
                  };
                  var tf1 = setFilterGrid("table1", table1_Props);
                </script>
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