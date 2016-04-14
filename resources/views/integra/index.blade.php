@extends('layouts.admin')
@include('alerts.success')

	{!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')!!}
  {!!Html::style('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')!!}
  {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')!!}
  {!!Html::script('js/modernizr.custom.js')!!}
  {!!Html::script('js/accordion.js')!!}


@section('content')
	<div clas="container" id="Layer1" overflow: scroll;>
    <div class="main">
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">E.P. 01</a>
              <div id="accordion-1" class="accordion-section-content">
              <p class="header-right">
              		
              </p>
              <div id="table" class="table-editable">
                <div class="forms">
                <div id="players" class="form-body" >
                  <!--aqui va la tabla-->
                  <table id="RankingPlayers" class="table">
                    <thead>
										<th>Tipo de Doc.</th>
                    <!--TH>Tipo de Proceso</TH-->
                    <th>E.P.</th>
                    <TH>Nombre</TH>
                    <TH>Descripcion</TH>
                    <th>Formato</th>
                    <th>Peso</th>
										</thead>
                    @foreach($integrations as $integration)
									 <tbody>	
										<td>{{$integration->typecontract}}</td>
                    <td>{{$integration->ep}}</td>
										<td>{{$integration->name}}</td>
										<td>{{$integration->description}}</td>
										<td>{{$integration->fort}}</td>
										<td>{{$integration->weight}}</td>
                    <td>{{$integration->route}}</td>                  
										<td>
											{!!link_to_route('expediente.edit', $title = 'Editar', $parameters = $integration, $attributes = ['class'=>'btn btn-primary'])!!}
										</td>
									</tbody>
								@endforeach
                </table>
                {!!$integrations->render()!!}
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