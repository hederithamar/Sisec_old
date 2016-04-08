@extends('layouts.admin')
@include('alerts.success')

  {!!Html::style('css/demo.css')!!}
  {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')!!}
  {!!Html::script('js/accordion.js')!!}

@section('content')
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
                      <th>Empresa</th>
                      <th>Acción</th>
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
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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
                      <th>Empresa</th>
                      <th>Acción</th>
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
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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
                      <th>Empresa</th>
                      <th>Acción</th>
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
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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
                      <th>Empresa</th>
                      <th>Acción</th>
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
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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
                      <th>Empresa</th>
                      <th>Acción</th>
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
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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
              <a class="accordion-section-title" href="#accordion-6">Jefe de Oficina Técnica</a>
              <div id="accordion-6" class="accordion-section-content">
              <p class="header-right">
               {!!link_to_route('usuario.create', $title = 'Nuevo', $parameters = "", $attributes = ['class'=>'btn btn-primary'])!!}
              </p>
              <h4>Jefe de Oficina Técnica</h4>
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
                      <th>Empresa</th>
                      <th>Acción</th>
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
                    <td>{{$user->enterprice['nameemp']}}</td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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

@endsection