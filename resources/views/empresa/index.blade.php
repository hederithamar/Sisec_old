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
                        <table id="table1" class='table'>
                            <thead>
                              <th width="10px">RFC</th>
                              <th >Nombre</th>
                              <th >Representante</th>
                              <th >Celular</th>
                              <th >Email</th>
                              <th >Direccion</th>
                              <th >Acción</th>
                            </thead>
                            @foreach($enterpricesSup as $enterprice)
                          <tbody>
                              <td >{{$enterprice->rfc}}</td>
                              <td >{{$enterprice->name}}</td>
                              <td >{{$enterprice->legalagent}}</td>
                              <td >{{$enterprice->phone}}</td>
                              <td >{{$enterprice->email}}</td>
                              <td >{{$enterprice->address}}</td>
                              <td>
                                {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn btn-primary'])!!}
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
                            var tf2 = setFilterGrid("table1", table1_Props);
                        </script>
                      </div>    
                    {!!$enterpricesSup->render()!!}
                  </div>
                </div>
            </div>
        </div><!--end .accordion-section-->
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
<<<<<<< HEAD
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
                      <td >{{$enterprice->name}}</td>
                      <td >{{$enterprice->legalagent}}</td>
                      <td >{{$enterprice->phone}}</td>
                      <td >{{$enterprice->email}}</td>
                      <td >{{$enterprice->address}}</td>
                      <td>
                       {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn btn-primary'])!!}
                       </td>
                      </tbody>
                    @endforeach
                  </table>
                  {!!$enterpricesCons->render()!!}
                  <script>
                    var table2_Props = {
                    col_0: "input",
                    col_6: "none",
                    display_all_text: " [ Show all ] ",
                    sort_select: true
                    };
                    var tf2 = setFilterGrid("table2", table2_Props);
                  </script>
=======
                      <!--aqui va la tabla-->
                    <table id="table2" class="table-editable" >
                       <thead>
                          <th width="10px">RFC</th>
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
                        <td >{{$enterprice->name}}</td>
                        <td >{{$enterprice->legalagent}}</td>
                        <td >{{$enterprice->phone}}</td>
                        <td >{{$enterprice->email}}</td>
                        <td >{{$enterprice->address}}</td>
                        <td>
                         {!!link_to_route('empresa.edit', $title = 'Editar', $parameters = $enterprice, $attributes = ['class'=>'btn btn-primary'])!!}
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
>>>>>>> 37d102b3656b15ba4675eb73b42410d36b2e818f
                </div>
                 {!!$enterpricesCons->render()!!}
              </div>
<<<<<<< HEAD
            </div><!--end .accordion-section-->
=======
            </div>
>>>>>>> 37d102b3656b15ba4675eb73b42410d36b2e818f
          </div>
        </div><!--end .accordion-section-->
      </div>
    </div>
  </div>

@endsection