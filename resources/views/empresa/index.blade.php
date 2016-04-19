  @extends('layouts.admin')

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
                <li class="active">Empresas</li>
              </ol>
            </div>
            <!--/sub-heard-part-->  
            <div class="clearfix"> </div> 
          </div>
          <div class="col-md-3 widget states-last"></div>
          <div class="col-md-3 widget states-last"></div>
          <div class="col-md-3 widget states-thrd">
            {!!link_to_route('empresa.create', $title = 'Nuevo', $parameters = "", $attributes =   ['class'=>'btn green'])!!}
            <div class="clearfix"> </div> 
          </div>
        <div class="clearfix"> </div> 
      </div>
    </div>
    <!--//custom-ruta-->
    @include('alerts.success')
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
                    @foreach($enterprisesSup as $enterprise)
                    <tbody>
                      <td >{{$enterprise->rfc}}</td>
                      <td >{{$enterprise->nameemp}}</td>
                      <td >{{$enterprise->legalagent}}</td>
                      <td >{{$enterprise->phone}}</td>
                      <td >{{$enterprise->email}}</td>
                      <td >{{$enterprise->address}}</td>
                      <td>
                        {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprise, $attributes = ['class'=>'btn blue'])!!}
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
                {!!$enterprisesSup->render()!!}
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
                    @foreach($enterprisesCons as $enterprise)
                    <tbody>
                      <td >{{$enterprise->rfc}}</td>
                      <td >{{$enterprise->nameemp}}</td>
                      <td >{{$enterprise->legalagent}}</td>
                      <td >{{$enterprise->phone}}</td>
                      <td >{{$enterprise->email}}</td>
                      <td >{{$enterprise->address}}</td>
                      <td>
                        {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprise, $attributes = ['class'=>'btn blue'])!!}
                      </td>
                    </tbody>
                    @endforeach
                  </table>
                  <script>
                    var table2_Props = {
                    col_0: "input",
                    col_6: "none",
                    display_all_text: " [ Show all ] ",
                    sort_select: true
                    };
                    var tf2 = setFilterGrid("table2", table2_Props);
                  </script>
                </div>
                {!!$enterprisesCons->render()!!}
              </div>
            </div>
          </div>
        </div>
      </div><!--end .accordion-section-->
    </div>
  </div>
  @endsection