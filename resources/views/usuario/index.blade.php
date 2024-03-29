 @extends('layouts.admin')

  <!--libreria para manipular los acordeones -->
  {!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::style('css/filtergrid.css')!!}
  {!!Html::style('css/jquery-ui.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::script('js/jquery-1.11.1.min.js')!!}
  {!!Html::script('js/accordion.js')!!}
  {!!Html::style('css/jquery.dataTables.css')!!}

  @section('content')
    <div clas="container" id="Layer1" overflow: scroll;>
      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-1">Administradores</a>
          <div id="accordion-1" class="accordion-section-content">
            <!--//boton flotante-->    
            <div class="float-right">
              <div class="dropdown">
              <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog icon_8"></i>
                <i class="fa fa-chevron-down icon_8"></i>
                <div class="ripple-wrapper"></div></a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a href="excelempsup">
                    <i class="fa fa-download icon_9"></i>Descargar Excel</a>
                  </li>
                </ul>
              </div>
            </div><!--//fin boton float-->    
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table1" class="table-editable" >
                    <thead>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Status</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($usersAdmin as $user)
                      <tr>
                        <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->celphone}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#table1').DataTable();
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->

      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-2">Residentes Generales</a>
          <div id="accordion-2" class="accordion-section-content">
            <!--//boton flotante-->    
            <div class="float-right">
              <div class="dropdown">
              <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog icon_8"></i>
                <i class="fa fa-chevron-down icon_8"></i>
                <div class="ripple-wrapper"></div></a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a href="excelempsup">
                    <i class="fa fa-download icon_9"></i>Descargar Excel</a>
                  </li>
                </ul>
              </div>
            </div><!--//fin boton float-->    
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table2" class="table-editable" >
                    <thead>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Centro SCT</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Status</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($usersReG as $user)
                      <tr>
                        <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->celphone}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#table2').DataTable();
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->

      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-3">Superintendentes de Servicio</a>
          <div id="accordion-3" class="accordion-section-content">
            <!--//boton flotante-->    
            <div class="float-right">
              <div class="dropdown">
              <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog icon_8"></i>
                <i class="fa fa-chevron-down icon_8"></i>
                <div class="ripple-wrapper"></div></a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a href="excelempsup">
                    <i class="fa fa-download icon_9"></i>Descargar Excel</a>
                  </li>
                </ul>
              </div>
            </div><!--//fin boton float-->    
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table3" class="table-editable" >
                    <thead>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Empresa</th>
                      <th>Status</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($usersSup as $user)
                      <tr>      
                        <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->celphone}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->enterprise['nameemp']}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#table3').DataTable();
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->

      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-4">Residentes de Obra</a>
          <div id="accordion-4" class="accordion-section-content">
            <!--//boton flotante-->    
            <div class="float-right">
              <div class="dropdown">
              <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog icon_8"></i>
                <i class="fa fa-chevron-down icon_8"></i>
                <div class="ripple-wrapper"></div></a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a href="excelempsup">
                    <i class="fa fa-download icon_9"></i>Descargar Excel</a>
                  </li>
                </ul>
              </div>
            </div><!--//fin boton float-->    
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table4"class="table-editable" >
                    <thead>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Centro SCT</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Status</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($usersResOb as $user)
                      <tr>      
                        <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->celphone}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#table4').DataTable();
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->

      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-5">Centro SCT</a>
          <div id="accordion-5" class="accordion-section-content">
            <!--//boton flotante-->    
            <div class="float-right">
              <div class="dropdown">
              <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog icon_8"></i>
                <i class="fa fa-chevron-down icon_8"></i>
                <div class="ripple-wrapper"></div></a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a href="excelempsup">
                    <i class="fa fa-download icon_9"></i>Descargar Excel</a>
                  </li>
                </ul>
              </div>
            </div><!--//fin boton float-->    
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table5"class="table-editable" >
                    <thead>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Centro SCT</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Status</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($usersCent as $user)
                      <tr>      
                        <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->celphone}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#table5').DataTable();
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->

      <div class="accordion">
        <div class="accordion-section">
          <a class="accordion-section-title" href="#accordion-6">Jefe de Oficina Técnica</a>
          <div id="accordion-6" class="accordion-section-content">
            <!--//boton flotante-->    
            <div class="float-right">
              <div class="dropdown">
              <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog icon_8"></i>
                <i class="fa fa-chevron-down icon_8"></i>
                <div class="ripple-wrapper"></div></a>
                <ul class="dropdown-menu float-right">
                  <li>
                    <a href="excelempsup">
                    <i class="fa fa-download icon_9"></i>Descargar Excel</a>
                  </li>
                </ul>
              </div>
            </div><!--//fin boton float-->    
            <div id="table" class="table-editable">
              <div class="forms">
                <div class="form-body">
                  <!--aqui va la tabla-->
                  <table id="table6"class="table-editable" >
                    <thead>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Centro SCT</th>
                      <th>Celular</th>
                      <th>Telefono</th>
                      <th>Status</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($usersJef as $user)
                      <tr>      
                        <td>{{$user->name."  ".$user->firstlastname."  ".$user->secondlastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->celphone}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function(){
                  $('#table6').DataTable();
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->

    </div>
  @endsection
