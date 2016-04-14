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
  <!--custom-rata-->
    <div class="custom-widgets">
      <div class="row-one">
          <div class="col-md-3 widget">
            <!--/sub-heard-part-->
            <div class="sub-heard-part">
              <ol class="breadcrumb m-b-0">
                <li><a href="{!!URL::to('admin')!!}">Home</a></li>
                <li class="active">Usuarios</li>
              </ol>
            </div>
            <!--/sub-heard-part-->  
            <div class="clearfix"> </div> 
          </div>
          <div class="col-md-3 widget states-last"></div>
          <div class="col-md-3 widget states-last"></div>
          <div class="col-md-3 widget states-thrd">
            {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
            <div class="clearfix"> </div> 
          </div>
        <div class="clearfix"> </div> 
      </div>
    </div>
    <!--//custom-ruta-->    
  <div clas="container" id="Layer1" overflow: scroll;>
    <div class="main">
        <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">Administradores</a>
              <div id="accordion-1" class="accordion-section-content">
              <h4>Administradores</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table-editable" id="table1" border="1" cellpadding="25" cellspacing="2">
                    <thead>
                      <th width="20">Nombre</th>
                      <th width="7">Email</th>
                      <th width="10">Celular</th>
                      <th width="8">Telefono</th>
                      <th width="7">Empresa</th>
                      <th width="7">Estado</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersAdmin as $user)
                  <tbody>
                    <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                    {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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
              {!!$usersAdmin->render()!!}
            </div>
          </div>
        </div>
      </div>
    </div><!--end .accordion-section-->
    <div class="accordion">
      <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-2">Residentes Generales</a>
        <div id="accordion-2" class="accordion-section-content">
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table-editable" id="table2" border="1" cellpadding="25" cellspacing="2">

                     <thead>
                      <th width="20">Nombre</th>
                      <th width="7">Email</th>
                      <th width="15">Centro SCT</th>
                      <th width="10">Celular</th>
                      <th width="8">Telefono</th>
                      <th width="7">Empresa</th>
                      <th width="6">Estado</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersReG as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table2_Props = {
                      col_0: "input",
                      col_10: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf2 = setFilterGrid("table2", table2_Props);
                </script>
                </div>
                {!!$usersReG->render()!!}
              </div>
            </div><!--end .accordion-section-->
          </div>
      </div>
    </div>
      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-3">SuperIntendentes de Servicio</a>
          <div id="accordion-3" class="accordion-section-content">
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table3" border="1" cellpadding="25" cellspacing="2">

                     <thead>
                      <th width="7">Nombre</th>
                      <th width="7">Apellido P.</th>
                      <th width="7">Apellido M.</th>
                      <th width="7">Email</th>
                      <th width="15">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="8">Telefono</th>
                      <th width="7">Empresa</th>
                      <th width="6">Estado</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersSup as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table3_Props = {
                      col_0: "input",
                      col_10: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf3 = setFilterGrid("table3", table3_Props);
                </script>
                </div>
              </div>
              {!!$usersSup->render()!!}
            </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-4">Residentes de Obra</a>
          <div id="accordion-4" class="accordion-section-content">
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table4" border="1" cellpadding="25" cellspacing="2">
                     <thead>
                      <th width="7">Nombre</th>
                      <th width="7">Apellido P.</th>
                      <th width="7">Apellido M.</th>
                      <th width="7">Email</th>
                      <th width="15">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="8">Telefono</th>
                      <th width="7">Empresa</th>
                      <th width="6">Estado</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersResOb as $user)

                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                <script>
                  var table4_Props = {
                      col_0: "input",
                      col_10: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf4 = setFilterGrid("table4", table4_Props);
                </script>
                </div>
                {!!$usersResOb->render()!!}
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->
      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-5">Centro SCT</a>
          <div id="accordion-5" class="accordion-section-content">
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table5" border="1" cellpadding="25" cellspacing="2">
                    <thead>
                      <th width="7">Nombre</th>
                      <th width="7">Apellido P.</th>
                      <th width="7">Apellido M.</th>
                      <th width="7">Email</th>
                      <th width="15">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="8">Telefono</th>
                      <th width="7">Empresa</th>
                      <th width="6">Estado</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersCent as $user)

                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table5_Props = {
                      col_0: "input",
                      col_10: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf5 = setFilterGrid("table5", table1_Props);
                </script>
              </div>
              {!!$usersCent->render()!!}
            </div>
          </div><!--end .accordion-section-->
        </div>
      </div>
    </div>
    <div class="accordion">
      <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-6">Jefe de Oficina Técnica</a>
        <div id="accordion-6" class="accordion-section-content">
          <div id="table" class="table-editable">
            <div class="forms">
              <div class="form-body">
                  <!--aqui va la tabla-->

                  <table  class="table-editable" id="table6" border="1" cellpadding="25" cellspacing="2">
                    <thead>
                      <th width="7">Nombre</th>
                      <th width="7">Apellido P.</th>
                      <th width="7">Apellido M.</th>
                      <th width="7">Email</th>
                      <th width="15">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="8">Telefono</th>
                      <th width="7">Empresa</th>
                      <th width="6">Estado</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersJef as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                <script>
                  var table6_Props = {

                      col_0: "input",
                      col_10: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf6 = setFilterGrid("table6", table6_Props);
                </script>
              </div>
              {!!$usersJef->render()!!}
            </div>
          </div><!--end .accordion-section-->
        </div>
      </div>
    </div>
  </div>
</div>
  

@endsection