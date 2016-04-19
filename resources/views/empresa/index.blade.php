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
          <a class="accordion-section-title" href="#accordion-1">Empresas Supervisoras</a>
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
                      <th >RFC</th>
                      <th >Nombre</th>
                      <th >Representante</th>
                      <th >Celular</th>
                      <th >Email</th>
                      <th >Direccion</th>
                      <th >Acción</th>
                    </thead>
                    <tbody>
                      @foreach($enterpricesSup as $enterprice)
                      <tr>
                        <td >{{$enterprice->rfc}}</td>
                        <td >{{$enterprice->nameemp}}</td>
                        <td >{{$enterprice->legalagent}}</td>
                        <td >{{$enterprice->phone}}</td>
                        <td >{{$enterprice->email}}</td>
                        <td >{{$enterprice->address}}</td>
                        <td>
                          {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn blue'])!!}
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
          <a class="accordion-section-title" href="#accordion-2">Empresas Constructoras</a>
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
                    <a href="excelempcons">
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
                      <th >RFC</th>
                      <th >Nombre</th>
                      <th >Representante</th>
                      <th >Celular</th>
                      <th >Email</th>
                      <th >Direccion</th>
                      <th >Acción</th>
                    </thead>
                    @foreach($enterpricesCons as $enterprice)
                    <tbody>
                      <td >{{$enterprice->rfc}}</td>
                      <td >{{$enterprice->nameemp}}</td>
                      <td >{{$enterprice->legalagent}}</td>
                      <td >{{$enterprice->phone}}</td>
                      <td >{{$enterprice->email}}</td>
                      <td >{{$enterprice->address}}</td>
                      <td>
                        {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn blue'])!!}
                      </td>
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
              {!!Html::script('js/jquery.dataTables.js')!!}
                
                <script type="text/javascript">
                $(document).ready(function()
                {
                 $('#table2').DataTable();
                });
              </script>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->
    </div>
  @endsection