@extends('layouts.admin')
@include('alerts.success')

  {!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::style('css/filtergrid.css')!!}
  {!!Html::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')!!}
  {!!Html::style('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css')!!}
  {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')!!}
  {!!Html::script('js/modernizr.custom.js')!!}
  {!!Html::script('js/accordion.js')!!}
  {!!Html::script('js/tablefilter_all_min.js')!!}

@section('content')
<style type="text/css">
.container {
    width: 30em;
    overflow-x: auto;
    white-space: nowrap;
}
</style>
  <div clas="container" id="Layer1" overflow: scroll;>
    <div class="main">
        <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-1">Administradores</a>
              <div id="accordion-1" class="accordion-section-content">
              <p class="header-right">

               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}

              </p>
              <h4>Administradores</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table-editable" id="table1" border="1" cellpadding="25" cellspacing="2">
                    <thead>
                      <th width="6">Nombre</th>
                      <th width="6">Apellido P.</th>
                      <th width="6">Apellido M.</th>
                      <th width="6">Email</th>
                      <th width="20">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="10">Telefono</th>
                      <th width="6">Empresa</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersAdmin as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['name']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                <script>
                  var table1_Props = {
                      col_0: "input",
                      col_9: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf1 = setFilterGrid("table1", table1_Props);
                </script>
              </div>
            </div>
          </div><!--end .accordion-section-->
            {!!$enterpricesSup->render()!!}
        </div>
      </div>
    </div>
    <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-2">Residentes Generales</a>
              <div id="accordion-2" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Residentes Generales</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table class="table-editable" id="table2" border="1" cellpadding="25" cellspacing="2">
                      <thead>
                      <th width="6">Nombre</th>
                      <th width="6">Apellido P.</th>
                      <th width="6">Apellido M.</th>
                      <th width="6">Email</th>
                      <th width="20">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="10">Telefono</th>
                      <th width="6">Empresa</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersRGen as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['name']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table2_Props = {
                      col_0: "input",
                      col_9: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf2 = setFilterGrid("table2", table2_Props);
                </script>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-3">SuperIntendentes de Servicio</a>
              <div id="accordion-3" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>SuperIntedentes de Servicio</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table3" border="1" cellpadding="25" cellspacing="2">
                      <thead>
                      <th width="6">Nombre</th>
                      <th width="6">Apellido P.</th>
                      <th width="6">Apellido M.</th>
                      <th width="6">Email</th>
                      <th width="20">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="10">Telefono</th>
                      <th width="6">Empresa</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersServ as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['name']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table3_Props = {
                      col_0: "input",
                      col_9: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf3 = setFilterGrid("table3", table3_Props);
                </script>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-4">Residentes de Obra</a>
              <div id="accordion-4" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Residentes de Obra</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table4" border="1" cellpadding="25" cellspacing="2">
                     <thead>
                      <th width="6">Nombre</th>
                      <th width="6">Apellido P.</th>
                      <th width="6">Apellido M.</th>
                      <th width="6">Email</th>
                      <th width="20">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="10">Telefono</th>
                      <th width="6">Empresa</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersRObr as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['name']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                <script>
                  var table4_Props = {
                      col_0: "input",
                      col_9: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf4 = setFilterGrid("table4", table4_Props);
                </script>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-5">Centro SCT</a>
              <div id="accordion-5" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Centro SCT</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table5" border="1" cellpadding="25" cellspacing="2">
                    <thead>
                      <th width="6">Nombre</th>
                      <th width="6">Apellido P.</th>
                      <th width="6">Apellido M.</th>
                      <th width="6">Email</th>
                      <th width="20">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="10">Telefono</th>
                      <th width="6">Empresa</th>
                      <th width="10">Accion</th>
                    </thead>
                    @foreach($usersCen as $user)
                  <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstlastname}}</td>
                    <td>{{$user->secondlastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->state}}</td>
                    <td>{{$user->zone}}</td>
                    <td>{{$user->celphone}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->enterprice['name']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table5_Props = {
                      col_0: "input",
                      col_9: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf5 = setFilterGrid("table5", table1_Props);
                </script>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
      <div class="accordion">
          <div class="accordion-section">
              <a class="accordion-section-title" href="#accordion-6">Jefes de Oficina Técnica</a>
              <div id="accordion-6" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Jefes de Oficina Técnica</h4>
              <div id="table" class="table-editable">
                <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table  class="table-editable" id="table6" border="1" cellpadding="25" cellspacing="2">
                    <thead>
                      <th width="6">Nombre</th>
                      <th width="6">Apellido P.</th>
                      <th width="6">Apellido M.</th>
                      <th width="6">Email</th>
                      <th width="20">Estado</th>
                      <th width="10">Zona</th>
                      <th width="10">Celular</th>
                      <th width="10">Telefono</th>
                      <th width="6">Empresa</th>
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
                    <td>{{$user->enterprice['name']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                     </td>
                  </tbody>
                  @endforeach
                </table>
                 <script>
                  var table6_Props = {
                      col_0: "input",
                      col_9: "none",
                      display_all_text: " [ Show all ] ",
                      sort_select: true
                  };
                  var tf6 = setFilterGrid("table6", table6_Props);
                </script>
                </div>
              </div>
              </div><!--end .accordion-section-->
          </div>
        </div>
      </div>
    </div>
  </div>

  {!!Html::script('js/classie.jss')!!}
  {!!Html::script('js/borderMenu.js')!!}
  {!!Html::script('js/index.js')!!}

@endsection