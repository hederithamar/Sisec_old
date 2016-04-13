<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Seguimiento y Control</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sistema de Seguimiento y control" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
  <!-- Bootstrap Core CSS -->
  {!!Html::style('css/bootstrap.min.css')!!}
  <!-- Custom CSS -->
  {!!Html::style('css/style.css')!!}
  <!-- Graph CSS -->
  {!!Html::style('css/font-awesome.css')!!}  
  <!-- jQuery -->
  <!--webfonts-->
  {!!Html::style('//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400')!!}
  <!-- lined-icons -->
  {!!Html::style('css/icon-font.min.css')!!}
  <!-- /js -->
  {!!Html::script('js/jquery-1.10.2.min.js')!!}
  <!--select-->
  {!!Html::style('css/select2.min.css')!!}
  {!!Html::script('js/select2.full.min.js')!!}
  <script type="text/javascript">
    $('select').select2();
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".js-example-basic-single").select2();
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".js-example-tags").select2({
      tags: true
      })
    });
  </script>
  <!--libreria para manipular los select -->
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
  <div class="left-content">
     <div class="inner-content">
    <!-- header-starts -->
      <div class="header-section">
            <!--menu-right-->
            <div class="top_menu">
                <div class="main-search">
                  <center><h5>SISTEMA DE SEGUIMIENTO Y CONTROL</h5></center>
                  <div class="close"><img src="images/cross.png" /></div>
                </div>
                  <div class="srch"><button></button></div>
                  <script type="text/javascript">
                     $('.main-search').hide();
                    $('button').click(function (){
                      $('.main-search').show();
                      $('.main-search text').focus();
                    }
                    );
                    $('.close').click(function(){
                      $('.main-search').hide();
                    });
                  </script>
              <!--/profile_details-->
                <div class="profile_details_left">
                  <ul class="nofitications-dropdown">
                      <li class="dropdown note dra-down">
                                    
                    </li>
                  
                    <li class="dropdown note">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

                        
                          <ul class="dropdown-menu two first">
                            <li>
                              <div class="notification_header">
                                <h3>You have 3 new messages  </h3> 
                              </div>
                            </li>
                            <li><a href="#">
                               <div class="user_img"><img src="images/1.jpg" alt=""></div>
                               <div class="notification_desc">
                              <p>Lorem ipsum dolor sit amet</p>
                              <p><span>1 hour ago</span></p>
                              </div>
                               <div class="clearfix"></div> 
                             </a></li>
                             <li class="odd"><a href="#">
                              <div class="user_img"><img src="images/in.jpg" alt=""></div>
                               <div class="notification_desc">
                              <p>Lorem ipsum dolor sit amet </p>
                              <p><span>1 hour ago</span></p>
                              </div>
                              <div class="clearfix"></div>  
                             </a></li>
                            <li><a href="#">
                               <div class="user_img"><img src="images/in1.jpg" alt=""></div>
                               <div class="notification_desc">
                              <p>Lorem ipsum dolor sit amet </p>
                              <p><span>1 hour ago</span></p>
                              </div>
                               <div class="clearfix"></div> 
                            </a></li>
                            <li>
                              <div class="notification_bottom">
                                <a href="#">See all messages</a>
                              </div> 
                            </li>
                          </ul>
                    </li>
                    
              <li class="dropdown note">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

                  <ul class="dropdown-menu two">
                    <li>
                      <div class="notification_header">
                        <h3>You have 5 new notification</h3>
                      </div>
                    </li>
                    <li><a href="#">
                      <div class="user_img"><img src="images/in.jpg" alt=""></div>
                       <div class="notification_desc">
                      <p>Lorem ipsum dolor sit amet</p>
                      <p><span>1 hour ago</span></p>
                      </div>
                      <div class="clearfix"></div>  
                     </a></li>
                     <li class="odd"><a href="#">
                      <div class="user_img"><img src="images/in5.jpg" alt=""></div>
                       <div class="notification_desc">
                      <p>Lorem ipsum dolor sit amet </p>
                      <p><span>1 hour ago</span></p>
                      </div>
                       <div class="clearfix"></div> 
                     </a></li>
                     <li><a href="#">
                      <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                       <div class="notification_desc">
                      <p>Lorem ipsum dolor sit amet </p>
                      <p><span>1 hour ago</span></p>
                      </div>
                       <div class="clearfix"></div> 
                     </a></li>
                     <li>
                      <div class="notification_bottom">
                        <a href="#">See all notification</a>
                      </div> 
                    </li>
                  </ul>
              </li> 
            <li class="dropdown note">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
                    <ul class="dropdown-menu two">
                    <li>
                      <div class="notification_header">
                        <h3>You have 9 pending task</h3>
                      </div>
                    </li>
                    <li><a href="#">
                        <div class="task-info">
                        <span class="task-desc">Database update</span><span class="percentage">40%</span>
                        <div class="clearfix"></div>  
                         </div>
                        <div class="progress progress-striped active">
                         <div class="bar yellow" style="width:40%;"></div>
                      </div>
                    </a></li>
                    <li><a href="#">
                      <div class="task-info">
                        <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                         <div class="clearfix"></div> 
                      </div>
                       
                      <div class="progress progress-striped active">
                         <div class="bar green" style="width:90%;"></div>
                      </div>
                    </a></li>
                    <li><a href="#">
                      <div class="task-info">
                        <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                        <div class="clearfix"></div>  
                      </div>
                       <div class="progress progress-striped active">
                         <div class="bar red" style="width: 33%;"></div>
                      </div>
                    </a></li>
                    <li><a href="#">
                      <div class="task-info">
                        <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                         <div class="clearfix"></div> 
                      </div>
                      <div class="progress progress-striped active">
                         <div class="bar  blue" style="width: 80%;"></div>
                      </div>
                    </a></li>
                    <li>
                      <div class="notification_bottom">
                        <a href="#">See all pending task</a>
                      </div> 
                    </li>
                  </ul>
              </li>                         
              <div class="clearfix"></div>  
                </ul>
              </div>
              <div class="clearfix"></div>  
              <!--//profile_details-->
            </div>
            <!--//menu-right-->
          <div class="clearfix"></div>
        </div>
          <!-- //header-ends -->
            <!--outter-wp-->
              <div class="outter-wp">
                  
                  <div class="graph-visual tables-main">
                        @yield('content')
                    </div>
                    <!--//graph-visual-->
                  </div>
                  <!--//outer-wp-->
                   <!--footer section start-->
                    <footer>
                       <p>&copy 2016 SISEC .</p>
                    </footer>
                  <!--footer section end-->
                </div>
              </div>
        <!--//content-inner-->

      <!--/sidebar-menu-->
        <div class="sidebar-menu">
          <header class="logo">
          <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="{!!URL::to('admin')!!}"> <span id="logo"> <h1>SISEC</h1></span> 
          <!--<img id="logo" src="" alt="Logo"/>--> 
          </a> 
        </header>
      <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
      <!--/down-->
              <div class="down">  
                    <a href="{!!URL::to('admin')!!}"><img src="/images/in10.jpg"></a>
                    <a href="{!!URL::to('admin')!!}"><span class=" name-caret">Usuario 1</span></a>
                   <p>Administrator</p>
                  <ul>
                  <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                    <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                    <li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
                    </ul>
                  </div>
                 <!--//down-->
                <div class="menu">
                  <ul id="menu" >
                    <li><a href="{!!URL::to('admin')!!}"><i class="lnr lnr-home"></i><span>Inicio</span></a></li>
                    <li id="menu-academico" ><a href="{!!URL::to('#')!!}"><i class="lnr lnr-book"></i> <span>Catálogo</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                      <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{!!URL::to('empresa')!!}"><i class="lnr lnr-apartment"></i>Empresas</a></li>
                        <li id="menu-academico-boletim" ><a href="{!!URL::to('usuario')!!}"><i class="lnr lnr-users"></i>Usuarios</a></li>
                      <li id="menu-academico-boletim" ><a href="{!!URL::to('expediente')!!}"><i class="lnr lnr-paperclip"></i>Integración de expedientes</a></li>
                      <li id="menu-academico-boletim" ><a href="{!!URL::to('documentos')!!}"><i class="lnr lnr-layers"></i>Documentos previos</a></li>
                      </ul>
                   </li>
                   <li id="menu-academico" ><a href="{!!URL::to('#')!!}"><i class="fa fa-file-text-o"></i> <span>Contrato</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                       <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{!!URL::to('#')!!}">Titulo 1</a></li>
                        <li id="menu-academico-boletim" ><a href="{!!URL::to('#')!!}">Titulo 2</a></li>
                        <li id="menu-academico-boletim" ><a href="{!!URL::to('#')!!}">Titulo 3</a></li>
                        <li id="menu-academico-boletim" ><a href="{!!URL::to('#')!!}">Titulo 4</a></li>
                        </ul>
                     </li>
                     <li id="menu-academico" ><a href="{!!URL::to('#')!!}"><i class="fa fa-table"></i> <span> Tablero de Control</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                       <ul id="menu-academico-sub" >
                      <li id="menu-academico-avaliacoes" ><a href="{!!URL::to('#')!!}"> Titulo 1</a></li>
                      <li id="menu-academico-boletim" ><a href="{!!URL::to('#')!!}">Titulo 2</a></li>

                      <li id="menu-academico-avaliacoes" ><a href="{!!URL::to('#')!!}">Titulo 3</a></li>
                      
                      </ul>
                    </li>
                  <li><a href="{!!URL::to('#')!!}"><i class="lnr lnr-chart-bars"></i> <span>Reportes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                    <li><a href="{!!URL::to('#')!!}"><i class="lnr lnr-map"></i> Estaticos</a></li>
                    <li><a href="{!!URL::to('#')!!}"><i class="lnr lnr-apartment"></i> Dinamicos</a></li>
                  </ul>
                  </li>
                  </ul>
                </div>
                </div>
                <div class="clearfix"></div>    
              </div>
              <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
  <!--js -->
  
  {!!Html::script('js/scripts.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}
  @section('scripts')
  @show
  <!-- Bootstrap Core JavaScript -->
  
</body>
</html>