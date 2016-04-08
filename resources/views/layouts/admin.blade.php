<!DOCTYPE HTML>
<html>
<head>
  <title>Sisec</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Sisec" />
 <script type="application/x-javascript"> 
    addEventListener("load", 
    function() 
    { setTimeout(hideURLbar, 0); }, false); 
    function hideURLbar(){ window.scrollTo(0,1); } 
  </script>
  <!-- Bootstrap Core CSS -->
  {!!Html::style('css/bootstrap.css')!!}
  <!-- Custom CSS -->
  {!!Html::style('css/style.css')!!}
  <!-- font CSS -->
  <!-- font-awesome icons -->
  {!!Html::style('css/font-awesome.css')!!}
  <!-- //font-awesome icons -->
  <!-- js-->
  {!!Html::script('js/jquery-1.11.1.min.js')!!}
  {!!Html::script('js/modernizr.custom.js')!!}
  <!--webfonts-->
  {!!Html::style('//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic')!!}
  <!--//webfonts--> 
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

  <script type="text/javascript" src="dynamicoptionlist.js"></script>

<!--//select-->

  </script>
  <!--//select-->


  <!--animate-->
  {!!Html::style('css/animate.css')!!}
  {!!Html::script('js/wow.min.js')!!}
  <script>
     new WOW().init();
  </script>
  <!--//end-animate-->
  <!-- chart -->
  {!!Html::script('js/Chart.js')!!}
  <!-- //chart -->
  <!-- Metis Menu -->
  {!!Html::script('js/metisMenu.min.js')!!}
  {!!Html::script('js/custom.js')!!}
  {!!Html::style('css/custom.css')!!}
  <!--//Metis Menu -->
</head> 

<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
    <div class=" sidebar" role="navigation">
        <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
          <ul class="nav" id="side-menu">
            <li>
              <a href="{!!URL::to('admin')!!}" class="active"><i class="fa fa-home nav_icon"></i>Inicio</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-book nav_icon"></i>Catalogos<span class=""></span> <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="{!!URL::to('empresa')!!}">Empresas</a>
                </li>

                <li>
                  <a href="{!!URL::to('usuario')!!}">Usuarios</a>
                </li>
                <li>
                  <a href="{!!URL::to('expediente')!!}">Integracion de </p>
                                                      Expedientes</a>

                <li>
                  <a href="{!!URL::to('documento')!!}">Documentos</a>

                </li>
              </ul>

              <!-- /nav-second-level -->
            </li>
            <li class="">
              <a href="#"><i class="fa fa-file-text-o  nav_icon"></i>Contratos <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="#">General<span class="nav-badge-btm"></span></a>
                </li>
                <li>
                  <a href="#">Typography</a>
                </li>
              </ul>
              <!-- /nav-second-level -->
            </li>
         
            <li>
              <a href="#"><i class="fa fa-table nav_icon"></i>Tablero de Control<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="#">Inbox <span class="nav-badge-btm"></span></a>
                </li>
                <li>
                  <a href="#">Compose email</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>
            <li>
              <a href="#"><i class="fa fa-bar-chart nav_icon"></i>Reportes<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
                  <a href="#">Inbox <span class="nav-badge-btm"></span></a>
                </li>
                <li>
                  <a href="#">Compose email</a>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>
          </ul>
          <div class="clearfix"> </div>
          <!-- //sidebar-collapse -->
        </nav>
      </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="">
          <a href="{!!URL::to('admin')!!}">
            <img src="/images/LOGO.png" width="200" height="100"margin="10em">
          </a>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="search-box">
       <center><h2>Sistema de Seguimiento y Control de Carreteras</h2></center></div>
        <span></span>
      </div>

      <div class="header-right">
        <div class="profile_details">   
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"><img src="" alt=""> </span> 
                  <div class="user-name">
                    <p>Administrador</p>
                    <span>Administrator</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        @yield('content')
      </div>
    </div>
    <!--footer-->
    <div class="footer">
       <p>&copy; SIsec</p>
    </div>
        <!--//footer-->
  </div>
  <!-- Classie -->
   {!!Html::script('js/classie.js')!!}
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
        showLeftPush.onclick = function() 
        {
          classie.toggle( this, 'active' );
          classie.toggle( body, 'cbp-spmenu-push-toright' );
          classie.toggle( menuLeft, 'cbp-spmenu-open' );
          disableOther( 'showLeftPush' );
        };
  
      function disableOther( button ) 
      {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
    <!--scrolling js-->
  
    {!!Html::script('js/scripts.js')!!}
    <!--//scrolling js-->
    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/bootstrap.js')!!}
    @section('scripts')
    @show
  </body>
</html>